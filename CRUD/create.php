<?php

require_once __DIR__.'/../vendor/autoload.php';

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = 'Savalo';
$user->last_name = 'Horse';
$user->genre = 'M';
$user->save();

$addr = new Address();
$addr->add($user,"Rua 11 de Agosto","1500");
$addr->save();

var_dump($user);
var_dump($addr);