<?php 
  session_start();
  $_SESSION["Usuario"]="";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CADASTRO</title>
    <!--LINK BOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!--LINK DO TAILWIND-->
        <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="container">
        <div class="row">
           <div class="col">


           <!--CADASTRO-->
           <form action="teste_login.php" method="POST">
           <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">BEM VINDO</h1>
      <p class="leading-relaxed mt-4">Sistema de cadastro feito com php insira seus dados para logar no sistema</p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">LOGIN</h2>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
      </div>
      <div class="relative mb-4">
        <label for="senha" class="leading-7 text-sm text-gray-600">Senha</label>
        <input type="password" id="senha" name="senha" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
      </div>
      <?php      
        if(isset($_SESSION['Erro']) && ($_SESSION['Erro']!='')){
          $_SESSION['Erro']=''; 
       ?>

      <div style="text-align:center;"  class="relative mb-4">
        <label style="font-size:20px; font-style:italic; transition:0.5;" class="leading-7 text-sm text-red-600">Email ou Senha Inválido</label>
      </div>
      
      <?php   
        }
      ?>
      <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">LOGIN</button>
      <p class="mt-3"><a href="cadastro.php" class="btn btn-outline-primary">CADASTRAR</a>   <a href="index.php" class="btn btn-outline-primary">IR PARA HOME</a> </p>
    </div>
  </div>
</section>
</form>
  <!--CADASTRO-->


            </div>
        </div>
    </div>

    <!--SCRIPT BOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>