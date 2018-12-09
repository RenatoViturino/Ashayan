<?php

include './connectionDB.php';

try {
    $conexao = conectar();

    $sql = 'UPDATE tb_livro SET  titulo = :titulo, autor= :autor WHERE id_livro = :id';
    $titulo = 'Candomblé';
    $autor = 'ApaS';
    $arquivo = 'C:\Users\Renato\Desktop\PN.pdf';
    $id = 1;



    $stm = $conexao->prepare($sql);
    $stm->bindParam(':titulo', $titulo);
    $stm->bindParam(':autor', $autor);
    $stm->bindParam(':id', $id);


    if ($stm->execute()) {
        echo 'Alterado com Sucesso';
    } else {
        echo 'Erro ao Alterar!';
    }
} catch (PDOException $exc) {
    echo $exc->getMessage();
}


