<?php
include("conecta.php");
$id_usuario = $_GET['id_usuario'];
$sql = "DELETE FROM usuario WHERE id_usuario = $id_usuario";
    mysqli_query($conexao,$sql);
    header("location: listar.php");
?>