<?php   
    include 'conexao.php';
    $id = $_GET['id'];

    $sql = $pdo->prepare("DELETE FROM pessoa WHERE `id_pesssoa` = $id");
    $sql->execute();

    header("Location: sistema.php");
    exit;
?>