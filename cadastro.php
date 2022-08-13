<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

        *{
            margin: 0;
            padding: 0;
            list-style-type: none;
            outline: none;
            text-decoration: none;
        }
        
        :root {
            
        }

        body{
            max-width: 100vw;
            position: relative;
            overflow-x: hidden;
            background: #eee;
        }

        aside{
            position: absolute;
            width: 20vw;
            top: 0;
            z-index: 99;
            height: 100vh;
            background: black;
            transition: 2s;
        }

        /*
        
        
        */

        header{
            width: 100%;
            height:100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            
        }
        
        .link{
            width:30%;
            height: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .link img{
            width: 180px;
            height:170px;
        }

        ol{
            width: 45%;
            height: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            font-family: 'Roboto';
        }

        ol li{ 
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 6px;
        }

        ol li .flecha_baixo{
            font-size:40px;
        }

        .menu{
            font-size: 60px;
            z-index: 999;
            cursor: pointer;
            transition: 2s;
            position: relative;
            right: 50px;
        }


        .li_login{
            height: 100%;
            
        }

        .ol_login{
            width: 17%;
            height: 250px;
            display:none;
            position: absolute;
            top: 100px;
            left: 0;
            border-radius: 15px;
        }

        .li_login:hover .ol_login{
            display: flex;
            justify-content: space-around;
            flex-direction: column;
            align-items: center;
            left: 40vw;
            background: #eee;
            border: 3px solid black;
            z-index: 9999;
        }
        .ol_login label{
            width: 70%;
            text-align: center;
           
        }
        /*
        
        */

        main{
            width: 100%;
            height: calc(100vh - 100px - 15vh );
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;

        }


        main #conteinerSliders{
            width: 40%;
            height: 80%;
            overflow: hidden;
            position: relative;
            
        }
        main #conteinerSliders .sliders{
            width: 300vw;
            height: 100%;
            display: flex;
            position: relative;
        }
        main #conteinerSliders .sliders input{
            display: none;
        }

        main #conteinerSliders .sliders .slider{
            width: 100vw;
            height: 100%;
        }

        main #conteinerSliders .pointer{
            width: 99%;
            height: 100%;
            position: absolute;
            bottom: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        main #conteinerSliders .pointer .click{
            font-size: 70px;
        }
        #slider1:checked ~ #card1{
          margin-left: 0vw;
        }
        #slider2:checked ~ #card2{
            margin-left: -100vw;
        }

        #slider3:checked ~ #card3{
            margin-left: -200vw;
        }
        /**/

        #formularioCadastro{
            width: 23%;
            height: 70%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 50px;
            border: 4px solid rgba(0, 0, 0, 0.931);
            box-shadow: 0px 0px 8px 8px rgba(0, 0, 0, 0.931);
        }

        #formularioCadastro .inputBox{
            position: relative;
            height: 40px;
        }
        
        #formularioCadastro .inputBox .labelCadastro{
            position: absolute;
            top: 0;
        }
        #formularioCadastro .inputBox .inputCadastro{
            width: 100%;
            background-color: #eee;
            border: none;
            border-bottom: 1px solid rgb(0, 0, 0);
            outline: none;
            color: black;
            text-align: center;
        }

       


        
        /*
        
        .inputCadastro:focus ~ .labelCadastro{
            margin-bottom: 20px;
        }
        
        
        
        */


        footer{
            width: 100%;
            height: 15vh;
            box-shadow: 0px 0px 5px 5px black;
            display: flex;
            justify-content:flex-start;
            align-items: center;
            padding: 0px 40px;
            gap: 20px;
        }

        footer .photo{
            width: 43px;
            height: 43px;
        }

        @media(max-width:700px){
           body{
            overflow: hidden;
           }
           main{
            width: 100%;
            height: calc(150vh - 100px - 15vh );
            display: flex;
            justify-content: space-evenly;
            flex-direction: column;
            align-items: center;
            flex-wrap: wrap;

        }
           
        
        main #conteinerSliders{
            width: 100%;
            height: 40%;
            overflow: hidden;
            position: relative;
            
        }
            ol{
                display: none;
            }
        }

    </style>
    <title>Cadastro</title>
</head>
<body>   
    <header>
        <a href="" class="link">
            <img src="../projeto_PHP/photos/logo-perfect.png" alt="" srcset="">
        </a>

         <ol>
            <li class="li_login">login
                <span class="material-symbols-outlined flecha_baixo">expand_more</span>

                <form class="ol_login">
                    <b>Fazer login</b>
                    <label for="email">
                        Informe seu email
                        <input type="email" name="email" id="email" maxlength="100" required autocomplete="email" autofocus>
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

        <form action="../projeto_PHP/banco_de_dados/adicionar.php" method="post" id="formularioCadastro">
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

            <input type="submit" value="enviar" onclick="enviar()">
        </form>
    </main>
    
   <footer>
    <a href="https://github.com/gleisonschlemper"><img src="../projeto_PHP/photos/github.png" alt="" class="photo"></a>
    <a href=""><img src="../projeto_PHP/photos/facebook.png" alt="" class="photo"></a>
    <a href=""><img src="../projeto_PHP/photos/logotipo-do-linkedin.png" alt="" class="photo"></a>
    
    
    
   </footer>

    <script>
        var aside = document.querySelector('aside').style.right = '-25%';
        function asideControle(){

            if(document.querySelector('aside').style.right == '-25%'){
                document.querySelector('aside').style.right = '0%';
                document.querySelector('.menu').style.color = 'white';
            }
            else{
                document.querySelector('aside').style.right = '-25%';
                document.querySelector('.menu').style.color = 'black';
            }
        }

        function abrirClick(){
            document.querySelector('.labelCadastro').style.bottom = '50px';
        }


    </script>

</body>
</html>