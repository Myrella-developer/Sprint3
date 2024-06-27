<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Wallet.php';
require_once 'HomeKeys.php';
require_once 'CarKeys.php';
require_once 'Smartphone.php';
require_once 'Persona.php';

$wallet = new Wallet();
$homeKeys = new HomeKeys();
$carKeys = new CarKeys();
$smartphone = new Smartphone();

$persona = new Persona($wallet, $homeKeys, null, $smartphone);

$persona->getReadyForTheDay();
?>
