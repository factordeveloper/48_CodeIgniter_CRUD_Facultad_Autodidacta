<?php

$idNombre =$datos[0]['id_nombre'];
$nombre =$datos[0]['nombre'];
$paterno =$datos[0]['paterno'];
$materno =$datos[0]['materno'];

?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
 
  
  
<div class="container">
    <h1>CRUD CODEIGNITER 4</h1>
    <?php print_r($datos); ?>
    <div class="row">
      <div class="col-sm-12">
         <form action="<?php echo base_url().'/actualizar' ?>" method="POST">
         <input type="text" id="idNombre" name="idNombre" hidden value="<?php echo $idNombre ?>">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ?>">
          <label for="paterno">Apellido Paterno</label>
          <input type="text" name="paterno" id="paterno" class="form-control" value="<?php echo $paterno ?>">
          <label for="materno">Apellido Materno</label>
          <input type="text" name="materno" id="materno" class="form-control" value="<?php echo $materno ?>">
          <br>
          <button class="btn btn-warning">Actualizar</button>
         </form>
      </div>
    </div>
  </div>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
 
</body>

</html>