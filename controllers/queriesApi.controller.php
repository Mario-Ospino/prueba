<?php
/*
class ctrQueriesApi{
        public  static  function queriesGetConstacts(){
                require_once 'models/queriesApi.php';
                session_start();
                if(!isset($_SESSION['sessionName'])){
                       //no estoy logueado, no tengo variable de session
                        $sessionName = '';
                        $contacts = '';
                    }else{
                         //obtengo variable de session   
                        $sessionName = $_SESSION['sessionName'];
                        $contacts = CurlgetApiContacts($sessionName);
                        //$contacts = CurlgetApiContacts($sessionName);
                    }
                //retorno los datos de contacto;
                echo $contacts;  
        }
}
*/



require('../models/queriesApi.php');
    session_start();
    if(!isset($_SESSION['sessionName'])){
       //no estoy logueado, no tengo variable de session
        $sessionName = '';
        $contacts = '';
    }else{
         //obtengo variable de session   
        $sessionName = $_SESSION['sessionName'];
        $contacts = getfakedata();
    }
    //retorno los datos de contacto;
    echo $contacts;

?>