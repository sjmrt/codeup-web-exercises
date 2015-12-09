<?php

require_once 'user.php';

$user = new User();

$user->id ='4';
$user->first_name = 'Any';
$user->last_name = 'Juan';
$user->email = 'out@there.com';
$user->phone = '830-666-4200';
$user->street_address_1 = '123 Unreal Rd';
$user->street_address_2 = '#42';
$user->city = 'Fake Town';
$user->state = 'FS';
$user->zip = '33455';

$user->save();
