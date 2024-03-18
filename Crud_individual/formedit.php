<?php
include("conecta.php");
$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>  
</head>
<body>
<form action="alterar.php" method="get">
    <h2>Edite o usuario </h2>
    <input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario'];?>">
    Edite o email
    <input  type="text" value="<?php echo $dados['senha'];?>" name="senha"/><br><br> 
    Edite senha  
    <input type="text" value="<?php echo $dados['email'];?>" name="email" id="email"/><br><br>
    <input type="submit" value="Editar"/>
    <p><a href="index.php">Voltar</a></p>
</form> 
</body>
</html>