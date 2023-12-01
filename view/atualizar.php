<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <?php
    //chamando e instanciando o controller
    include ("../control/CriarController.php");
    $Control = new CriarController();

    //chamando o método listAll() do controller, que passa o prompt 'atualizar'
    //que ditará o value do input type=submit
    $Control->listAll("Atualizar");

    //verifica se algum botao foi acionado
    if(isset($_POST['submit-button'])){
        //insere o valor do input type=hidden na variável
        $id = $_POST['hidden'];
        //passa a variável no URL para editar o objeto
        header("location:formUpdate.php?id=$id");
    }
    ?>
    <a href="../index.php">Menu</a>
</body>
</html>