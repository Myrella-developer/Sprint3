<?php
require_once 'CarKeysInterface.php';

class CarKeys implements CarKeysInterface {
    public function getCarKeys() {
        return "Claves del coche --> Hecho";
    }
}
?>
