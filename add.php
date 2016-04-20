<?php

require 'vendor/autoload.php';

$name = $_POST['name'];
$bio = $_POST['bio'];
$password = $_POST['password'];

new Student();

$user = new User();

$user->setName( $name );
$user->setBio( $bio );
$user->setPassword( $password );
$user->save();


