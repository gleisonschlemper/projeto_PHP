<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../projeto_PHP/styles/cadastro.css">
    <title>Cadastro</title>
</head>
<body>   
    <header>
        <a href="" class="link">
            <img src="../projeto_PHP/photos/logo-perfect.png" alt="" srcset="">
        </a>

         <ol>
            <li class="li_login" >
                <p onclick="chamarLogin()">login</p> 
                <span class="material-symbols-outlined flecha_baixo">expand_more</span>
 
                <form class="ol_login" action="../projeto_PHP/login.php" method="post" >
                    <b>Fazer login</b>
                    <label for="email">
                        Informe seu email
                        <input type="email" name="email" id="email" maxlength="100" required autocomplete="email" autofocus list="emailCadastrado">

                        <datalist id="emailCadastrado">
                            <option>maria@gmail.com</option>

                        </datalist>
                    </label>

                    <label for="senha">
                        Informe sua senha
                        <input type="password" name="senha" id="senha" maxlength="100" autocomplete="new-password"> 
                    </label>

                    <input type="submit" value="enviar">
                </form>
            </li>
            <a href=""><li>Home</li></a>
            <a href=""><li>Saiba mais</li></a>
            <a href=""><li>Fale conosco</li> </a>         
            
        </ol>

        <div class="material-symbols-outlined menu" onclick="asideControle()">
            menu
        </div>
    </header>
    <aside>     
    </aside>
    <main>
        <section id="conteinerSliders">
            <div class="sliders">
                <input type="radio" id="slider1" name="slider"> 
                <input type="radio" id="slider2" name="slider"> 
                <input type="radio" id="slider3" name="slider"> 

                <div class="slider" id="card1"></div>
                <div class="slider" id="card2"></div>
                <div class="slider" id="card3"></div>
            </div>

            <div class="pointer">
                <span class="material-symbols-outlined click">
                    arrow_back
                </span>

                <span class="material-symbols-outlined click">
                    arrow_forward
                </span>
            </div>


        </section>

        <form action="../projeto_PHP/adicionar.php" method="post" id="formularioCadastro">
            <h1>CADASTRO</h1>
            <div class="inputBox">
                <input type="text" name="nome" id="nomeCadastro" class="inputCadastro" placeholder="DIGITE SEU NOME">
            </div>

            <div class="inputBox" >
                <input type="email" name="email" id="emailCadastro" class="inputCadastro" placeholder="DIGITE SEU EMAIL">       
            </div>
                    
            <div class="inputBox" >
                <input type="password" name="senha" id="senhaCadastro" class="inputCadastro" placeholder="DIGITE SUA SENHA">
            </div>

            <input type="submit" name="enviar" value="enviar" onclick="enviar()">
        </form>
    </main>
    
   <footer>
    <a href="https://github.com/gleisonschlemper"><img src="../projeto_PHP/photos/github.png" alt="" class="photo"></a>
    <a href=""><img src="../projeto_PHP/photos/facebook.png" alt="" class="photo"></a>
    <a href=""><img src="../projeto_PHP/photos/logotipo-do-linkedin.png" alt="" class="photo"></a>
   </footer>

   <script src="../projeto_PHP/scripts/cadastro.js"></script>

</body>
</html>