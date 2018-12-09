<?php

include './connectionDB.php';

try {
    $conexao = conectar();

    $sql = 'DELETE FROM  tb_livro WHERE id_livro = :id';
    $id = 1;



    $stm = $conexao->prepare($sql);
  
    $stm->bindParam(':id', $id);


    if ($stm->execute()) {
        echo 'Deletado com Sucesso';
    } else {
        echo 'Erro ao deletar!';
    }
} catch (PDOException $exc) {
    echo $exc->getMessage();
}


