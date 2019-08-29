<?php
  include_once "funcao.php";

  $id = $_GET['id'];
  $hospedagem = obterHospedagemById($id);
  include_once "hospedagemCreate.php";
 ?>
