<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
    <?php
        //buscando o controller
        include ("../control/CriarController.php");
        //instanciando o controller
        $Control = new CriarController();
        //verificando se o form está sendo utilizado
        if(isset($_POST['submit-button'])){
            //definição de variáveis
            $id = $_GET['id'];
            $nome =$_POST['nome'];
            $desc = $_POST['desc'];
            $preco = $_POST['preco'];
            $idLoja = $_POST['loja'];
            //utilizando o método atualizar() do controller e passando os respectivos parametros
            $Control->atualizar($id,$nome,$desc,$preco,$idLoja);

        }
    ?>
    <a href="../index.php">Menu</a>
</body>
</html>