<?php

include("conecta.php");

$sql = "SELECT * FROM usuario";

$resultado = mysqli_query($conexao,$sql);

echo '<table border=1>
<tr>
<th>Id usuario</th>
<th>senha</th>
<th>email</th>
<th colspan=3>Opções</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
echo '<tr>';    
echo '<td>'.$dados['id_usuario'].'</td>';
echo '<td>'.$dados['email'].'</td>';
echo '<td>'.$dados['senha'] .'</td>';
echo '<td> <a href="formedit.php?id_usuario='.$dados['id_usuario'].'"> <img src="imagens/editar.png" width="20" height="20"> </a> </td>';
echo '<td> <a href="excluir?id_usuario='.$dados['id_usuario'].'"> <img src="imagens/excluir.png" width="20" height="20"> </a> </td>';
echo '</tr>';
}
echo '</table>'.'<br>';
echo '<button><a href="index.php">Voltar</a></button>';
?>