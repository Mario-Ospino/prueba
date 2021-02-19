<?php

    function getApiContacts($sessionName){

        define('URLGETCONTACTS',"https://develop.datacrm.la/datacrm/pruebatecnica/webservice.php?operation=query&sessionName=$sessionName&query=select*fromContacts;");
        //echo URLGETCONTACTS;
        $dataContacts = file_get_contents(URLGETCONTACTS);
        echo "datos de contactos $dataContacts";
        return "AQUI VAN LOS DATOS";

    }





?>