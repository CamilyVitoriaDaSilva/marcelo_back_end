<?php
    $Host = "localhost"; // 127.0.0.1
    $Usuario = "root"; // login do MYSQLSERVER
    $Senha = "admin"; 
    $Banco = "super_25";

    $ConexaoId = mysqli_connect($Host, $Usuario, $Senha,$Banco) or Die ("Não foi possÍvel conectar com SGBDR");

    echo("Id da conexão:");
    printf("Informaçaõ do HOST: %s\n", $ConexaoId->host_info);


?>