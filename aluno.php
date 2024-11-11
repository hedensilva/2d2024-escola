<?php
    include "functions.php";
    conectarDB(
        'localhost',
        'root',
        '',
        'escola'
    );

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $curso = $_POST['curso'];
        $transporte_escolar = $_POST['transporte_escolar'];
        $esportes = $_POST['esportes'];  
        
        $sql = "INSERT INTO aluno(nome,curso,transporte_escolar) VALUES('$nome','$curso','$transporte_escolar')";
        executarSQL($sql);
    }
?>