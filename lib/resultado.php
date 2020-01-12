<?php
// ini_set('display_errors' , 'On');
// error_reporting( E_ALL | E_STRICT );

require_once("conexao.php");

// prepara a query
$stmt = $conn->prepare("SELECT cidade, uf, count(cidade) as qtd FROM cacs group by cidade order by cidade asc; ");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<h1>Resultado:</h1>';
foreach ($result as $value) {
  echo '<b>'.$value['qtd'].'</b> - '.$value['cidade'].'/'.strtoupper($value['uf']).'<br/>';
}

$stmt1 = $conn->prepare("SELECT nome, cidade, uf, DATE_FORMAT(data_cad, '%d/%m/%Y às %H:%i:%s') as data_hora_cad  FROM cacs order by id desc limit 1; ");
$stmt1->execute();
$result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
foreach ($result1 as $value) {
  echo '<h4 style="color:green">Último inscrito: '.$value['nome'].' - '.$value['cidade'].'/'.strtoupper($value['uf']).' em '.$value['data_hora_cad'].'<h4/>';
}

$stmt2 = $conn->prepare("SELECT count(id) as qtd_cacs_total FROM cacs; ");
$stmt2->execute();
$result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$total_inscritos = $result2[0]['qtd_cacs_total'];
echo '<h2>Total inscritos: '.$total_inscritos.' CACs, desde 23/09/2019 até '.date('d/m/Y').'!</h2>';
