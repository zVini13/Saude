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
        background-color: #ddd;
        }
        h1{
            font-size: 55px;
            /* background-color: aqua; */
        }
        h2{
            font-weight:bolder;

        }
        header{
            background-color:darkgray;
        }
</style>
<body>
    <div class="container">
         <div class="row mt-3">
             <header><div class="d-flex justify-content-center">
                <h1> Informações de Dr.Rogério</h1>
            </div></header>
        </div>

        <div class="row mt-3">
            <div class="d-flex justify-content-center">
               <h3>Especialidades: Gastroenterologista, Alergista</h3>
           </div>
       </div>
       <div class="row mt-3">
        <div class="d-flex justify-content-center">
           <h3>Locais de atendimento: Hospital Bacabal, Posto Santo Antonio Fonseca</h3>
       </div>
   </div>
        
        {{-- <table class="table">
            <thead>
              <tr>
                <th scope="col"><h2>Nome</h2></th>
                <th scope="col"><h2>Especialidade</h2></th>
                <th scope="col"><h2>Local de atendimento</h2></th>
                <th scope="col"><h2>Horário</h2></th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td><h4>Dr.Rogério</h4></td>
                <td><h4>Clínico Geral</h4></td>
                <td><h4>Hospital Municipal e Postinho Ribeirão</h4></td>
                <td><h4>10:00 às 18:00</h4></td>
              </tr>
            </tbody>
          </table> --}}
        
        

        <a href="{{route('listarmedicos')}}" class="btn btn-primary" > <h3>Voltar</h3></a>
    </div>

    
</body>
</html>