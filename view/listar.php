<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <?php
        //chamando controller
        include ("../control/CriarController.php");
        //instanciando o controller
        $Controller = new CriarController();
        //utilizando o método listar() do controller
        $Controller->listar();
    ?>
    <a href="../index.php">Menu</a>
</body>
</html>