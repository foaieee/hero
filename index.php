<?php

require_once("vendor/autoload.php");

use Core\CoreGame;
use Core\Orderus;
use Core\WildBeast;

$ordeus= new Orderus();
$wild_beast= new WildBeast();
$game=new CoreGame($ordeus,$wild_beast);
$game->presentCharacters();
$game->startGame();
