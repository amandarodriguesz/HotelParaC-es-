<!DOCTYPE html>
<html>
<head>
  <title>Listagem de Cães</title>
   <?php include_once 'shared/menuSuperior.php';
   $hp = array();
   $hp=obterHospedagem();
   ?>
</head>
<body>
<div class="container">
      <h1>Hospedagens</h1>
      <a class="btn btn-primary" href="hospedagemCreate.php">Cadastrar</a>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Entrada</th>
            <th scope="col">Saída</th>
            <th scope="col">Valor diária</th>
            <th scope="col">Observações</th>
            <th scope="col">Pet</th>
            <th scope="col">Opções</th>  
          </tr>
        </thead>
        <tbody>
         
          <?php
             foreach ($hp as $p) {
              
                echo "<tr>";
                echo "<td scope='col'>".$p['id']."</td>";
                echo "<td scope='col'>".$p['entrada']."</td>";
                echo "<td scope='col'>".$p['saida']."</td>";
                echo "<td scope='col'>".$p['valor_diaria']."</td>";
                echo "<td scope='col'>".$p['observacoes']."</td>";
                echo "<td scope='col'>".$p['nomePet']."</td>";
                echo "<td scope='col'><a href='deletarHospedagem.php?id=".$p['id']."'>Excluir</a> <a href='editarHospedagem.php?id=".$p['id']."'>Editar</a></td>";
                echo "</tr>";
               
              }
           ?>
        </tbody>
      </table>
    </div>
</body>
</html>