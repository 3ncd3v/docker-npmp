<?php

$pdo = new PDO("mysql:host=mysql;dbname=app;", 'user', 'secret');

$pdo->query("CREATE TABLE IF NOT EXISTS users(id INT, name VARCHAR(255))");
$pdo->query("INSERT INTO users(id, name)VALUES(1, 'John')");

$statement = $pdo->query("SELECT * FROM users");
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    echo $user['name'] . "<br>";
}
