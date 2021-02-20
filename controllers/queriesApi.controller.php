<?php

class ctrQueriesApi{
        public  static  function queriesGetConstacts(){
                require_once 'models/queriesApi.php';
                if(!isset($_SESSION['sessionName'])){
                       //no estoy logueado, no tengo variable de session
                        $sessionName = '';
                        $contacts = '';
                    }else{
                         //obtengo variable de session   
                        $sessionName = $_SESSION['sessionName'];
                        $contacts = getApiContacts($sessionName);
                    }
                //retorno los datos de contacto;
                echo $contacts;  
        }
}

/*
require_once './models/queriesApi.php';
if(!isset($_SESSION['sessionName'])){
       //no estoy logueado, no tengo variable de session
        $sessionName = '';
        $contacts = '';
    }else{
         //obtengo variable de session   
        $sessionName = $_SESSION['sessionName'];
        $contacts = getApiContacts($sessionName);
    }
//retorno los datos de contacto;
echo $contacts;
*/
?>