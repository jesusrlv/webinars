<html>
    <header>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    </header>
<!-- <script>

Swal.fire({
  title: '¿Estás seguro de borrar?',
  text: "Se borrará la conferencia",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, borrar'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Borrado',
      'Conferencia eliminada',
      'success'
    )
  }
})
</script> -->

<?php
    header("Location: ../tabla.php");
    include("conn.php");
	
        $id=$_REQUEST['id'];

        $sql= "DELETE FROM conferencia WHERE id_conf='$id'";
        $resultado= $conn->query($sql);


?>

</html>