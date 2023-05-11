<?php
    $conexao;
    
    try {
        $conexao = new PDO('mysql:host=127.0.0.1:3388;dbname=linhas-itapira','nasc','123');
    } catch (\Throwable $th) {
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=linhas-itapira','root','');
    }