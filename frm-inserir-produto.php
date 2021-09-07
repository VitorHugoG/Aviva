
<!DOCTYPE html>
<html>
    <head> 
        <title>Inserir produto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Inserir produto</h2>
        <form action="insert-produto.php" method="post">
            <label>Nome: </label><input type="text" name="nome_prod"><br>
            <label>Preço: </label><input type="text" name="preco_prod"><br>
            <label>Unidade: </label><input type="text" name="unid_med_prod"><br>
            <label>Foto: </label><input type="file" name="foto"><br>
            
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
                echo '<p>Cadastrado com sucesso</p>';
                break;
        }
    }
?>