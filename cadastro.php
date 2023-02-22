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
           <div class="col">
                <h1>CADASTRO</h1>
                <form action="cadastro_script.php" method="POST">

                <div class="mb-3"><!--INPUT EMAIL-->
    <label for="nome" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" name="nome" required>
             </div><!--INPUT EMAIL FECHAMENTO-->

             <div class="mb-3"><!--INPUT ENDERECO-->
    <label for="endereco" class="form-label">Endereço</label>
    <input type="text" class="form-control" name="endereco" required>
             </div><!--INPUT ENDERECO FECHAMENTO-->

             <div class="mb-3"><!--INPUT SENHA-->
    <label for="senha" class="form-label">Senha</label>
    <input type="password" class="form-control" name="senha" required>
             </div><!--INPUT SENHA FECHAMENTO-->

             <div class="mb-3"><!--INPUT TELEFONE-->
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="telefone" required>
             </div><!--INPUT TELTEFONE FECHAMENTO-->

             <div class="mb-3"><!--INPUT EMAIL-->
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" required>
             </div><!--INPUT TELTEFONE EMAIL-->

             <div class="mb-3"><!--INPUT DATA NASC-->
    <label for="dt_nascimento" class="form-label">Email</label>
    <input type="date" class="form-control" name="data_nascimento" required>
             </div><!--INPUT TELTEFONE DATA NASC-->

             <div class="mb-3"><!--INPUT BUTTON-->
    <button type="submit" class="btn btn-outline-success">CADASTRAR</button>
             </div><!--INPUT BUTTON-->



                </form>
           </div> 
        </div>
    </div>

    <!--SCRIPT BOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>