<?php
require("conexao.php");

if(isset($_GET['id'])){
    
    $id=$_GET['id'];
    
    $stmt=$pdo->prepare("DELETE FROM aluno WHERE id=:id");
    
    $stmt->bindValue(":id",$id);
    $stmt->execute();
    
    header("Location: index.php");
}
else{
    echo "id não encontrado";
}
