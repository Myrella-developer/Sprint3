<?php
require_once 'SmartphoneInterface.php';

class Smartphone implements SmartphoneInterface {
    public function getSmartphone() {
        return "Smartphone --> Hecho";
    }
}
?>