
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <?php include_once 'shared/menuSuperior.php'; 
  if (!isset($pet)) {
    $pet = array();
    $pet['id'] = 0;
    $pet['nome'] = "";
    $pet['raca'] = "";
    $pet['peso'] = "";
    $pet['foto'] = "img/thumb.png";
  }
 
 ?>
  <body>
      <div class="container">
        <h1>Formulário Cão</h1>
        <form action="salvarPet.php" method="post" enctype="multipart/form-data">
          
          <div class="form-group ">
          <img src="<?php echo $pet['foto'] ?>" class="rounded mx-auto d-block"  alt="...">
          </div>
          <div class="form-group">
            <label for="id">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $pet['id']?>">
          </div>
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" value="<?php echo $pet['nome'] ?>">
          </div>
          <div class="form-group">
            <label for="senha">Raça</label>
            <input type="text" class="form-control" id="raca" placeholder="Raça" name="raca" value="<?php echo $pet['raca'] ?>">
          </div>
          <div class="form-group">
            <label for="telefone">Peso</label>
            <input type="text" class="form-control" id="telefone" placeholder="Peso" name="peso" value="<?php echo $pet['peso'] ?>">
          </div>
          <div class="form-group">
            <label for="foto" >Selecione uma foto:</label>
               <input name="foto" type="file" />
        </div>
           
          
          
          <button type="submit" class="btn btn-primary" name="submit">Salvar</button>
        </form>
      </div>
  </body>
</html>
