<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar</title>
</head>
<body>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>
        <label for="desc">Descrição:</label>
        <input required  type="text" name="desc"><br>
        <label for="preco">Preço:</label>
        <input required type="number" name="preco" step="any"><br>
        <label for="loja">Nº Loja: </label>
        <input required type="number" name="loja">

        <input name="submit-button" type="submit" value="Criar Item">
    </form>
    <a href="../index.php">Menu</a>
</body>
</html>
<?php
if(isset($_POST['submit-button'])){
    include ("../control/CriarController.php");
    $Controller = new CriarController();
    $nome = $_POST["nome"];
    $desc = $_POST['desc'];
    $preco = $_POST['preco'];
    $idLoja = $_POST['loja'];
    $Controller->criar($nome,$desc,$preco,$idLoja);
}
?>