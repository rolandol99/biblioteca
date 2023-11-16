<?php

namespace Model;

class EnlacesModel{

    public static function enlacesPagina($enlace){
        $modulo = match($enlace){
            "inicio" => "View/inicio.php",
            "contacto" => "View/contacto.php",
            "nosotros" => "View/nosotros.php",
            "ingresos" => "View/ingresos.php",
            "listarIngresos" => "View/listarIngresos.php",
            "editarCategoria" => "View/editarCategoria.php",
            "eliminarCategoria" => "View/eliminarCategoria.php",
            "ingresoAutor" => "View/ingresoAutor.php",
            "verAutor" => "View/mostrarAutor.php",
            "editarAutor" => "View/editarAutor.php",
            "eliminarAutor" => "View/eliminarAutor.php",
            "ingresoLibro" => "View/ingresoLibro.php",
            "mostrarLibro" => "View/mostrarLibro.php",
            "ingresoPrestamo" => "View/prestamos.php",
            "mostrarPrestamo" => "View/mostrarPrestamo.php",
            default => "View/error.php"
        };
        return $modulo;
    }

}

?>