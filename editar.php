<?php 
    include 'conexao.php';
    $id = $_POST['btnEditar'];
    $resultado = $pdo->prepare("SELECT * FROM produto WHERE id = ?");
    $resultado->execute([$id]);
    $linha = $resultado->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h1>Editar produto</h1>

<form action="atualizar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">

    <p>Nome:</p>
    <input type="text" name="nome" value="<?php echo $linha['nome'] ?>">
    
    <p>Preço:</p>
    <input type="text" name="preco" value="<?php echo $linha['preco'] ?>">

    <input type="submit" value="Atualizar">
</form>


</body>
</html>