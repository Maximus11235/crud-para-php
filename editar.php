<?php
include "conexao.php";
if(!isset($_GET['id'])){
    header("Location: index.php");
    exit;
}

$id= $_GET['id'];
$query= $pdo->prepare("SELECT * FROM aluno WHERE id=:id");
$query->bindValue(":id",$id);
$query->execute();
$aluno=$query->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Editar Usuário</h1>
            <form action="salvar.php" method="post">
                <input type="hidden" id="id" name="id" value="<?php echo $aluno['id']; ?>">
                <input type="text" id="nome" name="nome" value="<?php echo $aluno['nome']; ?>" />
                <input type="email" id="email" name="email" value="<?php echo $aluno['email']; ?>" autocomplete="on"/>
                <input type="text" id="curso "name="curso" value="<?php echo $aluno['curso']; ?>"/>
                <div class="btn-box">
                    <a href="index.php" class="btn">Cancelar</a>
                    <button type="submit" class="btn" name="editar">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>