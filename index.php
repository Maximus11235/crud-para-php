<?php
require("conexao.php");

if(isset($_GET['pesquisar']) AND $_GET['pesquisar']!=""){
    $busca=$_GET['pesquisar'];

    $query= $pdo->prepare("SELECT * FROM aluno WHERE nome LIKE :busca OR email LIKE :busca OR curso LIKE :busca");
    $query->bindValue(":busca", "%" . $busca . "%", PDO :: PARAM_STR);
}else{
    $query= $pdo->prepare("SELECT * FROM aluno");
}

$query->execute();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div class="container">
        <h1>Lista de Alunos</h1>
        <a href="cadastrar.html">Cadastrar</a>
        <form action="index.php" method="get">
            <div class="search-box">
                <input type="text" id="pesquisar" name="pesquisar" placeholder="Pesquisar">
                <button type="submit">Pesquisar</button>
            </div>
        </form>
        <table>
            <tr>
                <th>Num.</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Curso</th>
            </tr>
            <?php 
            while($aluno=$query->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><?php echo $aluno['id'] ?></td>
                <td><?php echo $aluno['nome'] ?></td>
                <td><?php echo $aluno['email'] ?></td>
                <td><?php echo $aluno['curso'] ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $aluno['id']; ?>">Editar</a>
                    <a href="excluir.php?id=<?php echo $aluno['id']; ?>" class="btn-delete">Remover</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>