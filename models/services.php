<?php
require('vendor/autoload.php');

    //acceder a las variables de entorno
    function loadEnvironmentVariables(){
        $dotenv = Dotenv\Dotenv::createImmutable('./');
        $dotenv -> load();    
    }

    //metodo get para obtener token
    function getToken(){
        define('URL', 'https://develop.datacrm.la/datacrm/pruebatecnica/webservice.php?operation=getchallenge&username=prueba');

        //obtenemos el token
        $resToken = file_get_contents(URL);
        if($resToken){

            //se obtiene el token del string
            $Token = substr($resToken,35,-51);
            //echo 'el token'.$Token;
            //echo $resToken;
        }else{
            echo 'Error al obtener token';
        }
     
        return $Token;
    }

    //obtener apikey
    function getApiKey(){
        loadEnvironmentVariables();
        $apikey = $_ENV['APIKEY'];
        return $apikey;
    }

    //codificamos el token y la apikey
    function md5Encode(){
        $token = getToken();
        $apikey = getApiKey();
        $accessKey = md5($token.$apikey);
       // echo "  -- token: $token  api: $apikey md5: $accessKey";
        
        return $accessKey;
    }

?>