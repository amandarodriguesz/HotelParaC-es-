<?php
 
   function obterConexao() {
    $conexao = mysqli_connect("localhost", "root", "", "caoemequilibrio");
    mysqli_set_charset($conexao, 'utf8');
    return $conexao;
  }

   function obterUsuarioByLogin($login) {
    $conexao = obterConexao();
    $sql = "select * from usuario where nome = ?";
    $sentenca = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($sentenca, "s", $login);
    mysqli_stmt_execute($sentenca);
    $resultado = mysqli_stmt_get_result($sentenca);
    $usuario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    return $usuario;
  }
 /*tipo usuario */
 function obterTipoUsuario(){
   $conexao = obterConexao();
    $resultado = mysqli_query($conexao,
            "SELECT * FROM tipo_usuario");
    $tipoUsuario = array();
    if ($resultado) {
      $tipoUsuario = mysqli_fetch_all($resultado,
          MYSQLI_ASSOC);
    }
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    return $tipoUsuario;
  }
  function obterTipoUsuarioById($id){
    $conexao = obterConexao();
    $sql = "select * from tipo_usuario where id = ?";
    $sentenca = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($sentenca, "i", $id);
    mysqli_stmt_execute($sentenca);
    $resultado = mysqli_stmt_get_result($sentenca);
    $tipoUsuario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    return $tipoUsuario;
  }
  function salvarNovoTipoUsuario($tipoUsuario) {
    $conexao = obterConexao();
    $sql = "insert into tipo_usuario (descricao) values (?)";
    $sentenca = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($sentenca, "s", $tipoUsuario['descricao']);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }
  function alterarTipoUsuario($tipoUsuario) {
    $conexao = obterConexao();
    $sql = "update tipo_usuario set descricao=? where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($sentenca, "si", $tipoUsuario['descricao'],  $tipoUsuario['id']);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }
  function removerTipoUsuario($id) {
    $conexao = obterConexao();
    $sql = "delete from tipo_usuario where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($sentenca, "i", $id);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }
  /*TUTOR */
  function obterTutor(){
    $conexao = obterConexao();
     $resultado = mysqli_query($conexao,
             "SELECT * FROM tutor");
     $tutor = array();
     if ($resultado) {
       $tutor = mysqli_fetch_all($resultado,
           MYSQLI_ASSOC);
     }
     mysqli_free_result($resultado);
     mysqli_close($conexao);
     return $tutor;
   }
   function obterTutorById($id){
      $conexao = obterConexao();
      $sql = "select * from tutor where id = ?";
      $sentenca = mysqli_prepare($conexao, $sql);
      mysqli_stmt_bind_param($sentenca, "i", $id);
      mysqli_stmt_execute($sentenca);
      $resultado = mysqli_stmt_get_result($sentenca);
      $tutor = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
      mysqli_free_result($resultado);
      mysqli_close($conexao);
      return $tutor;
    }
   function salvarNovoTutor($tutor) {
    $conexao = obterConexao();
    $sql = "insert into tutor (cpf,nome,telefone,endereco,instagram,facebook,ativo) values (?,?,?,?,?,?,?)";
    $sentenca = mysqli_prepare($conexao, $sql); 
    $ativo="1";
    mysqli_stmt_bind_param($sentenca, "sssssss",$tutor['cpf'], $tutor['nome'], $tutor['telefone'], $tutor['endereco'],$tutor['instagram'], $tutor['facebook'],$ativo);
    mysqli_stmt_execute($sentenca); 
    mysqli_close($conexao);
  }
  function removerTutor($id) {
    $conexao = obterConexao();
    $sql = "update tutor set ativo=? where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);
    $ativo="0";
    mysqli_stmt_bind_param($sentenca, "si",$ativo, $id);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }
  function alterarTutor($tutor) {
    $conexao = obterConexao();
    $sql = "update tutor set cpf=?,nome=?,telefone=?,endereco=?,instagram=?,facebook=?,ativo=? where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);
    $ativo="1";
    mysqli_stmt_bind_param($sentenca,"sssssssi",$tutor['cpf'], $tutor['nome'], $tutor['telefone'], $tutor['endereco'],$tutor['instagram'], $tutor['facebook'],$ativo,$tutor['id']);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }
  /*Usuário */
  function obterUsuario(){
    $conexao = obterConexao();
     $resultado = mysqli_query($conexao,
             "SELECT usuario.*,tipo_usuario.descricao as tpUser FROM usuario JOIN tipo_usuario ON usuario.id_tipo_usuario = tipo_usuario.id");
     $usuario = array();
     if ($resultado) {
       $usuario = mysqli_fetch_all($resultado,
           MYSQLI_ASSOC);
     }
     mysqli_free_result($resultado);
     mysqli_close($conexao);
     return $usuario;
  }
  function salvarNovoUsuario($usuario) {
    $conexao = obterConexao();
    $sql = "insert into usuario (nome,senha,email,id_tipo_usuario,ativo) values (?,?,?,?,?)";
    $sentenca = mysqli_prepare($conexao, $sql); 
    $ativo="1";
    mysqli_stmt_bind_param($sentenca, "sssis", $usuario['nome'],$usuario['senha'], $usuario['email'], $usuario['id_tipo_usuario'],$ativo);
    mysqli_stmt_execute($sentenca); 
    mysqli_close($conexao);
  }
  function obterUsuarioById($id){
    $conexao = obterConexao();
    $sql = "select * from usuario where id = ?";
    $sentenca = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($sentenca, "i", $id);
    mysqli_stmt_execute($sentenca);
    $resultado = mysqli_stmt_get_result($sentenca);
    $usuario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    return $usuario;
  }
  function alterarUsuario($usuario) {
    $conexao = obterConexao();
    $sql = "update usuario set nome=?,senha=?,email=?,id_tipo_usuario=?,ativo=? where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);
    $ativo="1";
    mysqli_stmt_bind_param($sentenca, "sssisi", $usuario['nome'],$usuario['senha'], $usuario['email'], $usuario['id_tipo_usuario'],$ativo,$usuario['id']);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }
  function removerUsuario($id) {
    $conexao = obterConexao();
    $sql = "update usuario set ativo=? where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);
    $ativo="0";
    mysqli_stmt_bind_param($sentenca, "si",$ativo, $id);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }
  /*PET*/

  function salvarNovoPet($pet) {
    $conexao = obterConexao();
    $sql = "insert into pet (nome,raca,peso,foto,ativo) values (?,?,?,?,?)";
    $sentenca = mysqli_prepare($conexao, $sql); 
    $ativo="1";
    mysqli_stmt_bind_param($sentenca, "sssss",$pet['nome'], $pet['raca'], $pet['peso'], $pet['foto'],$ativo);
    mysqli_stmt_execute($sentenca); 
    mysqli_close($conexao);
  }
  function obterPet(){
    $conexao = obterConexao();
     $resultado = mysqli_query($conexao,
             "SELECT * FROM pet");
     $pet = array();
     if ($resultado) {
       $pet = mysqli_fetch_all($resultado,
           MYSQLI_ASSOC);
     }
     mysqli_free_result($resultado);
     mysqli_close($conexao);
     return $pet;
   }
   function obterPetById($id){
      $conexao = obterConexao();
      $sql = "select * from pet where id = ?";
      $sentenca = mysqli_prepare($conexao, $sql);
      mysqli_stmt_bind_param($sentenca, "i", $id);
      mysqli_stmt_execute($sentenca);
      $resultado = mysqli_stmt_get_result($sentenca);
      $pet = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
      mysqli_free_result($resultado);
      mysqli_close($conexao);
      return $pet;
    }
    function alterarPet($pet) {
      $conexao = obterConexao();
      $sql = "update pet set nome=?,raca=?,peso=?,foto=?,ativo=? where id=?";
      $sentenca = mysqli_prepare($conexao, $sql);
      $ativo="1";
      mysqli_stmt_bind_param($sentenca,"sssssi",$pet['nome'], $pet['raca'], $pet['peso'], $pet['foto'],$ativo,$pet['id']);
      mysqli_stmt_execute($sentenca);
      mysqli_close($conexao);
    }
    function removerPet($id) {
      $conexao = obterConexao();
      $sql = "update pet set ativo=? where id=?";
      $sentenca = mysqli_prepare($conexao, $sql);
      $ativo="0";
      mysqli_stmt_bind_param($sentenca, "si",$ativo, $id);
      mysqli_stmt_execute($sentenca);
      mysqli_close($conexao);
    }
/*HOSPEDAGEM*/
    function obterHospedagem(){
      $conexao = obterConexao();
      $resultado = mysqli_query($conexao,
      "SELECT hospedagem.*,pet.nome as nomePet FROM hospedagem JOIN pet ON hospedagem.id_pet = pet.id");
       $hospedagem = array();
       if ($resultado) {
         $hospedagem = mysqli_fetch_all($resultado,
             MYSQLI_ASSOC);
       }
       mysqli_free_result($resultado);
       mysqli_close($conexao);
       return $hospedagem;
     }
     function obterHospedagemById($id){
      $conexao = obterConexao();
      $sql = "select * from hospedagem where id = ?";
      $sentenca = mysqli_prepare($conexao, $sql);
      mysqli_stmt_bind_param($sentenca, "i", $id);
      mysqli_stmt_execute($sentenca);
      $resultado = mysqli_stmt_get_result($sentenca);
      $hospedagem = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
      mysqli_free_result($resultado);
      mysqli_close($conexao);
      return $hospedagem;
    }
     function removerHospedagem($id) {
      $conexao = obterConexao();
      $sql = "delete from hospedagem where id=?";
      $sentenca = mysqli_prepare($conexao, $sql);
      mysqli_stmt_bind_param($sentenca, "i", $id);
      mysqli_stmt_execute($sentenca);
      mysqli_close($conexao);
    }
    function salvarNovaHospedagem($hospedagem) {
      $conexao = obterConexao();
      $sql = "insert into hospedagem (entrada,saida,valor_diaria,observacoes,id_pet) values (?,?,?,?,?)";
      $sentenca = mysqli_prepare($conexao, $sql); 
      mysqli_stmt_bind_param($sentenca, "ssdsi", $hospedagem['entrada'],$hospedagem['saida'], $hospedagem['valor_diaria'], $hospedagem['observacoes'],$hospedagem['id_pet']);
      mysqli_stmt_execute($sentenca); 
      mysqli_close($conexao);
    }
    function alterarHospedagem($hospedagem) {
      $conexao = obterConexao();
      $sql = "insert into hospedagem (entrada,saida,valor_diaria,observacoes,id_pet) values (?,?,?,?,?)";
      $sentenca = mysqli_prepare($conexao, $sql); 
      mysqli_stmt_bind_param($sentenca, "ssdsi", $hospedagem['entrada'],$hospedagem['saida'], $hospedagem['valor_diaria'], $hospedagem['observacoes'],$hospedagem['id_pet']);
      mysqli_stmt_execute($sentenca); 
      mysqli_close($conexao);
    }
    /*Tutor Pet*/
    function salvarTutorPet($hospedagem) {
      $conexao = obterConexao();
      $sql = "insert into tutor_pet (id_tutor,id_pet) values (?,?)";
      $sentenca = mysqli_prepare($conexao, $sql); 
      mysqli_stmt_bind_param($sentenca, "ii", $hospedagem['id_tutor'],$hospedagem['id_pet']);
      mysqli_stmt_execute($sentenca); 
      mysqli_close($conexao);
    }
    function obterCreche(){
      $conexao = obterConexao();
      $resultado = mysqli_query($conexao,
      "SELECT creche.*,pet.nome as nomePet FROM creche JOIN pet ON creche.id_pet = pet.id");
       $creche = array();
       if ($resultado) {
         $creche = mysqli_fetch_all($resultado,
             MYSQLI_ASSOC);
       }
       mysqli_free_result($resultado);
       mysqli_close($conexao);
       return $creche;
     }
    /*
    function alterarUsuario($usuario) {
      $conexao = obterConexao();
      $sql = "update usuario set nome=?,senha=?,email=?,id_tipo_usuario=?,ativo=? where id=?";
      $sentenca = mysqli_prepare($conexao, $sql);
      $ativo="1";
      mysqli_stmt_bind_param($sentenca, "sssisi", $usuario['nome'],$usuario['senha'], $usuario['email'], $usuario['id_tipo_usuario'],$ativo,$usuario['id']);
      mysqli_stmt_execute($sentenca);
      mysqli_close($conexao);
    }
  
    function obterUsuario(){
    $conexao = obterConexao();
     $resultado = mysqli_query($conexao,
             "SELECT usuario.*,tipo_usuario.descricao as tpUser FROM usuario JOIN tipo_usuario ON usuario.id_tipo_usuario = tipo_usuario.id");
     $usuario = array();
     if ($resultado) {
       $usuario = mysqli_fetch_all($resultado,
           MYSQLI_ASSOC);
     }
     mysqli_free_result($resultado);
     mysqli_close($conexao);
     return $usuario;
  }
  function salvarNovoUsuario($usuario) {
    $conexao = obterConexao();
    $sql = "insert into usuario (nome,senha,email,id_tipo_usuario,ativo) values (?,?,?,?,?)";
    $sentenca = mysqli_prepare($conexao, $sql); 
    $ativo="1";
    mysqli_stmt_bind_param($sentenca, "sssis", $usuario['nome'],$usuario['senha'], $usuario['email'], $usuario['id_tipo_usuario'],$ativo);
    mysqli_stmt_execute($sentenca); 
    mysqli_close($conexao);
  }
  function obterUsuarioById($id){
    $conexao = obterConexao();
    $sql = "select * from usuario where id = ?";
    $sentenca = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($sentenca, "i", $id);
    mysqli_stmt_execute($sentenca);
    $resultado = mysqli_stmt_get_result($sentenca);
    $usuario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    return $usuario;
  }
  function alterarUsuario($usuario) {
    $conexao = obterConexao();
    $sql = "update usuario set nome=?,senha=?,email=?,id_tipo_usuario=?,ativo=? where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);
    $ativo="1";
    mysqli_stmt_bind_param($sentenca, "sssisi", $usuario['nome'],$usuario['senha'], $usuario['email'], $usuario['id_tipo_usuario'],$ativo,$usuario['id']);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }
  function removerUsuario($id) {
    $conexao = obterConexao();
    $sql = "update usuario set ativo=? where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);
    $ativo="0";
    mysqli_stmt_bind_param($sentenca, "si",$ativo, $id);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }

*/



/*
function obterQuestoes() {
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao,
            "SELECT * FROM questao");
    $questoes = array();
    if ($resultado) {
      $questoes = mysqli_fetch_all($resultado,
          MYSQLI_ASSOC);
    }
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    return $questoes;
  }
function checkResponsavel() {
     if ( session_status() !== PHP_SESSION_ACTIVE ) {
         session_start();
     }
     if (!isset($_SESSION['login'])) {
       return false;
     }
     $login = $_SESSION['login'];
     $usuario = obterUsuarioByLogin($login);
     return $usuario["id_tipo"] == 2;
   }
  
 

  function obterQuestao($jogador_id) {
    $conexao = obterConexao();
    $sql = "SELECT * FROM questao WHERE id NOT IN
      (SELECT questao_id FROM resposta WHERE jogador_id = ?)
      ORDER BY rand() LIMIT 1";
    $sentenca = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($sentenca, "i", $jogador_id);
    mysqli_stmt_execute($sentenca);
    $resultado = mysqli_stmt_get_result($sentenca);
    $questao = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    return $questao;
}

  function obterQuestaoById($id) {
    $conexao = obterConexao();
    $sql = "select * from questao where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($sentenca, "i", $id);
    mysqli_stmt_execute($sentenca);
    $resultado = mysqli_stmt_get_result($sentenca);
    $questao = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    return $questao;
  }

  function salvarNovaQuestao($questao) {
    $conexao = obterConexao();
    $sql = "insert into questao (pergunta, opcao_a, opcao_b, opcao_c, resposta) values (?, ?, ?, ?, ?)";
    $sentenca = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($sentenca, "sssss", $questao['pergunta'], $questao['opcao_a'], $questao['opcao_b'], $questao['opcao_c'], $questao['resposta']);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }

  function removerQuestao($id) {
    $conexao = obterConexao();
    $sql = "delete from questao where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($sentenca, "i", $id);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }

  function alterarQuestao($questao) {
    $conexao = obterConexao();
    $sql = "update questao set pergunta=?, opcao_a=?, opcao_b=?, opcao_c=?, resposta=? where id=?";
    $sentenca = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($sentenca, "sssssi", $questao['pergunta'], $questao['opcao_a'], $questao['opcao_b'], $questao['opcao_c'], $questao['resposta'], $questao['id']);
    mysqli_stmt_execute($sentenca);
    mysqli_close($conexao);
  }
  */

  
 

   function obterQuantidadeRespostas($jogador_id) {
     $conexao = obterConexao();
     $sql = "select count(id) as cont from resposta where jogador_id = ?";
     $sentenca = mysqli_prepare($conexao, $sql);
     mysqli_stmt_bind_param($sentenca, "i", $jogador_id);
     mysqli_stmt_execute($sentenca);
     $resultado = mysqli_stmt_get_result($sentenca);
     $linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
     mysqli_free_result($resultado);
     mysqli_close($conexao);
     return $linha["cont"];
   }

   function salvarAluno($aluno_novo) {
     $conexao = obterConexao();
     $sql = "insert into jogador (nome,email,senha,foto) values (?,?,?,?)";
     $sentenca = mysqli_prepare($conexao, $sql);
     mysqli_stmt_bind_param($sentenca, "ssss", $aluno_novo["nome"], $aluno_novo["email"], $aluno_novo["senha"],$jogador_novo["foto"]);
     mysqli_stmt_execute($sentenca);
     mysqli_close($conexao);
   }
?>