<?php
require("conexao.php");

if(isset($_POST)){

    $nome=$_POST['nome'];
    $email=$_POST["email"];
    $curso=$_POST['curso'];
    
    if($nome==""||$email==""||$curso==""){
        echo "Todos os campos precisam ser preenchidos.";
        exit;
    }

    $query="INSERT INTO aluno (nome, email, curso) VALUES ('$nome','$email', '$curso')";
    
    $statement= $pdo->prepare($query);
    $statement->execute();
    
    header("Location: index.php");
}
?> 