<!DOCTYPE html>
<html>
<head>
  <title>Tipo de Usuários</title>
   <?php include_once 'shared/menuSuperior.php'; 
   $tipoUsuario= obterTipoUsuario();
   ?>
</head>
<body>
<div class="container">
      <h1>Tipos Usuários</h1>
      <a class="btn btn-primary" href="tipoUsuarioCreate.php">Cadastrar Novo Tipo</a>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Descrição</th>
            <th scope="col">Opções</th>
           </tr>
        </thead>
        <tbody>
          
          <?php
              foreach ($tipoUsuario as $tpU) {
                echo "<tr>";
                echo "<td scope='col'>".$tpU['id']."</td>";
                echo "<td scope='col'>".$tpU['descricao']."</td>";
                
                echo "<td scope='col'><a href='deletarTipoUsuario.php?id=".$tpU['id']."'>Excluir</a> <a href='tipoUsuarioEdit.php?id=".$tpU['id']."'>Editar</a></td>";
                echo "</tr>";
              }
              
           ?>
        </tbody>
      </table>
    </div>
</body>
</html>