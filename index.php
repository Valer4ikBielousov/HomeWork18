<?php

// require from database "bloger" with PHP (PDO) on mySQL
require_once __DIR__ . "/db.php";


$users = [
    ['name' => 'lena', 'email' => "lena@gmail.com", 'password' => 'lena1A'],
    ['name' => 'ivan', 'email' => "serg@gmail.com", 'password' => 'ivan1G'],
    ['name' => 'olha', 'email' => "olha@gmail.com", 'password' => 'olha1A'],
    ['name' => 'ken', 'email' => "ken@gmail.com", 'password' => 'ken1N'],
    ['name' => 'mark', 'email' => "mark@gmail.com", 'password' => 'mark1M'],
    ['name' => 'alex', 'email' => "alex@gmail.com", 'password' => 'alex1X'],
    ['name' => 'dim', 'email' => "dim@gmail.com", 'password' => 'dim1M'],
    ['name' => 'dim2', 'email' => "dim3@gmail.com", 'password' => 'dim31M']
];


$sql = "INSERT INTO `users` (`name` , `email` , `password`) VALUES (:name, :email, :password)";
$stmt = $mysql->prepare($sql);

foreach ($users as $user) {
    $stmt->bindParam(':name', $user['name']);
    $stmt->bindParam(':email', $user['email']);
    $stmt->bindParam(':password', $user['password']);
    $stmt->execute();
}


// END;