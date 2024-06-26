<?php
require_once 'WalletInterface.php';
require_once 'HomeKeysInterface.php';
require_once 'CarKeysInterface.php';
require_once 'SmartphoneInterface.php';

class Persona {
    private $wallet;
    private $homeKeys;
    private $carKeys;
    private $smartphone;

    public function __construct(
        WalletInterface $wallet,
        HomeKeysInterface $homeKeys,
        CarKeysInterface $carKeys = null,
        SmartphoneInterface $smartphone
    ) {
        $this->wallet = $wallet;
        $this->homeKeys = $homeKeys;
        $this->carKeys = $carKeys;
        $this->smartphone = $smartphone;
    }

    public function getReadyForTheDay() {
        echo $this->wallet->getWallet() . PHP_EOL;
        echo $this->homeKeys->getHomeKeys() . PHP_EOL;
        if ($this->carKeys !== null) {
            echo $this->carKeys->getCarKeys() . PHP_EOL;
        }
        echo $this->smartphone->getSmartphone() . PHP_EOL;
    }
    
}
?>