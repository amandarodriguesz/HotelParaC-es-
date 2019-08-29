<?php
  include_once "funcao.php";
  $id = $_GET['id'];
  removerHospedagem($id);
  header("location: hospedagemIndex.php");
  exit();
 ?>
