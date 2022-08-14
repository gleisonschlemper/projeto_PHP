<?php 

require 'banco_de_dados/bancoDeDados.php';

$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM cadastro WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount()>0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);

    }
    else{
        header("location: editar.php");
        exit;
    }
}
else{
    header("location: editar.php");
    exit;
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../projeto_PHP/styles/bootstrap.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            max-width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: column;
        }
        form{
            width: 50%;
            height: 60%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: column;
        }


    
    </style>
    <title>EDITAR CADASTRO</title>
</head>
<body>
    <h1>Editar cadastro</h1>
    <form action="../projeto_PHP/editarSection.php" method="get">
        <input type="hidden" name="id" value="<?=$info['id']?>">

        <label for="">
            Nome:
            <input type="text" name="nome" value="<?=$info['nomes'];  ?>">
        </label>

        <label for="">
            Email:
            <input type="email" name="email" value="<?=$info['email'];  ?>">
        </label>

        <label for="">
            Senha:
            <input type="password" name="senha" placeholder="Senha de 6 digitos" maxlength="6">
        </label>

        <input type="submit" value="Alterar" class="btn btn-danger">
    </form>
</body>
</html>
