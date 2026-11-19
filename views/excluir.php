<?php

require_once __DIR__ . '/../repositories/FilmeRepository.php';

(new FilmeRepository())->excluir($_GET['id']);

header("Location: index.php");
exit();

?>