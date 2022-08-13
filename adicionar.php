<?php

require 'banco_de_dados/bancoDeDados.php';

if(isset($_POST['enviar'])){
    $name = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'senha');

    $sql = $pdo->prepare("SELECT * FROM cadastro WHERE  email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0){
            $sql = $pdo->prepare("INSERT INTO cadastro (nomes, email,senha) VALUE(:nome, :email, :senha)");
            $sql->bindValue(':nome',$name);
            $sql->bindValue(':email',$email);
            $sql->bindValue(':senha',$senha);
            $sql->execute();

            header("location: index.html");
            exit;
        }
        else{
            header("location: cadastro.php");
        exit;
    }
}
else{
    header("location: cadastro.php");
    exit;
}

