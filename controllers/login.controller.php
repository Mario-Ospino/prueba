<?php
class ctrLogin{
    static function login(){
        require('models/login.php');
        require('queriesApi.controller.php');

        $respLogin = loginApp();
        //echo "datos--$respLogin--";
        $sessionName = $respLogin;
        //echo "---$sessionName---";

        ctrQueriesApi :: queriesGetConstacts($sessionName);
    }
}