<!DOCTYPE html>

<html>
    <head>
        <title>Aviva</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <style>

            #Login{
            position: relative;    
            width: 250px;
            height: 300px;
           top: 40px;
            left: 100px;

            }
            #email,#senha{
                border-radius: 20px;
                border-color:#9BBE7A;   
               border-style: solid;
                height:30px;
                margin-bottom: 5px;
                outline: none;
                text-indent: 5px;



            }

            .cd {
                position: relative;
                top: 35px;
                right: 315px;
                  color: #bcb5b5;
             
                

            }
            .cd2{
                left:280px;
                top: 50px;
               position: relative;
              color: #bcb5b5;
            }

 
            

            #Cadastro {
                width: 100%;
                margin: auto;
                position: relative;
                top: 50px;
                margin-left:690px;
margin-bottom: -200px


            }

            label {
                font-size: 1rem;
                font-weight:  bold;
                color: #bcb5b5;
                text-align: center;
            }
            #cSenha,#cNome,#cEmail,#cTc,#cSenhac{
                border-radius: 20px;
                border-color:#9BBE7A;   
                height:30px;
                margin-bottom: 5px;
                outline: none;
                text-indent: 5px;
                border-style: solid;
            }
            .lh{
                position:relative;
                 left: 450px;
                 height: 500px;
                 bottom: 255px;
          


       
            }
         
            .quebraa2{
         
                width: 100%;
            }
            .bord{
                border: solid 2px #9BBE7A; 
                margin-right: 120px;
                margin-left: 120px;
                margin-bottom: 5px;
                padding-bottom: -50px;
            }
            footer{
 position: relative;

  width: auto;
  height:11vh;
  top: 15px;
 
 
  
}

.quebra44{
    margin-bottom: 580px;
    width: 100%;
    margin-top: -50px;
    margin-right: 2px;
}
footer p.para {
 position: relative;
 bottom:40px;
 float: left;
 margin:85px;
 font-size: 1rem;
color: gray;
}

footer p.para a{

color: gray;
}
.roda{
  margin-bottom: 15px; 
  margin-right: 25px;
}

footer p.rede{
  position: relative;
  bottom: 20px;
  font-size: 1rem;  
  left: 117px;
color: gray;
}
.para a{
  color: black;
}
.quebra4{
    margin-top: 230px;
    width: 100%;
}
.face{
  position: relative;
  left: 110px;
  bottom: 5px;
}
.tw{
  position: relative;
  bottom: 7px;
}
.insta{
  position: relative;
  left: 54px;
  top: 30px;
}
.you{
  position: relative;

  left:56px;
  top: 30px; 
}

        </style>

    </head>
    <body >
        <div id="container">
            <header>
                <a class="reg" href="cadastro.php">
                    <img src="imagens/cadastro.png" alt="" width="100" height="16"/>
                </a>


                <a href="index.html">
                    <img src="imagens/logo.png" alt="" width="250" height="100" class="imagem1"/></a>
                <form class="buscar" method="post" action="produtos.html">
                    <input type="text" name="q" placeholder="Pesquisar..." class="digitar" >
                    <button type="submit" class="buttton"><img src="imagens/button.png" alt="" class="buttton"/>
                    </button>


                </form>





            </header>
           

            <img src="imagens/quebra.png" alt="" class="quebra"/>
 
            <div class="bord"> 
          <h3 class="cd2"> Cadastro</h3> <h3 class="cd">Login</h3>
            <form method="post" id="Cadastro" action="insert-user.php">


                <p><label for="tNome">Nome:</label><br/>
                    <input type="text" name="tNome" id="cNome" size="40" maxlength="30" placeholder="digite seu nome aqui">
                </p>

                <p>

                    <label for="tEmail">E-mail:</label><br/>
                    <input type="text" name="tEmail" id="cEmail" size="40" maxlength="40" placeholder="digite sua senha aqui">
                </p>
                <p>
                    <label for="tSenha">Senha:</label><br/>
                    <input type="password" name="tSenha" id="cSenha" size="40" maxlength="50" placeholder="digite seu email aqui">
                </p>
                <p>
                    <label for="tSenhac">Confirmar senha:</label><br/>
                    <input type="password" name="tSenhac" id="cSenhac" size="40" maxlength="50" placeholder="digite seu email aqui">
                </p>
                <input type="submit" value="Cadastrar">

            </form>           
            
         
             <form method="post" id="Login" action="">

        <p>

                    <label for="email">E-mail:</label><br/>
                    <input type="text" name="email" id="email" size="40" maxlength="40" placeholder="Digite seu email aqui"
                </p>
                <p>
                    <label for="senha">Senha:</label><br/>
                    <input type="password" name="senha" id="senha" size="40" maxlength="50" placeholder="Digite sua senha aqui">
                </p>
                <input type="submit" value="Enviar">


            </form>
</div>
            <img src="imagens/quebra.png" alt="" class="quebraa2"/>
</div>
      

 







        <div id="rodapee">
            <footer>
               <p class="para"><a href="cadastro.php">Cadastre-se/Login</a></p>  
                    <p class="para">Saiba mais</p> 
                    <p class="para">Rua ficticia</p>  
                    <p class="para">7070-7070</p>
                    <p class="rede">Redes Sociais
</p>
                <figure class="roda">
                    <img src="imagens/facebook.png" alt="" width="50" height="65" class="face" style="border-bottom: 15px;">
                               <img src="imagens/youtube.png" alt="" width="50" height="50" class="you" style="border: 15px;">
                               <img src="imagens/insta.png" alt="" width="50"  height="50" class="insta" style="border: 15px;">
                               <img src="imagens/twitter.png"  alt="" width="50" height="71" class="tw" style="border: 15px;">
                    
                </figure>
                <figure>
                    
                </figure>
                <figure>
                    
                </figure>
                <figure>
                    
                </figure>
                
                </footer>
                <img src="imagens/quebra.png" alt="" class="quebra44"/>
        </div>

    </body>

</html>

<?php
//SISTEMA DE MSGS
if (!isset($_GET['msg'])) {
    
} else {     
    $msg = $_GET['msg'];
    switch ($msg) {
        case "1":
            echo '<p>Preencha todos os campos</p>';
            break;

        case "2":
            echo '<p>Senha e Confirmar senha devem ser iguais</p>';
            break;

        case "3":
            echo '<p>Cadastrado com sucesso</p>';
            break;
    }
}
