TRABALHO 

CRIAR UM NOVO MODULO USERS NA API

user.model

email : String, unique, required
password : string, required
name : String

Criar um novo modulo do front






para clonar um projeto mean

git clone git://github.com/Jarbas/Programacao.git

execute o npm init na psta do prodeto para cria-lo



Professores - 
Munif munif@munif.com.br  munifgebara@gmail.com  44 8403 4939
Guilherme  guiseek@gmail.com  github.com/guiseek 44 9840 2726

Ambos trabalham na Gumga, criando frameworks para um grupo de 12 empresas.

Exemplo aplicação: automenu.

Stack MEAN

MongoDB – utilizado pelo Foursquaredf, com réplicas separadas geograficamente.


Express – roteamento baseado em middlewares (next chama o próximo middleware caso seja 

válido). Ex: mongoose é um middleware para acessar o MongoDB pelo Express.

Colrs : trata o uso de protas api diferentes com os fornte

Angular – framework frontend, interface do usuário. Suporta two-way databinding (controller 

<-> view). Verificar componentes da Gumga: diretivas para pesquisas, endereço, tabelas, etc.

Node.js

node -v     - para vera a versao


Instruções para criar app back


1. Criar uma pasta para o projeto.

2. Executar “npm init” para criar o projeto, resultando no arquivo package.json.

3. Executar “npm install express --save" para instalar o express e incluir a dependência no 

package.json.

4. Executar “npm install mongoose --save" para instalar o mongoose e incluir a 

dependência no package.json.

5. body-parser (parser do body para json)

6. lodash (utilitários)

7. cors (trata o uso de API em porta diferente entre server e front)

para iniciar o servidor back end npm start

Instruções para criar app front

1. Criar uma pasta para o projeto.

2. Executar “bower init” para criar o projeto, resultando no arquivo bower.json.

Se for criar o projeto do inicio sem o arquivo de depndencia, caso contrario rodar o comando bower install

3. Executar “bower install angular --save" para instalar o angular e incluir a dependência 

no bower.json.

4. angular-route

5. bootstrap

6. npm install http-server –g (servidor http global)

7. http-server dentro do diretório da aplicação

para iniar o server back - http-server

