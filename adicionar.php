<?php

require 'banco_de_dados/bancoDeDados.php';

//isset($_POST['enviar'])
    $name = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'senha');

if($name && $email && $senha){
    $sql = $pdo->prepare("SELECT * FROM cadastro WHERE  email = :email");
    print_r($sql);
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
            echo '<script>alert("email já existente") </script>';
            include('cadastro.php');     
    }
}
else{
    echo '<script>alert("Informe todos os dados corretamente") </script>';
    include('cadastro.php'); 
}

