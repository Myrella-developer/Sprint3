<?php
require_once 'HomeKeysInterface.php';

    Class homeKeys implements homeKeysInterface{
        public function getHomeKeys(){
            return "Llaves de casa --> Hecho.";
        }
    }

?>