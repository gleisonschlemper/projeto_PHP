<?php
require 'banco_de_dados/bancoDeDados.php';

$nome = filter_input(INPUT_GET, 'nome');
$email = filter_input(INPUT_GET, 'email');
$senha = filter_input(INPUT_GET, 'senha');
$id = filter_input(INPUT_GET, 'id');

if($nome && $email && $senha ){
    $sql = $pdo->prepare("UPDATE cadastro SET nomes = :nome ,email = :email ,senha = :senha  WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("location: index.html");
    exit;
}
else{
    echo '<script>alert("Informe sua senha nova") </script>';
    include('editar.php');  
}


