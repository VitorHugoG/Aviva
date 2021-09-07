<?php

//Nesse arquivo passamos todas as configuracoes do Banco, como nome, host, senha
//e etc, e tambem fazemos as funcoes relacionadas a ele.


//INICIO CONFIGS BANCO
$hostBanco = "LAB3M09"; //Essa variavel deve receber o nome do seu computador, ou o computador que estiver hospedado o Banco, localhost para padrao
$usuarioBanco = "root"; //Nome de usuario para logar no MySQL WB, na escola utilizamos o root;
$senhaBanco = "12345678"; //Senha do usuario do MySQL WB, na escola utilizamos 12345678
$nomeBanco = "bdfloriculturatcaaviva"; //Nome do Banco, exemplo: dbFloriculturaTCA

//Criando a variavel de conexao ao Banco
$conexao =  new PDO("mysql:host=$hostBanco;dbname=$nomeBanco", $usuarioBanco, $senhaBanco); //Criando uma variavel de conexao, passando as informacoes das variaveis
//FIM CONFIGS BANCO








