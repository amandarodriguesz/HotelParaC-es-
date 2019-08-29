<?php


  if (!isset($tipoUsuario)) {
    $tipoUsuario = array();
    $tipoUsuario['id'] = 0;
    $tipoUsuario['descricao'] = "";
  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
 <?php include_once 'shared/menuSuperior.php'; ?>
  <body>
      <div class="container">
        <h1>Formulário Tipo de Usuário</h1>
        <form action="salvarTipoUsuario.php" method="post">
          <div class="form-group">
            <label for="id">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $tipoUsuario['id'] ?>">
          </div>
          <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao" value="<?php echo $tipoUsuario['descricao'] ?>">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Salvar</button>
        </form>
      </div>
  </body>
</html>
