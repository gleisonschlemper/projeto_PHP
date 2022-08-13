<?php

require 'bancoDeDados.php';

$name = filter_input(INPUT_POST, 'nome');

$email = filter_input(INPUT_POST, 'email');

$senha = filter_input(INPUT_POST, 'senha');

if($name && $email && $senha){
    $sql = $pdo->prepare("INSERT INTO cadastro (nome, email,senha) VALUE(:nome, :email, :senha)");
    $sql->bindValue(':nome',$name);
    $sql->bindValue(':email',$email);
    $sql->bindValue(':senha',$senha);
    $sql->execute();

    header("localhost: cadastro.");


}
