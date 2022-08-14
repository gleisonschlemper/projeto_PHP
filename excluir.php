<?php

require 'banco_de_dados/bancoDeDados.php';

$id = filter_input(INPUT_GET, 'id');
print_r($id);
if($id){
    $sql = $pdo->prepare("DELETE FROM cadastro WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("location: tabelaDeDados.php");
    exit;
}
else{
    header("location: tabelaDeDados.php");
    exit;
}

