<?php

class Product
{
    public function getData(): array
    {
        $dsn = "sqlite:/Applications/MAMP/htdocs/mvc/db/db.sqlite";

        $pdo = new PDO($dsn, null, null, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $pdo->query("SELECT * FROM products");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
