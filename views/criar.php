<?php

require_once __DIR__ . '/../repositories/FilmeRepository.php';

if ($_POST) {

    $filme = new Filme(
        $_POST['titulo'],
        $_POST['genero'],
        $_POST['ano'],
        $_POST['diretor']
    );

    (new FilmeRepository())->criar($filme);

    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Filme</title>
</head>
<body>

    <h1>Cadastrar Filme</h1>

    <form method="post">

        <input type="text" name="titulo" placeholder="Título do filme" required>
        <br><br>

        <input type="text" name="genero" placeholder="Gênero" required>
        <br><br>

        <input type="number" name="ano" placeholder="Ano de lançamento" required>
        <br><br>

        <input type="text" name="diretor" placeholder="Diretor" required>
        <br><br>

        <button type="submit">Salvar</button>

    </form>

    <br>

    <a href="index.php">Voltar</a>

</body>
</html>