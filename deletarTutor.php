<?php
  include_once "funcao.php";
  $id = $_GET['id'];
  removerTutor($id);
  header("location: tutorIndex.php");
  exit();
 ?>
