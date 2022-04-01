<?php namespace Models;

use mysqli;

    class Estudiante extends BaseModel{

        protected $nombre;
        protected $edad;
        protected $promedio;
        protected $id_seccion;


        public function listar(){

            $sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion = t2.id";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }

        public function add(){
            $sql = "INSERT INTO estudiantes(id, nombre, edad, promedio, imagen, id_seccion)
                    VALUES (null, '{$this->nombre}, '{$this->edad}', '{$this->promedio}', 
                    '{$this->promedio}', '{$this->imagen}', '{$this->id_seccion}') ";
            $this->con->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM estudiantes WHERE id = '{$this->id}'";
            $this->con->consultaSimple($sql);

        }

        public function edit(){
            $sql = "UPDATE FROM estudiantes SET nombre='{$this->nombre}', edad = '{$this->edad}', promedio = '{$this->promedio}'
            , id_seccion = '{$this->id_seccion}' WHERE id = '{$this->id}'";
            $this->con->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN seccion t2
            ON t1.id_seccion WHERE t1.id = '{$this->id}'";
            $datos = $this->con->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($datos);
            return $row;
        }

    }

?>