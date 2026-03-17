<?php

$user='root';
$senha='Maximus@2026';
$dbname='escola';
$host='localhost';

try{
    $pdo=new PDO("mysql:host=$host;dbname=$dbname",$user,$senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Erro na conexão: ".$e->getMessage());
}