<?php
$user = 'root';
$password = '*manasseh*';
$db = 'myapp';

$db = new mysqli ('localhost', $user, $password, $db) or die('could not  connect at the moment');