<?php

require_once 'controllers/test.controller.php';
require_once 'controllers/login.controller.php';




//cargamos la vista principal
$test =  ctrTest :: showViewTest();
$login =  ctrLogin :: login();
