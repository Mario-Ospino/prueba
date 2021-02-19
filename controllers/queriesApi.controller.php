<?php

class ctrQueriesApi{
        public static  function queriesGetConstacts($s){
                require('models/queriesApi.php');
                $sessionName = $s;
                //echo "sessionName $sessionName";
                //aqui obtenemos los datos
                $data = getApiContacts($sessionName);
                return $data;
        }
}



?>