## Desafio
Desenvolver uma API em PHP utilizando o Framewok Laravel e Banco de Dados relacional MySQL.

## Descrição

Eu como gerente gostaria de cadastrar os Clientes e seus respectivos contatos

## Regras de Negócio
* Gravar cliente CPF/CNPJ (deve ser único);
* Quando pessoa física deve ser informado o CPF;
* Quando pessoa jurídica deve ser informado o CNPJ;
* Listar todos os clientes;
* Buscar cliente por CPF/CNPJ;
* Alterar dados do clinete;
* Excluir o cliente;
* O Cliente pode ter 1 ou vários contatos;
* Deverá ser utilizado migrations.

## Dados para implementação
### Cliente
* ID;
* Nome;
* PF ou PJ.

### Contato
* Telefone;
* Email;
* Celular.
