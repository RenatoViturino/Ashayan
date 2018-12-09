<?php
/**
 * 
 * @return \PDO
 */
function conectar() {
  
    $url = "mysql:host=127.0.0.1;dbname=ashayan_db;charset=utf8";
    $nome_usuario = "root";
    $senha_banco = "";

    try {
        $conectarBanco = new PDO($url, $nome_usuario, $senha_banco);
        return $conectarBanco;
    } catch (PDOException $excepction) {
        echo 'Erro ' . $excepction->getMessage();
    }
}
