<?php
  include_once "funcao.php";

  $id = $_GET['id'];
  $tutor = obterTutorById($id);
  include_once "tutorCreate.php";
 ?>
