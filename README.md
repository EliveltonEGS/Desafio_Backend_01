## Desafio
Desenvolver uma API Rest em PHP utilizando o Framewok Laravel e Banco de Dados relacional MySQL.

## Descrição

Eu como gerente gostaria de cadastrar os Clientes e seus respectivos contatos

## Regras de Negócio
* Gravar cliente CPF/CNPJ (deve ser único);
* Quando pessoa física deve ser informado o CPF;
* Quando pessoa jurídica deve ser informado o CNPJ;
* Listar todos os clientes;
* Buscar cliente por CPF/CNPJ;
* Alterar dados do cliente;
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

<hr/>

## EndPoints

###### POST: http://localhost:8989/api/customers

```
{
    "name": "test",
    "type": "PJ",
    "identification": "05.264.120/0001-10",
    "categories": [
        {
            "phone": "(43)0000-0000",
            "email": "test1@gmail",
            "cellphone": "(43)99645-0000"
        },
        {
            "phone": "(14)0000-0000",
            "email": "test@g2mail",
            "cellphone": "43)99645-00444"
        },
        {
            "phone": "(11)2222-3333",
            "email": "test@g3mail",
            "cellphone": "43)99645-00444"
        }
    ]
}
```
<img src="https://github.com/EliveltonEGS/desafio_backend_01/assets/58617663/18cb4b1f-3e32-4d36-a29b-07229d253e72"/>

###### GET: http://localhost:8989/api/customers
<img src="https://github.com/EliveltonEGS/desafio_backend_01/assets/58617663/4faa5aee-c308-4e2d-8420-d2fb8e220b4f"/>

###### DELETE: http://localhost:8989/api/customers/1
<img src="https://github.com/EliveltonEGS/desafio_backend_01/assets/58617663/621906ee-9893-4083-9272-aed36bb4c106"/>

###### GET: http://localhost:8989/api/customers/2
<img src="https://github.com/EliveltonEGS/desafio_backend_01/assets/58617663/2b4a65cf-d726-4c02-aa6b-d75a5ab8e27b"/>

###### PUT: http://localhost:8989/api/customers/2
```

    "name": "teste",
    "type": "PJ",
    "identification": "514.589.930-00",
    "contacts": [
        {
          "id": 4,
          "phone": "(43)0000-0200",
          "email": "test1@gmail",
          "cellphone": "(43)99645-0000",
          "customer_id": 2
        },
        {
          "id": 5,
          "phone": "(14)0000-0000",
          "email": "test@g2mail",
          "cellphone": "43)99645-00444",
          "customer_id": 2
        },
        {
          "id": 6,
          "phone": "(11)2222-3333",
          "email": "test@g3mail",
          "cellphone": "43)99645-00444",
          "customer_id": 2
        }
    ]
}
```
<img src="https://github.com/EliveltonEGS/desafio_backend_01/assets/58617663/1016fde3-4dec-44fe-94ed-3c505df77c7b"/>
