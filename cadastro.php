<?php
ini_set('display_errors' , 'On');
error_reporting( E_ALL | E_STRICT );

// incluir a funcionalidade do recaptcha
require_once("lib/recaptcha.php");
require_once("lib/conexao.php");

// definir a chave secreta
$secret = "6Lf7zLkUAAAAANW3nu8kYBkVg2lPHYEZNmZ3khSn";

// dados do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$contato = $_POST['contato'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$receber = ($_POST['receber'] == 'on') ? true : false;

// valida o formulario
if (empty($nome) || empty($email) || empty($cidade) || empty($uf)){
  echo '<script>alert("Preencha todos os campos obrigatórios!");history.go(-1)</script>'; exit;
}

// prepara a query
try {
  $sql = 'INSERT INTO cacs (id, nome, email, contato, cidade, uf, receber, data_cad) VALUES (NULL, :NOME, :EMAIL, :CONTATO, :CIDADE, :UF, :RECEBER, NOW()); ';
  $stmt = $conn->prepare($sql);

  // inseri os dados do banco
  $stmt->bindParam(":NOME", $nome);
  $stmt->bindParam(":EMAIL", $email);
  $stmt->bindParam(":CONTATO", $contato);
  $stmt->bindParam(":CIDADE", $cidade);
  $stmt->bindParam(":UF", $uf);
  $stmt->bindParam(":RECEBER", $receber);

  // retorna o feedback
  if ($stmt->execute()) {
    echo '<script>alert(" Cadastro enviado com sucesso! \n Obrigado pela sua colaboração. \n Aproveita e compartilhe a idéia nas redes sociais.");history.go(-1)</script>'; exit;
  }
} catch (PDOException $e) {
  $erro = $e->getMessage();

  // array om os retornos das exceptions em portugues
  $exceptions = [
    'Duplicate' => 'Você já se cadastrou anteriormente!',
  ];

  // percorre o array em busca da exception recebida para setar o retorno em portugues
  foreach ($exceptions as $erro_en => $erro_pt) {
    if (strpos($erro, $erro_en) !== false) {
      $erro = $erro_pt;
    }
  }
  echo '<script>alert("'.$erro.'");history.go(-1)</script>'; exit;
}
?>
