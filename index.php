<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './config.php';
require_once './mvcBootstrap.php';

$character = CharacterFactory::getCharacter(1);
$character->setLevel(10);
$character->update();
print_r($character);

// $harry = CharacterFactory::newMage("Harry");
// $harry->create();

// $voldemort = CharacterFactory::newMage("Voldemort");
// $voldemort->create();