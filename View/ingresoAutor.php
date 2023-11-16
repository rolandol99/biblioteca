<?php

    use Controller\BiblioController;
    $autores = new BiblioController();

?>
<link rel="stylesheet" href="View/miestilo.css"> 
<h1>INGRESO AUTORES</h1>

<div class="container">

    <form method="POST">


        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Nombres</label></div>
                <div class="col-10"><input class="form-control" type="text" name="nombre" required></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-2"><label>Apellidos</label></div>
                <div class="col-10"><input type="text" class="form-control" name="apellido" required></input></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mt-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

            <div class="row mt-1">
                <!-- Botón de Cancelar -->
            <a href="index.php?action=ingreso" class="btn btn-secondary">Nuevo Ingreso</a>
            </div>

        </div>
    </form>



        <?php
        $resultado = $autores->ingresoAut();
            if($resultado == "guardado"){
                echo "<div class='alert alert-success mt-5' role='alert'>
                        Ingresado satisfactoriamente
                     </div>";
            }elseif($resultado == "error"){
                echo "<div class='alert alert-danger mt-5' role='alert'>
                        Error Guardardao
                     </div>";
            }
        ?>

</div>