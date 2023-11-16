<?php 

namespace Model;

use Model\ConexionModel;

class BiblioModel{


    // ********** ------ CRUD CATEGORIAS -------- ************

    public static function guardarCategoria($datos){
        try{
        $stmt = ConexionModel::conectar()->prepare("INSERT INTO ubicacionlibros (estante, seccion) VALUES (:est, :sec)");
        $stmt->bindParam(":est", $datos['estante'], \PDO::PARAM_STR);
        $stmt->bindParam(":sec", $datos['seccion'], \PDO::PARAM_STR);
        return $stmt->execute() ? true : false;
        }catch( \Throwable $th ){
            return false;
        }
    }

    public static function mostrarCategoria(){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM ubicacionlibros");
        $stmt->execute();
        return $stmt->fetchAll();
        }

        public static function editarCategoria($idCategoria){
            $stmt = ConexionModel::conectar()->prepare("SELECT * FROM ubicacionlibros where id = :id");
            $stmt->bindParam(':id',$idCategoria,\PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();//1 reg. Fetch
        }
    
        public static function actualizarCategoria($datos){
            $stmt = ConexionModel::conectar()->prepare("UPDATE ubicacionlibros SET estante = :est, seccion = :sec where id = :id");
            $stmt->bindParam(':est',$datos['estante'],\PDO::PARAM_STR);
            $stmt->bindParam(":sec", $datos['seccion'], \PDO::PARAM_STR);
            $stmt->bindParam(':id',$datos['id'],\PDO::PARAM_INT);
            return $stmt->execute() ? true : false;
        }

        public static function borrarCategoria($idCategoria){
            $stmt = ConexionModel::conectar()->prepare("SELECT * FROM ubicacionlibros where id = :id");
            $stmt->bindParam(':id',$idCategoria,\PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();//1 reg. Fetch
        }
    
        public static function borrarConfirmadoProducto($id){  // REVISAR **********
            $stmt = ConexionModel::conectar()->prepare("DELETE FROM ubicacionlibros where id = :id");
            $stmt->bindParam(':id',$id,\PDO::PARAM_STR);
            return $stmt->execute() ? true : false;
        }


        // ********** ------ CRUD AUTORES -------- ************

        public static function guardarAutor($datos){
            try{
            $stmt = ConexionModel::conectar()->prepare("INSERT INTO autores (nombre, apellido) VALUES (:nom, :ape)");
            $stmt->bindParam(":nom", $datos['nombre'], \PDO::PARAM_STR);
            $stmt->bindParam(":ape", $datos['apellido'], \PDO::PARAM_STR);
            return $stmt->execute() ? true : false;
            }catch( \Throwable $th ){
                return false;
            }
        }
    
        public static function mostrarAutor(){
            $stmt = ConexionModel::conectar()->prepare("SELECT * FROM autores");
            $stmt->execute();
            return $stmt->fetchAll();
            }
    
            public static function editarAutor($idAutor){
                $stmt = ConexionModel::conectar()->prepare("SELECT * FROM autores where id = :id");
                $stmt->bindParam(':id',$idAutor,\PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch();//1 reg. Fetch
            }
        
            public static function actualizarAutor($datos){
                $stmt = ConexionModel::conectar()->prepare("UPDATE autores SET nombre = :nom, apellido = :ape where id = :id");
                $stmt->bindParam(':nom',$datos['nombre'],\PDO::PARAM_STR);
                $stmt->bindParam(":ape", $datos['apellido'], \PDO::PARAM_STR);
                $stmt->bindParam(':id',$datos['id'],\PDO::PARAM_INT);
                return $stmt->execute() ? true : false;
            }
    
            public static function borrarAutor($idAutor){
                $stmt = ConexionModel::conectar()->prepare("SELECT * FROM autores where id = :id");
                $stmt->bindParam(':id',$idAutor,\PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch();//1 reg. Fetch
            }
        
            public static function borrarConfirmadoAutor($id){
                $stmt = ConexionModel::conectar()->prepare("DELETE FROM autores where id = :id");
                $stmt->bindParam(':id',$id,\PDO::PARAM_STR);
                return $stmt->execute() ? true : false;
            }

            // *********** ------- CRUD  LIBROS ---------- *****

            public static function mostrarLibro(){
                $stmt = ConexionModel::conectar()->prepare("SELECT libro.libro_id, libro.titulo, genero.nombre as genero, editorial.nombre as editorial, autor.nombres as autor
                FROM libro
                LEFT JOIN genero ON libro.genero_id = genero.genero_id
                LEFT JOIN editorial ON libro.editorial_id = editorial.editorial_id
                LEFT JOIN autor ON libro.autor_id = autor.autor_id");
                
                $stmt->execute();
                return $stmt->fetchAll();
                }

            // *********** ------- CRUD  PRESTAMOS LIBROS ---------- *****
            public static function mostrarPrestamo(){
                $stmt = ConexionModel::conectar()->prepare("SELECT prestamo.prestamo_id, libro.titulo, persona.nombres as persona, prestamo.fecha_prestamo, prestamo.fecha_devolucion
                FROM prestamo
                INNER JOIN libro ON prestamo.libro_id = libro.libro_id
                INNER JOIN persona ON prestamo.persona_id = persona.persona_id");
                
                $stmt->execute();
                return $stmt->fetchAll();
                }  
        /*
                public static function editarAutor($idAutor){
                    $stmt = ConexionModel::conectar()->prepare("SELECT * FROM autores where id = :id");
                    $stmt->bindParam(':id',$idAutor,\PDO::PARAM_INT);
                    $stmt->execute();
                    return $stmt->fetch();//1 reg. Fetch
                }
            
                public static function actualizarAutor($datos){
                    $stmt = ConexionModel::conectar()->prepare("UPDATE autores SET nombre = :nom, apellido = :ape where id = :id");
                    $stmt->bindParam(':nom',$datos['nombre'],\PDO::PARAM_STR);
                    $stmt->bindParam(":ape", $datos['apellido'], \PDO::PARAM_STR);
                    $stmt->bindParam(':id',$datos['id'],\PDO::PARAM_INT);
                    return $stmt->execute() ? true : false;
                }
        
                public static function borrarAutor($idAutor){
                    $stmt = ConexionModel::conectar()->prepare("SELECT * FROM autores where id = :id");
                    $stmt->bindParam(':id',$idAutor,\PDO::PARAM_INT);
                    $stmt->execute();
                    return $stmt->fetch();//1 reg. Fetch
                }
            
                public static function borrarConfirmadoAutor($id){
                    $stmt = ConexionModel::conectar()->prepare("DELETE FROM autores where id = :id");
                    $stmt->bindParam(':id',$id,\PDO::PARAM_STR);
                    return $stmt->execute() ? true : false;
                }
    
*/



}

?>