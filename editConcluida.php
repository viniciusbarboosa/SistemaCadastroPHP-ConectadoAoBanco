<?php 

    include 'conexao.php';
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $dataNasc = $_POST['dataNasc'];
    $senha = $_POST['senha'];
    $id = $_POST['id'];

    $sql = $pdo->prepare("UPDATE `pessoa` SET `nome` = '$nome',`endereco` = '$endereco', `email` = '$email', `data_nasc` = '$dataNasc' WHERE `id_pesssoa` = $id");
    $sql->execute();
    header("Location: sistema.php");
    exit;
    
    ?>