<?php

require_once __DIR__ . '/../repositories/FilmeRepository.php';

$repo = new FilmeRepository();

if ($_POST) {

    $filme = new Filme(
        $_POST['titulo'],
        $_POST['genero'],
        $_POST['ano'],
        $_POST['diretor']
    );

    $repo->atualizar($_POST['id'], $filme);

    header("Location: index.php");
    exit();
}

$filme = $repo->buscarPorId($_GET['id']);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Filme</title>
</head>
<body>

    <h1>Editar Filme</h1>

    <form method="post">

        <input type="hidden" name="id" value="<?= $filme['id'] ?>">

        <input type="text" name="titulo" value="<?= htmlspecialchars($filme['titulo']) ?>" required>
        <br><br>

        <input type="text" name="genero" value="<?= htmlspecialchars($filme['genero']) ?>" required>
        <br><br>

        <input type="number" name="ano" value="<?= $filme['ano'] ?>" required>
        <br><br>

        <input type="text" name="diretor" value="<?= htmlspecialchars($filme['diretor']) ?>" required>
        <br><br>

        <button type="submit">Atualizar</button>

    </form>

    <br>

    <a href="index.php">Voltar</a>

</body>
</html>