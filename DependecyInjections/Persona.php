<?php
require_once 'Wallet.php';
require_once 'HomeKeys.php';
require_once 'CarKeys.php';
require_once 'Smartphone.php';

class Persona {
    private $wallet;
    private $homeKeys;
    private $carKeys;
    private $smartphone;

    public function __construct(
        Wallet $wallet,
        HomeKeys $homeKeys,
        CarKeys $carKeys = null,
        Smartphone $smartphone
    ) {
        $this->wallet = $wallet;
        $this->homeKeys = $homeKeys;
        $this->carKeys = $carKeys;
        $this->smartphone = $smartphone;
    }

    public function getReadyForTheDay() {

        echo "GET READY FOR TODAY:<br>";
        if ($this->wallet !== null) {
            echo $this->wallet->getWallet() . PHP_EOL;
        } else {
            echo "!No llevas la Cartera¡<br>";
        }
    
        if ($this->homeKeys !== null) {
            echo $this->homeKeys->getHomeKeys() . PHP_EOL;
        } else {
            echo "!No llevas las Llaves de la Casa¡<br>";
        }
    
        if ($this->carKeys !== null) {
            echo $this->carKeys->getCarKeys() . PHP_EOL;
        } else {
            echo "!No llevas las Llaves del Coche¡<br>";
        }
    
        if ($this->smartphone !== null) {
            echo $this->smartphone->getSmartphone() . PHP_EOL;
        } else {
            echo "!No llevas el Teléfono¡<br>";
        }
    }
    
}
?>
