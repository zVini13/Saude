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
                <h1>Login</h1>
            </div>
        </div>
        <form> 
            @csrf
            <div class="mb-3">
                <label for="cnpj" class="form-label"><h3>CNPJ:</h3></label>
                <input type="number" class="form-control" id="cnpj" name= "cnpj">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label"><h3>Senha:</h3></label>
                <input type="password" class="form-control" id="senha" name= "senha"></div>
        
        
                <button type="submit" class="btn btn-primary"><h3>Logar</h3></button>
                <a href="{{route('inicio')}}" class="btn btn-primary" > <h3>Página inicial</h3></a>
                <a href="{{route('recupera')}}" class="btn btn-link" ><h4>Esqueci minha senha</h4></a>
                
                <div class="row">
                    <ul class="nav justify-content-center">
                        <h4>Não está cadastrado?</h4>
                    </ul>
                    <div class="row-2">
                        <ul class="nav justify-content-center">
                            <a href="{{route('cadastro')}}" class="btn btn-link" ><h4>Cadastre-se</h4></a>
                        </ul>
                    </div>
                </div>
        </form>


    </div>

    
</body>
</html>