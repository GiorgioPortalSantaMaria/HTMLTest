<?php namespace Models;

    abstract class BaseModel{
        
        protected $id;
        protected $con;

        
        public function hola(){
            print(get_class($this) . " dice hola");
        }


        public function __construct()
        {
            $this->con = new Conexion();
        }
                
        public function get($atributo){
            return $this->$atributo;
        }

        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }


    }

?>