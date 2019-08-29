<?php
  if (!isset($tutor)) {
    $tutor = array();
    $tutor['id'] = 0;
    $tutor['cpf'] = "";
    $tutor['nome'] = "";
    $tutor['telefone'] = "";
    $tutor['endereco'] = "";
    $tutor['instagram'] = "";
    $tutor['facebook'] = "";
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
 <?php include_once 'shared/menuSuperior.php'; ?>
  <body>
      <div class="container">
        <h1>Formulário Tutor</h1>
        <form action="salvarTutor.php" method="post">
          <div class="form-group">
            <label for="id">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $tutor['id']?>">
          </div>
          <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" value="<?php echo $tutor['cpf'] ?>">
          </div>
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" value="<?php echo $tutor['nome'] ?>">
          </div>
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" placeholder="Telefone" name="telefone" value="<?php echo $tutor['telefone'] ?>">
          </div>
          <div class="form-group">
            <label for="descricao">Endereço</label>
            <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco" value="<?php echo $tutor['endereco'] ?>">
          </div>
          <div class="form-group">
            <label for="descricao">Instagram</label>
            <input type="text" class="form-control" id="instagram" placeholder="Instagram" name="instagram" value="<?php echo $tutor['instagram'] ?>">
          </div>
          <div class="form-group">
            <label for="descricao">Facebook</label>
            <input type="text" class="form-control" id="facebook" placeholder="Facebook" name="facebook" value="<?php echo $tutor['facebook'] ?>">
          </div>
          
          <button type="submit" class="btn btn-primary" name="submit">Salvar</button>
        </form>
      </div>
  </body>
</html>
