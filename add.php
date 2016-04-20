<?php

require 'classes/User.php';

$name = $_POST['name'];
$bio = $_POST['bio'];
$password = $_POST['password'];


$user = new User();

$user->setName( $name );
$user->setBio( $bio );
$user->setPassword( $password );
$user->save();


