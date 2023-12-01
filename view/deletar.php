<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
</head>
<body>
    <?php
    //chamando o controller
        include ("../control/CriarController.php");
        //instanciando o controller
        $Control = new CriarController();
        //chamando o método listAll() do controller e passando o prompt 'deletar'
        //que dita o value do input type submit
        $Control->listAll("Deletar");
        //verifica se algum botao foi acionado
        if(isset($_POST['submit-button'])){
            //se foi acionado, passa o id no input type=hidden do form para deletar
            $Control->deletar($_POST['hidden']);
        }

    ?>
    <a href="../index.php">Menu</a>
</body>
</html>