<?php

include './connectionDB.php';

try {
    $conexao = conectar();
    $sql = "SELECT * FROM  tb_livro WHERE id_livro =:id";
   
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":id", 1);
    $stmt->execute();
    
    $resultado= $stmt->fetchAll();
    
    foreach ($resultado as $value) {
        echo 'Titulo: '.$value['titulo'].'<br>';
       
        
    } 
    
} catch (PDOException $exc) {
    echo 'Erro ' . $exc->getMessage();
}