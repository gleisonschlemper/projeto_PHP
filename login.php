<?php 
require 'banco_de_dados/bancoDeDados.php';

$email = $_POST["email"];
$senha = $_POST["senha"];

if($email && $senha){
    $sqlNome = $pdo->prepare("SELECT * FROM cadastro WHERE  email = :email");
    $sqlNome->bindValue(':email', $email);
    $sqlNome->execute();

    $sqlSenha = $pdo->prepare("SELECT * FROM cadastro WHERE  senha = :senha");
    $sqlSenha->bindValue(':senha', $senha);
    $sqlSenha->execute();

    if($sqlNome->rowCount() > 0 && $sqlSenha->rowCount() > 0){
        header("location: index.html");
        exit;
    }
    else{
        echo '<script>alert("Email ou senha inválido") </script>';
        include('cadastro.php');  
    }
}
else{
    echo '<script>alert("Informe todos os dados primeiro") </script>';
        include('cadastro.php');  
}




/*print_r($nome);
$sql = $pdo->query('SELECT * FROM cadastro' );
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
header("location: index.html");

*/
