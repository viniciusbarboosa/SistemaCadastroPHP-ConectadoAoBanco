<?php 
    session_start();
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!--LINK BOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!--FONT AWESSOME-->
</head>
<body>
    <!--NAV-->
<nav class="navbar navbar-light bg-light">

  <div style="margin: 0.5rem; display: flex; align-items: center;" class="navbar-brand">
    <?php  
        if(isset($_SESSION["Usuario"][0][1]) && $_SESSION["Usuario"][0][1] !=''){

    ?>
    <img src="img/usuarioUniown.png" width="50" height="50" class="d-inline-block align-top" alt="">
    
    <div style="padding:7px;">
    <label style="text-decoration: none; color:black;"><?php echo $_SESSION["Usuario"][0][1]; ?><label>
    </div>
        <?php 
            }else{
                
        ?>
            <img src="img/usuarioUniown.png" width="50" height="50" class="d-inline-block align-top" alt="">
    
        <div style="padding:7px;">
            <a class="btn btn-outline-success" style="text-decoration: none;" href="login.php">FAZER LOGIN</a>
        </div>
    
    <?php 
            }
    ?>

  </div>

</nav>
<!--NAV-->
    <!--SESSÃO-->
    <?php 
    if(isset($_SESSION["Usuario"][0][1]) && $_SESSION["Usuario"][0][1] !=''){
    ?>
    <div style="text-align: center;" class="container">
    <h1>BEM VINDO AO SISTEMA</h1>
    <a href="login.php" class="btn btn-outline-danger">SAIR</a>
    </div>
    <br>
    <h2 style="text-align: center;">Usuarios</h2>


    <div class="container">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php   
        //$idPessoa = $_SESSION["Usuario"][0][0];
        $sql = $pdo->prepare("SELECT * FROM `pessoa`");
        $sql->execute();
        $informacao = $sql->fetchAll();
        
        foreach ($informacao as $key => $value) {
            
      
    ?>
    <tr>
      <td><?php echo $value['id_pesssoa']?></td>
      <td><?php echo $value['nome']?></td>
      <td><?php echo $value['email']?></td>
      <td><?php echo $value['senha']?></td>
      <td><a class="btn btn-outline-success" href="editUser.php?id=<?php echo $value['id_pesssoa'] ?>">EDIT</a> <a class="btn btn-outline-danger" href="excluirUser.php?id=<?php echo $value['id_pesssoa']?>">EXCLUIR</a>   </td>
    </tr>
    
    <?php  
        }
    ?>

  </tbody>
</table>

    </div>
        
    <?php
        }else{
    ?>        
    <div class="container">
    <br>
    <h1>BEM-VINDO PARA MAIS FUNCIONALIDADES LOGUE NO SISTEMA </h1>
    <center>
    <a style="font-size: 25px;" href="login.php" class="btn btn-outline-success">LOGAR</a>
    </center>
    </div>
    <?php

        }
    ?>
    <!--SESSÃO-->





    

        <!--SCRIPT BOTSTRAP-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>