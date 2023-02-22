<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CADASTRO</title>
    <!--LINK BOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <?php
                include 'conexao.php';

                $nome = $_POST['nome'];
                $senha = $_POST['senha'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $data_nascimento = $_POST['data_nascimento'];

                $sql = $pdo->prepare("INSERT INTO `pessoa`( `nome`, `senha`, `endereco`, `telefone`, `email`, `data_nasc`) VALUES ('$nome','$senha','$endereco','$telefone','$email','$data_nascimento');");
                $sql->execute();


            ?>


            <h1 style="text-align:center;">CADASTRO FEITO COM SUCESSO</h1>
            <br>
            <a class="btn btn-primary" href="index.php">VOLTAR</a>
        </div>
    </div>

    <!--SCRIPT BOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>