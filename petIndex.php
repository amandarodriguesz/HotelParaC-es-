<!DOCTYPE html>
<html>
<head>
  <title>Listagem de Cães</title>
   <?php include_once 'shared/menuSuperior.php';
   $pet = array();
   $pet=obterPet();
   ?>
</head>
<body>
<div class="container">
      <h1>Cães Cadastrados</h1>
      <a class="btn btn-primary" href="petCreate.php">Cadastrar Novo Cão</a>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Raça</th>
            <th scope="col">Peso</th>
            <th scope="col">Opções</th>  
          </tr>
        </thead>
        <tbody>
         
          <?php
             foreach ($pet as $p) {
               if($p['ativo']=="1"){
                echo "<tr>";
                echo "<td scope='col'>".$p['id']."</td>";
                echo "<td scope='col'> <img  src='".$p['foto']."'  style='height: 50px;'  alt='...'></td>";
                echo "<td scope='col'>".$p['nome']."</td>";
                echo "<td scope='col'>".$p['raca']."</td>";
                echo "<td scope='col'>".$p['peso']."</td>";
                echo "<td scope='col'><a href='deletarPet.php?id=".$p['id']."'>Excluir</a> <a href='editarPet.php?id=".$p['id']."'>Editar</a></td>";
                echo "</tr>";
               }
              }
           ?>
        </tbody>
      </table>
    </div>
</body>
</html>