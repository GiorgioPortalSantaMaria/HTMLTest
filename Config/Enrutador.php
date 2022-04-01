<?php namespace Config;

    class Enrutador{

        public static function run(Request $request){
            $controlador = $request->getControlador();
            $ruta = ROOT . "Controllers" . DS . $controlador. ".php";
            $metodo = $request->getMetodo();
            $argumento = $request->getArgumento();
            if(is_readable($ruta)){
                require_once $ruta;
                $mostrar = "Controllers\\" . $controlador;
                $controlador = new $controlador;
                if(!isset($metodo))
                {
                    call_user_func(array($controlador, $metodo));
                } else 
                {
                    call_user_func_array(array($controlador, $metodo), $argumento);
                }

            }


        }
    }

?>