<?php
require("conexao.php");

if(isset($_POST['id'])){
    
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $curso=$_POST['curso'];
    
    $stmt=$pdo->prepare("UPDATE aluno SET nome=:nome, email=:email, curso=:curso WHERE id=:id");
    
    $stmt->bindValue(":nome",$nome);
    $stmt->bindValue(":email",$email);
    $stmt->bindValue(":curso",$curso);
    $stmt->bindValue(":id",$id);
    
    $stmt->execute();
    
    header("Location: index.php");
}
else{
    echo "id não encontrado";
}