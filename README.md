# Sobre a Api de Dogs

- A api retorna uma lista de dogs com nome, idade e raça de doguinhos.

- Criada em php com um framework de laravel, mysql e autenticação sanctum.

- Retorna em json.


## Como usar a Api?

- http://localhost:8000/api é a url base.

- Para listar os dogs: http://localhost:8000/api/dogs com o método GET.

- Para pegar apenas um:  http://localhost:8000/api/dogs/{numero do dog, Ex:1, 2, 3} com o método GET. 

- Para procurar pela raça de um dog: http://localhost:8000/api/dogs/search/{nome da raça} com o método GET.

- Obs: Para Editar, remover, adicionar e atualizar, é preciso estar autenticado!


## Como Criar uma Conta para testar a autenticação?

- Para Criar a conta usa-se http://localhost:8000/api/register com o método POST e será retornado
o id do usuário, senha, email e o token de acesso.

- Para logar usa-se http://localhost:8000/api/login com o método POST, passando email, password, password_confirmation, name e será retornado seu token novamente!


## Editando, removendo, criando e Atualizando, após logar

- Editando: http://localhost:8000/api/dogs/{id} com o método PUT, passando name, race e age

- Removendo: http://localhost:8000/api/dogs/{id} com o método DELETE

- Criando: http://localhost:8000/api/dogs com o método POST


## Como "Deslogar"?

- http://localhost:8000/api/logout com o método POST passando como parâmetro o token de autenticação da sua conta criada