<!DOCTYPE html>
<html>
<head>
  <title>Tutor</title>
   <?php include_once 'shared/menuSuperior.php'; 
   $tutores= obterCreche();
   ?>
</head>
<body>
<div class="container">
      <h1>Creche</h1>
      <a class="btn btn-primary" href="crecheCreate.php">Cadastrar</a>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">data</th>
            <th scope="col">Observações</th>
            <th scope="col">Pet</th>
            <th scope="col">Opções</th>
           </tr>
        </thead>
        <tbody>
          
          <?php
              foreach ($tutores as $t) {
                 
                echo "<tr>";
                echo "<td scope='col'>".$t['id']."</td>";
                echo "<td scope='col'>".$t['data']."</td>";
                echo "<td scope='col'>".$t['observacoes']."</td>";
                echo "<td scope='col'>".$t['nomePet']."</td>";
       
                echo "<td scope='col'><a href='deletarTutor.php?id=".$t['id']."'>Excluir</a> <a href='tutorEdit.php?id=".$t['id']."'>Editar</a></td>";
                echo "</tr>";
              
            }
              
           ?>
        </tbody>
      </table>
    </div>
</body>
</html>