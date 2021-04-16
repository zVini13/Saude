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
        header{
            background-color:darkgray;
        }
        h2{
            font-weight: bolder;
        }
</style>
<body>
    <div class="container">
         <div class="row mt-3">
            <header><div class="d-flex justify-content-center">
                <h1>Plantões</h1>
            </div>
            </header>
            </div>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col"><h2>Especialidade</h2></th>
                <th scope="col"><h2>Data</h2></th>
                <th scope="col"><h2>Horário de início</h2></th>
                <th scope="col"><h2>Horário de término</h2></th>
                <th scope="col"><h2>Médico(a)</h2></th>
                <th scope="col"><h2>Centro de Saúde</h2></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><h4>Geral</h4></td>
                <td><h4>29/11/2021</h4></td>
                <td><h4>15:30</h4></td>
                <td><h4>12:00</h4></td>
                <td><h4>Dr.Neymar</h4></td>
                <td><h4>Hospital NeyDay</h4></td>
              </tr>
            </tbody>
          </table>
        
        

        <a href="{{route('inicio')}}" class="btn btn-primary" > <h3>Voltar</h3></a>
    </div>

</div>
</body>
</html>