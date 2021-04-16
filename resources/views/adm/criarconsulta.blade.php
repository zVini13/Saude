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
               <h1>Agendar consulta</h1>
           </div>
       </div>
        <form> 
            @csrf
        <div class="mb-3">
          <label for="nome" class="form-label"><h3>Tipo de consulta:</h3></label>
          <input type="text" class="form-control" id="nome" name= "nome">
        </div>
        <div class="mb-3">
            <label for="data" class="form-label"><h3>Data:</h3></label>
            <input type="date" class="form-control" id="data" name= "data"></div>
        {{-- <div class="mb-3">
            <label for="bairro" class="form-label"><h3>Bairro:</h3></label>
            <input type="text" class="form-control" id="bairro" name= "bairro"></div> --}}
        {{-- <div class="mb-3">
            <label for="rua" class="form-label"><h3>Rua:</h3></label>
            <input type="text" class="form-control" id="rua" name= "rua"></div> --}}
        {{-- <div class="mb-3">
            <label for="numero" class="form-label"><h3>Número:</h3></label>
            <input type="number" class="form-control" id="numero" name= "numero"></div> --}}
        {{-- <div class="mb-3">
            <label for="email" class="form-label"><h3>E-mail:</h3></label>
            <input type="text" class="form-control" id="email" name= "email"></div> --}}
        <div class="mb-3">
            <label for="horario" class="form-label"><h3>Horário:</h3></label>
            <input type="string" class="form-control" id="horario" name= "horario"></div>
        <div class="mb-3">
            <label for="local" class="form-label"><h3>Local:</h3></label>
            <input type="text" class="form-control" id="local" name= "local"></div>
        <div class="mb-3">
            <label for="nome" class="form-label"><h3>Médico:</h3></label>
            <input type="text" class="form-control" id="nome" name= "nome"></div>

            {{-- //depois colocar o post action// --}}
            <a href="{{route('consultacadastrada')}}" class="btn btn-primary" > <h3>Cadastrar</h3></a>
            <a href="{{route('telaservidor')}}" class="btn btn-primary" > <h3>Voltar</h3></a>
        
        </form>
            





    </div>
</body>
</html>