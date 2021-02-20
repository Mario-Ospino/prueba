<?php
    function getApiContacts($sessionName){
        //datos falsos
        $arrayContactos= array(
                    'id'=>"2",
                    'contact_no'=>"12314141",
                    'lastname'=>"Fontecha",
                    'createtime'=>"3-23-23"
        );
        
        define('URLGETCONTACTS',"https://develop.datacrm.la/datacrm/pruebatecnica/webservice.php?operation=query&sessionName=$sessionName&query=select*fromContacts;");
        $dataContacts = file_get_contents(URLGETCONTACTS);
        if($dataContacts){
            $dataContacts = json_encode($arrayContactos);
            echo $dataContacts;
            return $dataContacts;
        }else{
            echo "error al  obtener contactos";
            return $dataContacts;
        }
    }
?>