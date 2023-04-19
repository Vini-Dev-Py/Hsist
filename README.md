# Hsist

# Banco de Dados

O arquivo .sql responsavel por criar o banco de dados e a tabela esta na pasta DataBase, mas podemos fazer de uma maneira mais facil, podemos ir até a pasta do BackEnd e executar o seguinte comando.

```
docker-compose up --build
```

Esse comando vai inciar um container docker em nossa maquina com uma imagem do Mysql e do PHPAdmin para facilitar nos testes.

# Iniciando o BackEnd

Para iniciar o projeto primeiro vamos iniciar nosso Back-End, para isso vamos para a pasta "BackEnd" e rodar o comando para iniciar o server

```
php artisan serve
```

Isso vai iniciar um servidor local na porta 8000.

# Migration

Para montar nossa tabela vamos rodar uma migration para ficar mais facil do que executar o .sql no banco para isso vamos na pasta do BackEnd com o projeto rodando e executando o comando.

```
php artisan migrate:refresh
```

Isso criara nossa tabela de users no banco de dados gerado pelo docker com tudo que vamos precisar !

# Rota do BackEnd

Nosso BackEnd tem 1 rota que aceita post e get

```
http://127.0.0.1:8000/api/salvar
```

Post: Para salvar as informações do usuário que vem do FrontEnd
Get Para listar todos os usuário salvos no banco

# Imagem no Banco de Dados 

Os avatares de cada usuário é salvo em Base64, nosso BackEnd pega o arquivo via API e transforma ela em Base64 e salva no banco

# Iniciando o FrontEnd

Para iniciar o FrontEnd podemos fazer de duas formas, ou abrimos direto o arquivo index.html ou podemos usar a extensão do VS code Live Server para gerar um servidor do nosso FrontEnd

# Funções do FrontEnd

Nosso FrontEnd tem 2 funções, buscar dados na API do GitHub ou chamar nosso BackEnd e salvar os dados no banco mysql
