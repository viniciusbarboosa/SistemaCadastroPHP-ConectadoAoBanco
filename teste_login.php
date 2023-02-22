<?php 
session_start();
include 'conexao.php';
    //print_r($_REQUEST);
    if(!empty($_POST['email']) && !empty($_POST['senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r($email);
        // print_r("<br>");
        // print_r($senha);

        $sql =$pdo->prepare("SELECT * FROM pessoa WHERE email = '$email' and senha = '$senha'");    
        $sql-> execute();
        $dados = $sql->fetchAll();
        if($sql->rowCount() != 0){
           // echo 'deu certo';
           $_SESSION['Usuario'] = $dados;
           header ('Location: sistema.php');
        }else{
            $_SESSION['Erro'] = "Email ou Senha Incorretos";
            header('Location: login.php');
            exit;
          }
    }
    

?>