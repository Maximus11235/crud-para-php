<?php

require("conexao.php");

if(isset($_POST["Excluir"])){

    $email=$_POST["email"];

    $query="DELETE FROM aluno WHERE email=:email";

    $stmt=$pdo->prepare($query);

    $stmt->bindParam(":email",$email);

    if($stmt->execute()){
        header("Location:index.php");
        exit();
    }else{
        echo "Erro ao excluir usuário";
    }

}else{
    echo "algo deu errado";
} 