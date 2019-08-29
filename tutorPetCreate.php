
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <?php include_once 'shared/menuSuperior.php'; 
 $id = $_GET['id'];
  if (!isset($usuario)) {
    $usuario = array();
    $usuario['id'] = 0;
    $usuario['tutor'] = "";
    $usuario['pet'] = "";
    $tpUser = obterTutor();
    $tp1=obterPet();
  }
 ?>
  <body>
      <div class="container">
        <h1>Formulário Tutor Pet</h1>
        <form action="salvarTutorPet.php" method="post">
          <div class="form-group">
            <label for="id">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $usuario['id']?>">
          </div>
          <div class="form-group">
            <label for="id">Pet</label>
            <select name="id_pet">
              <?php
                foreach ($tp1 as $t) {
                 /* $selecione = ($tp1["id"] == $usuario["id_pet"]) ? "disabled" : "";*/
                  echo "<option value='{$t['id']}' {$selecione}>{$t['nome']}</option>";
                }
               ?>
            </select>
          </div>
          <div class="form-group">
            <label for="id">Tutor</label>
            <select name="id_tutor">
              <?php
                foreach ($tpUser as $t) {
                 $selecione = ($t["id"] == $id) ? "selected" : "";
                  echo "<option value='{$id}' {$selecione} readonly>{$t['nome']}</option>";
                }
               ?>
            </select>
          </div>
          
          <button type="submit" class="btn btn-primary" name="submit">Salvar</button>
        </form>
      </div>
  </body>
</html>
