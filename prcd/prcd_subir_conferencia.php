<html>
    <header>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    </header>

<?php
// header("Location: ../tabla.php");


$conferencia = $_POST['nombre_conferencia'];
$conferencista = $_POST['conferencista'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];
$sala = $_POST['sala'];
$estatus = 1;

function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
    
    }   
    
$codigo = generarCodigo(9); // genera un código de 9 caracteres de longitud.

include('conn.php');

$sql2="INSERT INTO conferencia(conferencia,ponente,fecha,descripcion,direccion_sala,codigo,estatus) 
    VALUES('$conferencia','$conferencista','$fecha','$descripcion','$sala','$codigo','$estatus')";
    $resultado2= $conn->query($sql2) or die ('Error en el query database' .mysqli_error($conn));

    echo "<script type=\"text/javascript\">Swal.fire(
        'Registrado',
        'La conferencia se ha registrado correctamente',
        'success'
      ).then(function(){window.location='../tabla.php';});</script>";
?>

</html>