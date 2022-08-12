<?php
$pdo = new PDO("mysql:dbname=banco_de_dados;host=localhost", "root", "");

$sql = $pdo ->query('SELECT * FROM cadastro');

//echo "TOTAL: ".$sql->rowCount();

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

//echo '<pre>';

//print_r($dados);