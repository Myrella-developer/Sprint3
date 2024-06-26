<?php
    require_once 'tigger.php';
    
    $tigger1 = Tigger::getInstance();
    $tigger2 = Tigger::getInstance();
    $tigger3 = Tigger::getInstance();
    $tigger4 = Tigger::getInstance();

    $tigger1->roar();
    $tigger2->roar();
    $tigger3->roar();
    $tigger4->roar();
    $tigger1->roar();

    echo "Roars: " . Tigger::getCounter() . PHP_EOL;
?>
