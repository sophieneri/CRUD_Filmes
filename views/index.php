<?php

require_once __DIR__ . '/../repositories/FilmeRepository.php';

$repo = new FilmeRepository();
$filmes = $repo->listar();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Filmes</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        nav a {
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #eee;
        }
    </style>

</head>

<body>

    <h1>Sistema de Cadastro de Filmes</h1>

    <nav>
        <a href="index.php">Listar Filmes</a>
        <a href="criar.php">Novo Filme</a>
    </nav>

    <table>

        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Ano</th>
            <th>Diretor</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($filmes as $f): ?>

        <tr>
            <td><?= $f['id'] ?></td>
            <td><?= htmlspecialchars($f['titulo']) ?></td>
            <td><?= htmlspecialchars($f['genero']) ?></td>
            <td><?= $f['ano'] ?></td>
            <td><?= htmlspecialchars($f['diretor']) ?></td>

            <td>
                <a href="editar.php?id=<?= $f['id'] ?>">Editar</a>

                <a href="excluir.php?id=<?= $f['id'] ?>"
                   onclick="return confirm('Deseja excluir este filme?')">
                    Excluir
                </a>
            </td>
        </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>