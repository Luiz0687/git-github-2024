<?php
include("conecta.php");
$id_usuario = $_GET['id_usuario'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$sql = "UPDATE usuario SET 
email = '$email', senha = '$senha' WHERE id_usuario = $id_usuario";
    mysqli_query($conexao,$sql);
?>