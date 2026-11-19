# Exercícios MSEP – CRUD de Filmes

## EXERCÍCIOS DE APROPRIAÇÃO

### 1. Onde ocorre o CRUD?

O CRUD ocorre principalmente na classe `FilmeRepository`, localizada na pasta `repositories`.

Nela estão os métodos responsáveis por cadastrar, listar, buscar, atualizar e excluir os filmes do banco de dados.

### 2. Onde está a regra de negócio?

A classe `Filme`, localizada na pasta `models`, representa os dados de cada filme, como título, gênero, ano e diretor.

O Repository fica responsável pelas operações com o banco de dados.

### 3. Por que a classe Filme não acessa o banco diretamente?

A classe `Filme` não acessa o banco diretamente porque sua responsabilidade é representar os dados do filme.

A conexão e os comandos SQL ficam separados em outras classes. Isso deixa o código mais organizado, facilita a manutenção e evita misturar diferentes responsabilidades.
---

## Conclusão

Com esta atividade, consegui praticar a organização de um projeto PHP utilizando o padrão Repository, entender melhor a separação de responsabilidades e desenvolver operações de cadastro, consulta, edição e exclusão utilizando PostgreSQL.