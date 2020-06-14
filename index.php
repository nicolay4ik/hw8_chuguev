<?php

require_once 'vendor/autoload.php';

use App\Model\User;
use App\Model\Address;


$user = User::find(5);
$user = new User();

$user->create([
    'email' => 'Maskyrob@mail.ru',
    'name' => 'Vlad',
]);

$user->update([
    'id' => 1,
    'name' => 'Alex',
    'email' => 'Alexxxxx@gmail.com'
]);



$address = new Address();

$address->create([
    'city' => 'Belgorod_Dnestrovsk',
    'street' => 'Pobeda7',
]);
