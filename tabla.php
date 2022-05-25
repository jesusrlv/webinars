<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Tabla de conferencias</title>

    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/offcanvas/">


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0" href="#">INJUVENTUD | Prevención</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard <span class="sr-only">(current)</span></a>
      </li>

      <li>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus-circle"></i> Agregar conferencia
        </button>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-clipboard-list"></i> Listado</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-edit"></i> Modificar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="far fa-trash-alt"></i> Eliminar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Salir</a>
      </li> -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<!-- <div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#">Dashboard</a>
    <a class="nav-link" href="#">
      Friends
      <span class="badge badge-pill bg-light align-text-bottom">27</span>
    </a>
    <a class="nav-link" href="#">Explore</a>
    <a class="nav-link" href="#">Suggestions</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
  </nav>
</div> -->

<main role="main" class="container">
<p>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar conferencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- ... -->
        <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="img/TrabajemosJuntosJuventud.png" alt="" width="81" height="81">
    <h2>Registro conferencias</h2>
    <p class="lead">Sección para registrar conferencias de prevención</p>
  </div>

  <div class="row">
     
    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">Datos generales</h4>
      
      <form class="needs-validation" action="prcd/prcd_subir_conferencia.php" method="POST">
        <div class="row">

        <div class="col-md-12 mb-3">
          <label for="address">Nombre de la conferencia</label>
          <input type="text" class="form-control" id="nombre_conferencia" name="nombre_conferencia" placeholder="Conferencia" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>


          <div class="col-md-12 mb-3">
            <label for="firstName">Nombre de conferencista</label>
            <input type="text" class="form-control" id="conferencista" name="conferencista" placeholder="" value="" required>
            <div class="invalid-feedback">
              Validar.
            </div>
          </div>
          
        </div>

        <div class="mb-3">
          <label for="email">Fecha</label>
          <input type="date" class="form-control" id="fecha" name="fecha">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Descripción</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción de la conferencia">
        </div>

        <div class="mb-3">
          <label for="address2">Sala</label>
          <input type="text" class="form-control" id="sala" name="sala" placeholder="Descripción de la conferencia">
        </div>

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg " type="submit">Registrar conferencia</button>
      </form>
    </div>
    </div>
        <!-- ... -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</p>

  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-warning rounded shadow-sm">
    <img class="mr-3 img-thumbnail" src="img/TrabajemosJuntosJuventud.png" alt="" width="48" height="48">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">Listado de conferencias</h6>
      <small>2020</small>
      
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Agregadas recientemente</h6>
   
    <?php 
        include("prcd/conn.php");
        $query="SELECT * FROM conferencia ORDER BY fecha ASC";
        $resultado = $conn->query($query);
        while($row=$resultado->fetch_assoc()){
          // echo'<h6 class="border-bottom border-gray pb-2 mb-0">Mes: '.'</h6>';
          echo'<div class="media text-muted pt-3">';
          echo '<svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>';
          echo '<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">';
          echo '<strong class="d-block text-gray-dark">'.$row['conferencia'].'</strong>';
          echo '<br>';
          echo 'Descripción: '.$row['descripcion'];
          echo '<br>Fecha: '.$row['fecha'];
          echo '<br>Sala: <a href="'.$row['direccion_sala'].'" target="_blank" class="badge badge-warning">Ingresar</a>';
          echo '<br>';
          echo '<br>';
          echo '<a class="" href="#"><i class="fas fa-clipboard-list"></i> Listado</a> | <a class="" href="modificar_conferencia.php?id='.$row['id_conf'].'"><i class="fas fa-edit"></i> Modificar</a> | <a class="" id="eliminar" onclick="" href="prcd/prcd_eliminar_conferencia.php?id='.$row['id_conf'].'" ><i class="far fa-trash-alt"></i> Eliminar</a>';
          // echo '<a class="" href="#"><i class="fas fa-clipboard-list"></i> Listado</a> | <a class="" href="modificar_conferencia.php?id='.$row['id_conf'].'"><i class="fas fa-edit"></i> Modificar</a> | <button class="btn btn-danger btn-sm" onclick="myFunction()"><i class="fa fa-trash"></i> Eliminar</button>';
          
          echo '</p>';

          // $count = 
          // echo '<p><b>Inscritos: </b>XXX </p>';
          // echo "<a href='' onclick='if (confirm('Are you sure want to delete this item?')) {
          
          //   window.location.href='prcd/prcd_eliminar_conferencia.php?id=".$row['id_conf']."
          //  }
          //  else{
          //    event.preventDefault();
          //  }
          //  '>
          // <i class='fa fa-trash'></i>
          // </a>";
          
          echo '</div>';

        }
    ?>

<!-- pendiente -->
<!-- <button class="btn btn-danger btn-sm" onclick="myFunction()"><i class="fa fa-trash"></i> Eliminar</button> -->


<!-- <script>
function myFunction() {
  // location.replace("https://www.w3schools.com")
  if (confirm('¿Eliminar conferencia?')) {
          
          window.location.href='index.html'
         }else{
           event.preventDefault();
         }

}
</script>        


<a href="#" onclick="if (confirm('Are you sure want to delete this item?')) {
          
          window.location.href='index.html'
         }else{
           event.preventDefault();
         }">
  <i class="fa fa-trash"></i>
</a> -->
<!-- pendiente -->

  </div>
</main>


<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020 | INJUVENTUD</p>
    <!-- <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul> -->
  </footer>


      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
      <script src="css/offcanvas.js"></script>
      
      
      
      </body>
</html>
