<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Filme.php';
require_once __DIR__ . '/../interfaces/RepositoryInterface.php';

class FilmeRepository implements RepositoryInterface
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::conectar();
    }

    public function criar($objeto)
    {
        $sql = "INSERT INTO filme (titulo, genero, ano, diretor)
                VALUES (:t, :g, :a, :d)";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':t' => $objeto->getTitulo(),
            ':g' => $objeto->getGenero(),
            ':a' => $objeto->getAno(),
            ':d' => $objeto->getDiretor()
        ]);
    }

    public function listar()
    {
        $stmt = $this->conn->query(
            "SELECT * FROM filme ORDER BY id"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id)
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM filme WHERE id = :id"
        );

        $stmt->execute([':id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $objeto)
    {
        $sql = "UPDATE filme
                SET titulo = :t,
                    genero = :g,
                    ano = :a,
                    diretor = :d
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':t' => $objeto->getTitulo(),
            ':g' => $objeto->getGenero(),
            ':a' => $objeto->getAno(),
            ':d' => $objeto->getDiretor(),
            ':id' => $id
        ]);
    }

    public function excluir($id)
    {
        $stmt = $this->conn->prepare(
            "DELETE FROM filme WHERE id = :id"
        );

        $stmt->execute([':id' => $id]);
    }
}

?>