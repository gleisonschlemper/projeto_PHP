<?php

require 'banco_de_dados/bancoDeDados.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM cadastro");
//query seleciona as colunas da tabela

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    //fechALL mostrar os resultados do banco de dados
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            max-width: 100vw;
            text-decoration: none;
            list-style-type: none;
            outline: none;
        }
        
        header{
            height: 70px;
            width: 100%;
            display: flex;
            align-items: center;
        }

        header .cadastro{
            width: 100px;
            height: 60px;
            background-color: red;
        }

    </style>
    <title>Tabela de cadastro</title>
</head>
<body>
    <header>
        <a href="../projeto_PHP/cadastro.php" class="cadastro">
            fazer cadastro
        </a>
    </header>
   <table  border="1" width="100%">
        <tr>
            <th>id</th>
            <th>nomes</th>
            <th>email</th>
            <th>senha</th>
        </tr>
        <?php foreach($lista as $cadastros): ?>
            <tr>
                <th><?php echo $cadastros['id'] ?></th>
                <th><?php echo $cadastros['nomes'] ?></th>
                <th><?php echo $cadastros['email'] ?></th>
                <th>
                    <a href="editar.php?id=<?=$cadastros['id']?>" >[ Editar ]</a>
                    <a href="excluir.php?id=<?=$cadastros['id']?>" onclick="return confirm('Deseja excluir mesmo?')">[ Excluir ]</a>
                </th>

            </tr>
        <?php endforeach; ?>
        
   </table> 
</body>
</html>