<?php
class Database {
    private static $conn;

    public static function conectar() {
        if (!self::$conn) {
            self::$conn = new PDO(
                "pgsql:host=192.168.10.40;port=5432;dbname=crud_filmes",
                "crud_filmes",
                "1234",
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }

        return self::$conn;
    }
}
?>