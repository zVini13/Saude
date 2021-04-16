<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documents</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <style type="text/css">

.sidebar li .submenu{ 
    list-style: none; 
    margin: 0; 
    padding: 0; 
    padding-left: 1rem; 
    padding-right: 1rem;
  }
  
  .sidebar .nav-link {
      font-weight: 500;
      color: var(--bs-dark);
  }
  .sidebar .nav-link:hover {
      color: var(--bs-primary);
  }


        .container, .container-fluid {
     padding-right: 15px;
     padding-left: 15px;
     background-color: #f9f9f9;
    }
    .row {
     margin-bottom: 20px;
    }
    [class*="col-"], header, footer, nav, aside, section, div[role="main"] {
     padding-top: 15px;
     padding-bottom: 15px;
     background-color: #f5f5f5;
     background-color: rgba(86,61,124,.15);
     border: 1px solid #ddd;
     border: 1px solid rgba(86,61,124,.2);
     text-align: center;
    }
    div[role="main"] {
     background-color: #fff;
    }
    div[role="main"], nav, aside {
     height: 600px;
    }
    </style>
  <script type="text/javascript">
  
    document.addEventListener("DOMContentLoaded", function(){
  
      document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
  
        element.addEventListener('click', function (e) {
  
          let nextEl = element.nextElementSibling;
          let parentEl  = element.parentElement;	
  
          if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
  
              if(nextEl.classList.contains('show')){
                mycollapse.hide();
              } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
              if(opened_submenu){
                new bootstrap.Collapse(opened_submenu);
              }
  
              }
            }
  
        });
      })
  
    }); 
    // DOMContentLoaded  end
  </script>



</head>


<body>
    <div class="container">
        <header class="row">
            <div class="row mt-3">
                <div class="d-flex justify-content-center">
                    <h1>Página do administrador</h1>
                </div></div>
        </header>
        <div class="row">
            <div role="main" class="col-md-9 col-md-push-3">
                    
            </div>
            <aside class="col-lg-3"> 
                <!-- ============= COMPONENT ============== -->
                <nav class="sidebar card py-2 mb-4">
                <ul class="nav flex-column" id="nav_accordion">
                  <li class="nav-item has-submenu">
                    <a class="nav-link" href="#"> Instituição <i class="bi small bi-caret-down-fill"></i> </a>
                    <ul class="submenu collapse">
                      <li><a class="nav-link" href="{{route('cadastrocentro')}}">Cadastrar</a></li>
                      <li><a class="nav-link" href="{{route('listarcentrosadm')}}">Listar</a></li>
                    </ul>
                  </li>
                  <li class="nav-item has-submenu">
                    <a class="nav-link" href="#"> Consulta <i class="bi small bi-caret-down-fill"></i> </a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="{{route('agendarconsulta')}}">Agendar consulta</a></li>
                        <li><a class="nav-link" href="{{route('listarconsultasadm')}}">Listar consultas</a></li>
                    </ul>
                  </li>
                  <li class="nav-item has-submenu">
                    <a class="nav-link" href="{{route('plantoes')}}"> Plantões <i class="bi small bi-caret-down-fill"></i> </a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="{{route('agendarplantao')}}">Agendar plantão</a></li>
                        <li><a class="nav-link" href="{{route('listarplantoesadm')}}">Listar plantões</a></li>
                    </ul>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="#"> Menu item </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"> Something </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"> Other link </a>
                  </li> --}}
                </ul>
                </nav>
                <!-- ============= COMPONENT END// ============== -->	
                    </aside>
            {{-- <aside role="complementary" class="col-md-3 col-md-pull-9">
                
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('listarcentrosdesaude')}}"><h2>Centros de Saúde</h2></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('listarconsultas')}}"><h2>Consultas</h2></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('listarmedicos')}}"><h2>Médicos</h2></a>
                    </li>
                  </ul>
                   
            </aside> --}}
        </div>
        <footer class="row">
            
        </footer>
        
    </div>

</body>