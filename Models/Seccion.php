<?php namespace Models;


    class Seccion extends BaseModel{

        private $nombre;

        public function listar(){
            $sql = "SELECT * FROM seccion";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }

        public function add(){
            $sql = "INSERT INTO seccion (id, nombre) VALUES (null, '{$this->nombre}')";
            $this->con->consultaSimple($sql);

        }

        public function delete(){
            $sql = "DELETE FROM seccion WHERE id = '{$this->id}'";
            $this->con->consultaSimple($sql);
        }

        public function edit(){
            $sql = "UPDATE FROM seccion SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
            $this->con->consultaSimple($sql);

        }

        public function view(){
            $sql = "SELECT FROM seccion WHERE id = '{$this->id}'";
            $datos = $this->con->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($datos);
            return $row;
        }
        
    }

?>