<?php
    include("conecta.php");
$email = $_GET['email'];
$senha = $_GET['senha'];
    $sql = "INSERT INTO usuario (senha, email) VALUES ('$email',$senha)";
    mysqli_query($conexao, $sql);
    
        header("location: listar.php");

?>