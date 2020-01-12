<?php

$secret_key = '6Lc90rkUAAAAABfzoEBJzZZV92ZcX6WdC_M83sn';

if (isset($_POST['g-recaptcha-response'])) {
  $captcha_data = $_POST['g-recaptcha-response'];
}

// Se nenhum valor foi recebido, o usuário não realizou o captcha
if (!$captcha_data) {
  echo '<script>alert("Prove que você não é um robô, clicando no reCAPCHA!");history.go(-1)</script>'; exit;
}
?>
