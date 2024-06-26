<?php

    Class Tigger{
        private static $uniqueInstance = null;
        private static $counter = 0;

        private function __construct()
        {
            echo "Building character..." . PHP_EOL;
        }

        public static function getInstance() {
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
?>