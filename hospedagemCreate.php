
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <?php include_once 'shared/menuSuperior.php'; 
  if (!isset($hospedagem)) {
    $hospedagem = array();
    $hospedagem['id'] = 0;
    $hospedagem['entrada'] = "";
    $hospedagem['saida'] = "";
    $hospedagem['valor_diaria'] = "";
    $hospedagem['observacoes'] = "";
    $hospedagem['id_pet'] = "";
    $tpUser = obterHospedagem();
    $tp1=obterPet();
  }else{
    $tpUser = obterHospedagem();
    $tp1=obterPet();
  }

 ?>
  <body>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: "yy-mm-dd"
    });
    
    $( "#datepicker1" ).datepicker();
  } );
  </script>
      <div class="container">
        <h1>Formulário Hospedagem</h1>
        <form action="salvarHospedagem.php" method="post">
          <div class="form-group">
            <label for="id">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $hospedagem['id']?>">
          </div>

          
          <div class="form-group">
            <label for="nome">Entrada</label>
            <input type="text" class="form-control" id="datepicker" placeholder="Entrada" name="entrada" value="<?php echo $hospedagem['entrada'] ?>">
          </div>
          <div class="form-group">
            <label for="senha">Saída</label>
            <input type="text" class="form-control" id="datepicker1" placeholder="Saída" name="saida" value="<?php echo $hospedagem['saida'] ?>">
          </div>
          <div class="form-group">
            <label for="telefone">Valor Diária</label>
            <input type="text" class="form-control" id="telefone" placeholder="Valor diária" name="valor_diaria" value="<?php echo $hospedagem['valor_diaria'] ?>">
          </div>
          <div class="form-group">
            <label for="telefone">Observações</label>
            <input type="text" class="form-control" id="telefone" placeholder="Observações" name="observacoes" value="<?php echo $hospedagem['observacoes'] ?>">
          </div>
          <div class="form-group">
            <label for="id">Pet</label>
            <select name="id_pet">
              <?php
                foreach ($tp1 as $t) {
                  $selecione = ($t["id"] == $hospedagem["id_pet"]) ? "selected" : "";
                  if($t['ativo']=="1")
                  echo "<option value='{$t['id']}'{$selecione} >{$t['nome']}</option>";
                }
               ?>
            </select>
          </div>
          
          <button type="submit" class="btn btn-primary" name="submit">Salvar</button>
        </form>
      </div>
  </body>
</html>
