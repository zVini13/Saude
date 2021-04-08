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
        background-color: aquamarine;
        }
        h1{
            font-size: 55px;
            /* background-color: aqua; */
        }
</style>
<body>
    <div class="container">
        <div class="row mt-3">
        <div class="d-flex justify-content-center">
            <h1>Sistema de Saúde</h1>
        </div></div>
        <div class="row mt-4">
            <div class="d-flex justify-content-center">
                    <a href="{{route('login')}}" class="btn btn-primary" ><h2>Login</h2></a></div>
            </div>
            <div class="row mt-2">
                <div class="d-flex justify-content-center">
                    <a href="{{route('cadastro')}}" class="btn btn-primary" ><h2>Cadastrar</h2></a>
                </div></div>
    </div>
    
</body>
</html>