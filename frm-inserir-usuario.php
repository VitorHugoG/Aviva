

<!DOCTYPE html>

<html>
    <head>
        <title>Inserir Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Inserir Usuario</h2>
        <form action="insert-user.php" method="post">
            <label>Nome: </label><input type="text" name="nome"><br>
            <label>Email: </label><input type="text" name="email"><br>
            <label>Senha: </label><input type="password" name="senha"><br>
            <label>Confirmar Senha: </label><input type="password" name="senha2"><br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>

<?php 
    //SISTEMA DE MSGS
    if(!isset($_GET['msg'])){} else {
        $msg = $_GET['msg'];
        switch ($msg){
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
?>