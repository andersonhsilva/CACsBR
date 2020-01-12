<?php
// conexao com o sql server
$conn = new PDO("mysql:dbname=cacsbras_contato;host=localhost", "cacsbras_user", "@senha100%");

// muito importante para o banco de dados não bugar os retornos json
$conn->exec("set names utf8");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

?>
