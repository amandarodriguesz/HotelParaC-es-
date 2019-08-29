<!DOCTYPE html>
<html>
<head>
  <title>Tutor</title>
   <?php include_once 'shared/menuSuperior.php'; 
   $tutores= obterTutor();
   ?>
</head>
<body>
<div class="container">
      <h1>Tutores</h1>
      <a class="btn btn-primary" href="tutorCreate.php">Cadastrar Novo Tutor</a>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">CPF</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Instagram</th>
            <th scope="col">Facebook</th>
            <th scope="col">Opções</th>
           </tr>
        </thead>
        <tbody>
          
          <?php
              foreach ($tutores as $t) {
                  if($t['ativo']==true){
                echo "<tr>";
                echo "<td scope='col'>".$t['id']."</td>";
                echo "<td scope='col'>".$t['cpf']."</td>";
                echo "<td scope='col'>".$t['nome']."</td>";
                echo "<td scope='col'>".$t['endereco']."</td>";
                echo "<td scope='col'>".$t['instagram']."</td>";
                echo "<td scope='col'>".$t['facebook']."</td>";
                
                echo "<td scope='col'><a href='deletarTutor.php?id=".$t['id']."'>Excluir</a> <a href='tutorEdit.php?id=".$t['id']."'>Editar</a> <a href='tutorPetCreate.php?id=".$t['id']."'>Relacionar Pet</a></td>";
                echo "</tr>";
              }
            }
              
           ?>
        </tbody>
      </table>
    </div>
</body>
</html>