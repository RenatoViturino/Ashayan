<?php

include './connectionDB.php';

try {
    $conexao = conectar();

    $sql = 'INSERT INTO tb_livro (titulo,autor,arquivo) VALUES(:titulo,:autor,:arquivo) ';
    $titulo = 'Umbanda';
    $autor = 'ApaS';
    $arquivo = 'C:\Users\Renato\Desktop\PN.pdf';




    $stm = $conexao->prepare($sql);
    $stm->bindParam(':titulo', $titulo);
    $stm->bindParam(':autor', $autor);
    $stm->bindParam(':arquivo', $arquivo);

    if ($stm->execute()) {
        echo 'Salvo com Sucesso';
    } else {
        echo 'Erro ao salvar!';
    }
} catch (PDOException $exc) {
    echo $exc->getMessage();
}


