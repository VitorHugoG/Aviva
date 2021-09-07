<?php
//Esse arquivo e responsavel pelo codigo que faz o cadastro do usuario.

include 'configBanco.php'; //Inclui todas as variaveis/funcoes do arquivo configBanco.php nesse codigo, isso garante que tenhamos acesso a variavel de conexao

$msg = ""; //Essa variavel servira para mandarmos msgs ao usuario passando informacoes, exemplo: msg = 1(campos em branco); msg = 2(senha diferente de confirmar senha) etc


//Recebendo os dados do formulario 
$nome_prod = $_POST["nome_prod"];
$preco_prod = $_POST["preco_prod"];
$unid_med_prod = $_POST["unid_med_prod"];


//verificando se todos os campos foram preenchidos
if($nome_prod == "" || $preco_prod == "" || $unid_med_prod == ""){
    $msg =  "1"; //Definindo a msg que iremos mostrar
    header("Location: frm-inserir-produto.php?msg=$msg"); //Mandando o usuario de volta para a pagina do formulario com a msg
}
else{

//Verificando se a senha esta diferente o confirmar senha


//Feitas todas as verificacoes podemos prosseguir com o Banco
$qry = "INSERT INTO produtos (nome_prod, preco_prod, unid_med_prod, cod_status_prod, cod_usuario) values ('$nome_prod', '$preco_prod', '$unid_med_prod', 'A', 1)"; //Comando SQL para inserir o usuario
$resultado = $conexao->prepare($qry);//Preparando a acao
$resultado->execute();//Fazendo a acao
$msg = "2";
header("Location: frm-inserir-produto.php?msg=$msg"); //Mandando o usuario de volta para a pagina do formulario com a msg
}















