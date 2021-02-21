<?php
    function getApiContacts($sessionName){    
        define('URLGETCONTACTS',"https://develop.datacrm.la/datacrm/pruebatecnica/webservice.php?operation=query&sessionName=$sessionName&query=select*fromContacts;");
        $dataContacts = file_get_contents(URLGETCONTACTS);
        if($dataContacts){
            echo "$dataContacts";
            return $dataContacts;
        }else{
            echo "error al  obtener contactos";
            return $dataContacts;
        }
    }


    function CurlgetApiContacts($sessionName){

        //definimos algunas variables
        define('URLAPI',"https://develop.datacrm.la/datacrm/pruebatecnica/webservice.php");
        $operation = 'query';
        $query = 'SELECT*FROMContacts;';
        $params = "operation=$operation&sessionName=$sessionName&query=$query";

        //abrimos la sesion cURL
        $conection = curl_init();

        //definimos la URL a la que hacemos la conexion 
        curl_setopt($conection,CURLOPT_URL,URLAPI);

        //indicamos el tipo de peticion POST
        curl_setopt($conection,CURLOPT_POST,TRUE);

        //definimos parametros
        curl_setopt($conection,CURLOPT_POSTFIELDS,$params);

        //guardamos la variable
        curl_setopt($conection,CURLOPT_RETURNTRANSFER, TRUE);
        $remote_server_output = curl_exec($conection);

        //cerramos la sesion
        curl_close($conection);

        return $remote_server_output;
        
    }

    function getfakedata(){
        //datos falsos
        $arrayContactos[]= array(
            'id'=>"2",
            'contact_no'=>"12314141",
            'lastname'=>"Fontecha",
            'createtime'=>"3-23-23"
        );

        return json_encode($arrayContactos);
    }
?>