<?php require RUTA_APP . '/vistas/inc/header.php'; ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Numero</th>
            <th>Acciones</th>
        </tr>
    </thead>
     <tbody>
    <?php foreach($datos['usuario'] as $usuario)  :?>
        <tr>
            <td> <?php echo $usuario->id_usuario;?></td>
            <td> <?php echo $usuario->nome;?> </td>
            <td> <?php echo $usuario->email;?></td>
            <td> <?php echo $usuario->numero;?></td>
            <td> 
            <a href="<?php echo RUTA_URL;?>paginas/editar/<?php echo $usuario->id_usuario;?>" class="btn btn-dark" >Editar</a></td>
            <td><a href="<?php echo RUTA_URL;?>paginas/borrar/<?php echo $usuario->id_usuario;?>" class="btn btn-danger" >Deletar</a>
            </td>
        </tr>
         <?php endforeach ;?>
    </tbody>
   

</table>

<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
