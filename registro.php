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
    <h1><?php echo $row['conferencia'] ?></h1>
    <h2>Registro general</h2>
    <p class="lead">Datos de asistencia</p>
  </div>

  <div class="row">
     
    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">Datos generales</h4>
      
      
      <form class="needs-validation form-group" action="prcd/prcd_registro_usr.php" method="POST">
        
        <div class="row">

        <div class="col-md-6 mb-3" HIDDEN>
          <label for="address">Clave conferencia</label>
          <input type="text" class="form-control" id="clave" placeholder="" value="<?php echo $row['codigo']?>" READONLY>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="col-md-6 mb-3" HIDDEN>
          <label for="address">Id</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="" value="<?php echo $row['id_conf']?>" READONLY>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="col-md-12 mb-3">
            <label for="firstName"><i class="fas fa-calendar-day"></i> Fecha de registro</label>
            <input name="fechahora" type="datetime" class="form-control" id="fechahora" placeholder="" value="<?php echo date("Y/m/d");?>" readonly>
            <div class="invalid-feedback">
              Validar.
            </div>
          </div>


          <div class="col-md-6 mb-3">
            <label for="firstName"><i class="fas fa-id-card"></i> Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Datos generales del asistente" value="" required>
            <div class="invalid-feedback">
              Validar.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="firstName"><i class="fas fa-id-card"></i> Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Datos generales del asistente" value="" required>
            <div class="invalid-feedback">
              Validar.
            </div>
          </div>
          
          <div class="col-md-6 mb-3">
          <label for="address2"><i class="fas fa-id-card"></i> RFC</label>
          <input type="text" class="form-control" id="rfc" name="rfc" placeholder="Datos generales del asistente" value="" required>
        </div>

        <div class="col-md-6 mb-3">
          <label for="address2"><i class="fas fa-id-card"></i> CURP</label>
          <input type="text" class="form-control" id="curp" name="curp" placeholder="Datos generales del asistente" value="" required>
        </div>            

        <div class="col-md-4 mb-3">
          <label for="address2"><i class="fas fa-id-card"></i> Edad</label>
          <input type="text" class="form-control" id="edad" name="edad" placeholder="Datos generales del asistente" value="" required>
        </div> 

        <div class="col-md-8 mb-3">
          <label for="address2"><i class="fas fa-envelope-open-text"></i> Correo electrónico</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Correo electrónico" value="" required>
        </div>           

        </div>

       
        <button class="btn btn-primary btn-lg " type="submit"><i class="fas fa-save"></i> Inscibirse a conferencia</button>
      </div>



        <hr class="mb-4">
        
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020 | INJUVENTUD</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="http://juventud.zacatecas.gob.mx" target="_blank">Página principal</a></li>
      <!-- <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li> -->
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
        <script src="form-validation.js"></script></body>

</html>
