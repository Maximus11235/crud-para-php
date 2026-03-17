<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD alunos</title>
</head>
<body>

    <form action="cadastrar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="email">Email:</label>
        <input name="email" id="email" type="email" autocomplete="off" required/>
        <br><br>
        <label for="curso">Curso:</label>
        <input type="text" name="curso" id="curso" required>
        <br><br>
        <input type="submit" name="Cadastrar" value="Cadastrar">
    </form>

    <br><br><br>

    <form action="excluir.php" method="post">
        <label for="email">Email para excluir:</label> 
        
        <input name="email" id="email" type="email" autocomplete="off" required/>
        <br><br>
        <input type="submit" name="Excluir" value="Excluir">
    </form>

</body>
</html>