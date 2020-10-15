<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<a href="<?php echo RUTA_URL;?>paginas" class="btn btn-light"><i class="fa fa-backward" ></i> Volver</a>
  <div class="car card-body bg-light mt-5">
    <h2>Borrar Usuario</h2>
     <form action="<?php echo RUTA_URL;?>paginas/borrar/<?php echo $datos['id_usuario'] ;?>" method="POST">
         <div class="form-group">
          <label for="nome">Nome: <sup>*</sup> </label>
          <input type="text" name="nome" class="form-control fomr-control-lg" value="<?php echo $datos['nome'];?>">
         </div>

         <div class="form-group">
          <label for="email">Email: <sup>*</sup> </label>
          <input type="email" name="email" class="form-control fomr-control-lg" value="<?php echo $datos['email'];?>">
         </div>

         <div class="form-group">
          <label for="numero">Numero: <sup>*</sup> </label>
          <input type="text" name="numero" class="form-control fomr-control-lg" value="<?php echo $datos['numero'];?>">
         </div>

         <input type="submit" class="btn btn-danger" value="borrar">

        </form>   
  </div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
