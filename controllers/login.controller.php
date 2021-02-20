<?php
class ctrLogin{
 
    public static function login(){
        require 'models/login.php';

            $respLogin = loginApp();
            //iniciamos sesion
            session_start();
            $_SESSION['sessionName'] = "$respLogin";
            if(!isset($_SESSION['sessionName'])){
                echo 'no se pudo iniciar session';
            }
       } 
    }
    ?>