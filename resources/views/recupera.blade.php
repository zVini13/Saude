<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
</head>
<style>
        body{
            font-family: 'Oswald', sans-serif;
        }
        h1{
            font-size: 55px;
            /* background-color: aqua; */
        }
</style>
<body>
    <div class="container">
    <div class="row mt-3 mb-3">
        <div class="d-flex justify-content-center">
           <h1>Recuperar senha</h1>
       </div>
   </div>
   <div class="card">
    <div class="card-body">   
        <h3>Para restaurar a sua senha, informe seu e-mail de login. Em instantes, um código de confirmação será enviado a esse e-mail para que a senha seja redefinida.</h3>
    </div>
  </div>
   {{-- <div class="row mt-3">
        <h3>Para restaurar a sua senha, informe seu e-mail de login. Em instantes, um código de confirmação será enviado a esse e-mail para que a senha seja redefinida.</h3>

   </div> --}}
   <form>
    @csrf
    <div class="mt-3">
        <label for="email" class="form-label"><h3>E-mail:</h3></label>
        <input type="text" class="form-control" id="email" name= "email">
    <div class="mt-3">   
        <button type="submit" class="btn btn-primary"><h3>Enviar</h3></button>
    </div>


   </form>


    </div>   
</body>
</html>