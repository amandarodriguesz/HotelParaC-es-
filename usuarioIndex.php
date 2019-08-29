<!DOCTYPE html>
<html>
<head>
  <title>Listagem de Usuários</title>
   <?php include_once 'shared/menuSuperior.php';
   $usuarios=obterUsuario(); ?>
</head>
<body>
<div class="container">
      <h1>Usuários</h1>
      <a class="btn btn-primary" href="usuarioCreate.php">Cadastrar</a>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Tipo Usuário</th>  
            <th scope="col">Opções</th>  
          </tr>
        </thead>
        <tbody>
          
          <?php
             foreach ($usuarios as $u) {
               if($u['ativo']=="1"){
                echo "<tr>";
                echo "<td scope='col'>".$u['id']."</td>";
                echo "<td scope='col'>".$u['nome']."</td>";
                echo "<td scope='col'>".$u['email']."</td>";
                echo "<td scope='col'>".$u['tpUser']."</td>";
                echo "<td scope='col'><a href='deletarUsuario.php?id=".$u['id']."'>Excluir</a> <a href='editarUsuario.php?id=".$u['id']."'>Editar</a></td>";
                echo "</tr>";
               }
              }
           ?>
        </tbody>
      </table>
    </div>
</body>
</html>