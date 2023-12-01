<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <?php
        include ("../control/CriarController.php");
        $Controller = new CriarController();
        $Controller->listar();
    ?>
    <a href="../index.php">Menu</a>
</body>
</html>