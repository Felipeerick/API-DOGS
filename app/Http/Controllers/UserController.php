<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequestLogin;
use App\Http\Requests\UserRequestRegister;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function __construct(User $model)
   {
     $this->model = $model;
   }

   public function register(UserRequestRegister $request)
   {
        $data = $this->model->create([
          "name" => $request->name,
          "email" => $request->email,
          "password" => bcrypt($request->password),
        ]);

        $token = $data->createToken('primeirotoken')->plainTextToken;

        $response = [
          "user" => $data,
          "token" => $token,
        ];

        return response($response, 200);
   }

   public function login(UserRequestLogin $request)
   {
      $user = $this->model->whereEmail($request->email);

      if(!$user || !Hash::check($request->password, $user->password)){
          return response([
            "message" => "Credenciais Invalidas"
          ],401);
      }

      $token = $user->createToken('primeirotoken')->plainTextToken;

      $response = [
        $user,
        $token,
      ];

      return response($response, 200);
   }

   public function logout()
   {
      auth()->user()->tokens()->delete();

      return [
        "message" => "logout efetuado com sucesso!"
      ];
   }

}
