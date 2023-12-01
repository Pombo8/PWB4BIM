<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
</head>
<body>
    <?php
        include ("../control/CriarController.php");
        $Control = new CriarController();
        $Control->listAll("Deletar");

        if(isset($_POST['submit-button'])){
            $Control->deletar($_POST['hidden']);
        }

    ?>
    <a href="../index.php">Menu</a>
</body>
</html>