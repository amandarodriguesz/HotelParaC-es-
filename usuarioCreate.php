
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <?php include_once 'shared/menuSuperior.php'; 
  if (!isset($usuario)) {
    $usuario = array();
    $usuario['id'] = 0;
    $usuario['nome'] = "";
    $usuario['senha'] = "";
    $usuario['email'] = "";
    $usuario['id_tipo_usuario'] = "";
    $tpUser = obterTipoUsuario();
  }else{
      $tp = $usuario['id_tipo_usuario'];
    $tpUser1 = obterTipoUsuarioById($tp);
    $tpUser = obterTipoUsuario();
  }
 
 ?>
  <body>
      <div class="container">
        <h1>Formulário Usuário</h1>
        <form action="salvarUsuario.php" method="post">
          <div class="form-group">
            <label for="id">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $usuario['id']?>">
          </div>
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" value="<?php echo $usuario['nome'] ?>">
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="text" class="form-control" id="senha" placeholder="Senha" name="senha" value="<?php echo $usuario['senha'] ?>">
          </div>
          <div class="form-group">
            <label for="telefone">E-mail</label>
            <input type="text" class="form-control" id="telefone" placeholder="Telefone" name="email" value="<?php echo $usuario['email'] ?>">
          </div>
          <div class="form-group">
            <label for="id">Tipo de Usuário</label>
            <select name="id_tipo_usuario">
              <?php
                foreach ($tpUser as $t) {
                  $selecione = ($t["id"] == $usuario["id_tipo_usuario"]) ? "selected" : "";
                  echo "<option value='{$t['id']}' {$selecione}>{$t['descricao']}</option>";
                }
               ?>
            </select>
          </div>
          
          <button type="submit" class="btn btn-primary" name="submit">Salvar</button>
        </form>
      </div>
  </body>
</html>
