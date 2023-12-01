<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <?php
    include ("../control/CriarController.php");
    $Control = new CriarController();
    $Control->listAll("Atualizar");

    if(isset($_POST['submit-button'])){
        $id = $_POST['hidden'];
        header("location:formUpdate.php?id=$id");
    }
    ?>
    <a href="../index.php">Menu</a>
</body>
</html>