<p align="center"><a href="http://shipsmart.com.br/" target="_blank"><img src="http://shipsmart.com.br/assets/img/logo.png" width="400"></a></p>

## Sobre o teste

* Usando Laravel Framework 8.x, desenvolva o CRUD de uma agenda de contatos, que deve conter os seguintes campos: CEP, Estado, Cidade, Bairro, Endereço, Numero, Nome de Contato, Email de Contato e Telefone de Contato;
* O campo de Estado, tem que ser um combobox/select com a lista vinculada a uma tabela da base de dados relacional;
* Ao digitar um CEP, os demais campos devem ser preenchidos automaticamente com os dados vindo de uma API de endereços externa. (Use esta aqui: https://docs.awesomeapi.com.br/api-cep)
* *Os dados devem ser gravados em um banco Relacional e um Não-Relacional*;
* *Quando os dados forem alterados, devem ser alterados no banco Relacional e Não-Relacional*;
* ~~A listagem deve ser feita a partir dos dados gravados no banco Não-Relacional;~~
* Como framework javascript, utilize Vue.js, React.js ou jQuery (preferencia Vue.js) ou Javascript Puro;
* Como framework CSS, utilize Bootstrap 5.x ou TailwindCSS 2.x
* A base de dados relacional, pode ser o Sqlite ou o MySql;
* ~~A base de dados não relacional, usar o Mongodb~~;
* Use código compatível com o PHP 7.4;
* Qualquer tabela que precisar ser criada, assim como quaisquer dados padrões para as mesmas, faça isso dentro das migrations e seeders;
* Quaisquer instruções para a execução do projeto, envie no corpo do e-mail;

## Tecnologia utilizadas

- Linguagens: JS e PHP
- Front-End: Vue.js e Tailwind
- Back-End: Laravel
- Banco: MySql

## Requisitos

- Banco MySql, Node e Composer instalados na máquina.

## Instalação

Front: 
- npm install

Back:
- composer update
- Renomear o arquivo .env.example para .env e configurar com os dados de acesso a o banco de dados MySql
- php artisan key:generate
- php artisan migrate --seed

## Como rodar

Front: npm run serve
- localhost:8000

Back: php artisan serve
- localhost:8080

## Sobre o projeto

No projeto foi construído o CRUD de contatos, onde que no Back foi criado a API Restful para que o Front possa consumir essa API e que ao preencher o cep, os dados do endereço são consumidos via api e preenchidos os campos de endereços automaticamente.

## Fluxo do projeto

- Back: route -> controller -> request -> resource -> service -> model
- Front: route -> page -> componentes -> vuex -> axios

## O que foi feito

- Layout agradável em TailwindCSS.
- SPA em Vue.js.
- API Restful em Laravel.
- CRUD Contatos.
- Requisição para consumir api de cep.
- Relacionamento de estado com o contato.
- Documentação API <a href="https://documenter.getpostman.com/view/8741536/TzCMcnY4">https://documenter.getpostman.com/view/8741536/TzCMcnY4</a>

## Pendências

- Retorno de falha na validação da requisição no Front.
- Banco não relacional Mongodb.

## Melhorias

- Máscaras para os campos de entrada.

