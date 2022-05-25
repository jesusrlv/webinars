<!DOCTYPE html>
<html lang="es">
<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>INJUVENTUD</title>
  <link rel="shortcut icon" href="img/mini_logo_cigo.ico" />
  
  <!-- <meta charset="UTF-8"> -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/form-validation.css">
  <script src="css/form-validation.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>


  <link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

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
    <link href="form-validation.css" rel="stylesheet">
</header>

<body class="bg-light">

<?php
 $id=$_REQUEST['id'];

 include("prcd/conn.php");
        $query="SELECT * FROM conferencia WHERE id_conf='$id'";
        $resultado = $conn->query($query);
        $row=$resultado->fetch_assoc();
?>
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="img/TrabajemosJuntosJuventud.png" alt="" width="81" height="81">
    <h2>Registro conferencias</h2>
    <p class="lead">Sección para registrar conferencias de prevención</p>
  </div>

  <div class="row">
     
    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">Datos generales</h4>
      <form class="needs-validation" action="prcd/prcd_modificar_conferencia.php" method="POST">
        <div class="row">

        <div class="col-md-6 mb-3">
          <label for="address">Clave conferencia</label>
          <input type="text" class="form-control" id="clave" placeholder="" value="<?php echo $row['codigo']?>" READONLY>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="col-md-6 mb-3">
          <label for="address">Id</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="" value="<?php echo $row['id_conf']?>" READONLY>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>


        <div class="col-md-12 mb-3">
          <label for="address">Nombre de la conferencia</label>
          <input type="text" class="form-control" id="nombre_conferencia" name="nombre_conferencia" placeholder="" value="<?php echo $row['conferencia']?>" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>


          <div class="col-md-12 mb-3">
            <label for="firstName">Nombre de conferencista</label>
            <input type="text" class="form-control" id="conferencista" name="conferencista" placeholder="" value="<?php echo $row['ponente']?>" required>
            <div class="invalid-feedback">
              Validar.
            </div>
          </div>
          
        </div>

        <div class="mb-3">
          <label for="email">Fecha</label>
          <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $row['fecha']?>">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Descripción</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $row['descripcion']?>">
        </div>

        <div class="mb-3">
          <label for="address2">Sala</label>
          <input type="text" class="form-control" id="sala" name="sala" placeholder="Descripción de la conferencia" value="<?php echo $row['direccion_sala']?>">
        </div>

        <div class="mb-3">
          <label for="address2">Estatus conferencia</label>
          <input type="text" class="form-control" id="estatus" name="estatus" value="<?php echo $row['estatus']?>">
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
          <span class="badge badge-success">Activo</span>
          </label>
        </div>
        
        <div class="form-check">
          <input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
          <span class="badge badge-danger">Inactivo</span>
          </label>
        </div>
        
      </div>



        <hr class="mb-4">
        <button class="btn btn-primary btn-lg " type="submit">Registrar conferencia</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020 | INJUVENTUD</p>
    <!-- <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul> -->
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
        <script src="form-validation.js"></script></body>

</html>
