<?php 

namespace Controller;

use Model\BiblioModel;

class BiblioController{

    
/*
    // -- CRUD CATEGORIA --

    public function ingresoCate(){
        if( !empty($_POST['estante']) && !empty($_POST['seccion'])){
            $datos = array(
                "estante" => $_POST['estante'],
                "seccion" => $_POST['seccion'],                
            );
            $respuesta = BiblioModel::guardarCategoria($datos);
            
            return $respuesta ? "guardado" : "error";
            

        }
    }

    public function mostrarCate(){
        $categoria = BiblioModel::mostrarCategoria();
        return $categoria; // se va a la vista
    }
    public function editarCate(){
        $idCategoria = $_GET['idCategoria'];
        $biblio = BiblioModel::editarCategoria($idCategoria);
        return $biblio;
    }

    public function actualizarCate(){
        if( !empty($_POST['estante']) && !empty($_POST['seccion'])){
            $datos = array(
                "id" => $_POST['idCategoria'],
                "estante" => $_POST['estante'],
                "seccion" => $_POST['seccion']
            );
            //Enviando los datos al modelo, para que se actualice el registro.
            $respuesta = BiblioModel::actualizarCategoria($datos);

            if($respuesta){ header("Location: index.php?action=veringreso"); }
        }
    }

    public function borrarCate(){
        if( !empty($_GET['idCategoria'])){
            $inscripcion = BiblioModel::borrarCategoria($_GET['idCategoria']);
            return $inscripcion;
        }
    }

    public function confirmarBorrarCate(){
        if( !empty($_POST['idCategoria'])){
            $inscripcion = BiblioModel::borrarConfirmadoProducto($_POST['idCategoria']);
            if($inscripcion){ header("Location: index.php?action=veringreso"); }
        }
        
    }
    
    // ********* -- CRUD AUTORES -- *****************

    public function ingresoAut(){
        if( !empty($_POST['nombre']) && !empty($_POST['apellido'])){
            $datos = array(
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],                
            );
            $respuesta = BiblioModel::guardarAutor($datos);
            
            return $respuesta ? "guardado" : "error";
            

        }
    }

    public function mostrarAut(){
        $autores = BiblioModel::mostrarAutor();
        return $autores; // se va a la vista
    }

    public function editarAut(){
        $idAutor = $_GET['idAutor'];
        $biblio = BiblioModel::editarAutor($idAutor);
        return $biblio;
    }

    public function actualizarAut(){
        if( !empty($_POST['nombre']) && !empty($_POST['apellido'])){
            $datos = array(
                "id" => $_POST['idAutor'],
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido']
            );
            //Enviando los datos al modelo, para que se actualice el registro.
            $respuesta = BiblioModel::actualizarAutor($datos);

            if($respuesta){ header("Location: index.php?action=verAutor"); }
        }
    }

    public function borrarAut(){
        if( !empty($_GET['idAutor'])){
            $inscripcion = BiblioModel::borrarAutor($_GET['idAutor']);
            return $inscripcion;
        }
    }

    public function confirmarBorrarAut(){
        if( !empty($_POST['idAutor'])){
            $inscripcion = BiblioModel::borrarConfirmadoAutor($_POST['idAutor']);
            if($inscripcion){ header("Location: index.php?action=veringreso"); }
        }
        
    }

    // ********* -- CRUD USUARIOS -- *****************

    // ********* -- CRUD LIBROS -- *****************

    public function ingresoLib(){
        if( !empty($_POST['titulo']) && !empty($_POST['isbn']) && !empty($_POST['publicacion'])

        && !empty($_POST['autor']) && !empty($_POST['ubicacion']) && !empty($_POST['disponible'])

        && !empty($_POST['numlibro']) && !empty($_POST['editorial']) && !empty($_POST['estado'])

        && !empty($_POST['especialidad']) && !empty($_POST['fechaingreso']) 
        
        && !empty($_POST['fkautores']) && !empty($_POST['fkubicacion']) ){

            $datos = array(
                "titulo" => $_POST['titulo'],
                "apellido" => $_POST['apellido'],                
            );
            $respuesta = BiblioModel::guardarLibro($datos);
            
            return $respuesta ? "guardado" : "error";
            

        }
    }
*/
    public function mostrarLib(){
        $libros = BiblioModel::mostrarLibro();
        return $libros; // se va a la vista
    }

    // *********** -------- PRESTAMOS -------- *********

    public function mostrarPresta(){
        $prestamo = BiblioModel::mostrarPrestamo();
        return $prestamo; // se va a la vista
    }

  /*  public function editarLib(){
        $idAutor = $_GET['idAutor'];
        $biblio = BiblioModel::editarLibro($idAutor);
        return $biblio;
    }

    public function actualizarLib(){
        if( !empty($_POST['nombre']) && !empty($_POST['apellido'])){
            $datos = array(
                "id" => $_POST['idAutor'],
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido']
            );
            //Enviando los datos al modelo, para que se actualice el registro.
            $respuesta = BiblioModel::actualizarLibro($datos);

            if($respuesta){ header("Location: index.php?action=verAutor"); }
        }
    }

    public function borrarLib(){
        if( !empty($_GET['idAutor'])){
            $inscripcion = BiblioModel::borrarLibro($_GET['idAutor']);
            return $inscripcion;
        }
    }

    public function confirmarBorrarLib(){
        if( !empty($_POST['idAutor'])){
            $inscripcion = BiblioModel::borrarConfirmadoLibro($_POST['idAutor']);
            if($inscripcion){ header("Location: index.php?action=veringreso"); }
        }
        
    }
*/

}

?>