<?php

    Class Tigger{
        private static $uniqueInstance = null;
        private static $counter = 0;

        private function __construct()
        {
            echo "Building character..." . PHP_EOL;
        }

        public static function getInstance() :Tigger{
            if(self::$uniqueInstance === null){
                self::$uniqueInstance = new Tigger();
            }
            return self::$uniqueInstance;
        }

        public function roar(){
            self::$counter++;
            echo "Grrr!" . PHP_EOL;
        }

        public static function getCounter(){
            return self::$counter;
        }
    }
        $tigger = Tigger::getInstance();

        for($i = 0; $i < 6; $i++){
            $tigger->roar();
        }
        
        $tigger->getCounter();
    
        echo "Roars: " . Tigger::getCounter() . PHP_EOL;

    
?>