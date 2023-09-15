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
    <div class="row">
      <div class="col-sm-12">
         <form action="<?php echo base_url().'/crear' ?>" method="POST">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
          <label for="paterno">Apellido Paterno</label>
          <input type="text" name="paterno" id="paterno" class="form-control">
          <label for="materno">Apellido Materno</label>
          <input type="text" name="materno" id="materno" class="form-control">
          <br>
          <button class="btn btn-primary">CREAR</button>
         </form>
      </div>
    </div>
    <hr>
    <h2>Listado de personas</h2>
    <?php print_r($datos); ?>
    <div class="row">
         <div class="col-sm-12">
            <div class="table table-responsive">
               <table class="table table-hover table-bordered">
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                <?php foreach($datos as $key): ?>
                  <tr>
                    <td><?php echo $key->nombre ?></td>
                    <td><?php echo $key->paterno ?></td>
                    <td><?php echo $key->materno ?></td>
                    <td>
                           <a href="<?php echo base_url().'/obtenerNombre/'.$key->id_nombre ?>" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                           <a href="<?php echo base_url().'/eliminar/'.$key->id_nombre ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
               </table>
            </div>
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    let mensaje = '<?php echo $mensaje ?>';
    if(mensaje == '1'){
       swal(':)','Agregado con exito','success');
    }else if(mensaje == '0'){
      swal(':(','Fallo','error');
    }
    else if(mensaje == '2'){
       swal(':)','Actualizado con exito','success');
    }else if(mensaje == '3'){
      swal(':(','Fallo actualizacion','error');
    }
    else if(mensaje == '4'){
       swal(':)','Eliminado con exito','success');
    }else if(mensaje == '5'){
      swal(':(','Fallo eliminacion','error');
    }
  </script>
</body>

</html>