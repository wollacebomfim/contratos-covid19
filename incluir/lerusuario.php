<?php
$id = $_SESSION['id_usuario'];
  $sql = "SELECT * FROM usuario WHERE id = '$id'";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_array($resultado);
  mysqli_close($conexao);
  ?>