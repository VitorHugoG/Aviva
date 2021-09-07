<?php
//Esse arquivo e responsavel pelo codigo que faz o cadastro do usuario.

include 'configBanco.php'; //Inclui todas as variaveis/funcoes do arquivo configBanco.php nesse codigo, isso garante que tenhamos acesso a variavel de conexao

$msg = ""; //Essa variavel servira para mandarmos msgs ao usuario passando informacoes, exemplo: msg = 1(campos em branco); msg = 2(senha diferente de confirmar senha) etc


//Recebendo os dados do formulario 
$nome = $_POST["tNome"];
$email = $_POST["tEmail"];
$senha = $_POST["tSenha"];
$senha2 = $_POST["tSenha2"];

//verificando se todos os campos foram preenchidos
if($nome == "" || $email == "" || $senha == "" || $senha2 == ""){
    $msg =  "1"; //Definindo a msg que iremos mostrar
    header("Location: cadastro.php?msg=$msg"); //Mandando o usuario de volta para a pagina do formulario com a msg
}
else{

//Verificando se a senha esta diferente o confirmar senha
if($senha != $senha2){
    $msg =  "2"; //Definindo a msg que iremos mostrar
    header("Location: cadastro.php?msg=$msg"); //Mandando o usuario de volta para a pagina do formulario com a msg
}

else{

//Feitas todas as verificacoes podemos prosseguir com o Banco
$qry = "INSERT INTO usuario (nome_usuario, email_usuario, url_foto_usuario, senha_usuario, cod_status_usuario, cod_tipo_usu) values ('$nome', '$email', '', '$senha', 'A', 2)"; //Comando SQL para inserir o usuario
$resultado = $conexao->prepare($qry);//Preparando a acao
$resultado->execute();//Fazendo a acao
$msg = "3";
header("Location: cadastro.php?msg=$msg"); //Mandando o usuario de volta para a pagina do formulario com a msg

}
}













