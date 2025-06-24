<?php

$host = "localhost";
$db = "loja";
$user = "root";
$pass = "";

try{
    $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Erro ao conectar".$e->getMessage());
    }
$conexao = mysqli_connect($host, $user, $pass, $db);

if($conexao->connect_error) {
    die("Erro ao conectar" . $conexao->connect_error);
}
?>