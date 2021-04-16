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
                    
              <div class="row">
                <div class="col-md-12"> 
<h3>Operações:</h3>

                  {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="http://hospitalsaomatheus.com.br/site/wp-content/uploads/2016/10/emergencia.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://img1.migalhas.uol.com.br/gf_base/empresas/MIGA/imagens/FC95AFB1F92D7C35D2EBB119A274F0C96876_hospital.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Seguinte</span>
                    </a>
                  </div> --}}


                </div>
                <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://img2.gratispng.com/20180723/lkz/kisspng-computer-icons-completed-icon-5b568412cf3148.4880052815323965628487.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Consultas</h5>
                      <p class="card-text">Aqui, você poderá ver, alterar e excluir as consultas que já estão cadastradas no sistema.</p>
                      <a href="{{route('listarconsultasadm')}}" class="btn btn-primary">Ir</a>
                    </div>
                  </div>

                  
                </div>
                <div class="col-md-4"> 
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://img2.gratispng.com/20180422/ioq/kisspng-hospital-symbol-computer-icons-medicine-televisions-5adc96c622abf3.161525361524405958142.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Plantões</h5>
                      <p class="card-text">Aqui, você poderá ver, alterar e excluir os plantões já cadastrados no sistema.</p>
                      <a href="{{route('listarplantoesadm')}}" class="btn btn-primary">Ir</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4"> 
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://e7.pngegg.com/pngimages/341/223/png-clipart-physician-hospital-medicine-computer-icons-symbol-symbol-miscellaneous-text.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Médicos</h5>
                      <p class="card-text">Aqui, você poderá ver, alterar e excluir médicos já cadastrados no sistema.</p>
                      <a href="{{route('listarmedicosadm')}}" class="btn btn-primary">Ir</a>
                    </div>
                  </div>
                </div>
            </div>

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
                  <li class="nav-item has-submenu">
                    <a class="nav-link" href="#"> Médicos <i class="bi small bi-caret-down-fill"></i> </a>
                    <ul class="submenu collapse">
                      <li><a class="nav-link" href="{{route('cadastrarmedico')}}">Cadastrar novo médico</a></li>
                      <li><a class="nav-link" href="{{route('listarmedicosadm')}}">Listar médicos</a></li>
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
          <h5>Todos os direitos reservados - Vinicius Santos Goes e Luca Borela - 2021</h5>
        </footer>
        
    </div>

</body>