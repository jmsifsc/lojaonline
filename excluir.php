<?php
    require("conexao.php");
    $id = $_POST['btnApagar'];

    $resultador = $pdo->prepare("DELETE FROM produto_caracteristica WHERE id_produto= ?");
    $resultador->execute([$id]);
    
    $resultador = $pdo->prepare("DELETE FROM produto WHERE id_produto= ?");
    $resultador->execute([$id]);

    $resultador = $pdo->prepare("DELETE FROM produto WHERE id= ?");
    $resultador->execute([$id]);
    header("location: produto.php");
?>