# 🎬 CRUD de Filmes

## Sobre o projeto

Este projeto consiste em um sistema de cadastro de filmes, desenvolvido utilizando PHP e PostgreSQL.

O sistema permite cadastrar, visualizar, editar e excluir filmes, facilitando a organização de uma coleção.

## Tecnologias utilizadas

- PHP
- PostgreSQL
- HTML5
- PDO

## Funcionalidades

- Cadastrar filmes;
- Listar filmes cadastrados;
- Editar informações dos filmes;
- Excluir filmes.

## Estrutura do projeto

```text
filmes_crud/
│
├── config/
│   └── Database.php
│
├── interfaces/
│   └── RepositoryInterface.php
│
├── models/
│   └── Filme.php
│
├── repositories/
│   └── FilmeRepository.php
│
├── views/
│   ├── index.php
│   ├── criar.php
│   ├── editar.php
│   ├── excluir.php
│   └── style.css
│
└── README.md
```

## Banco de dados

**Nome:** `crud_filmes`

**Tabela:** `filme`

| Campo | Tipo |
|---|---|
| id | SERIAL (PK) |
| titulo | VARCHAR(100) |
| genero | VARCHAR(50) |
| ano | INTEGER |
| diretor | VARCHAR(100) |

## Como executar o projeto

1. Abra a pasta do projeto no VS Code.
2. Configure a conexão com o PostgreSQL no arquivo `config/Database.php`.
3. Abra o terminal na pasta principal do projeto.
4. Execute o comando:

```bash
php -S localhost:8000
```

5. Acesse no navegador:

```text
http://localhost:8000/views/index.php
```


## Aprendizados

Com este projeto, foi possível praticar conceitos de PHP, conexão com banco de dados PostgreSQL, operações CRUD, organização de arquivos, interfaces e utilização do PDO.
