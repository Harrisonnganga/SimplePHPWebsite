<?php

use Database();

$db = new Database();

$email = $_POST['email'];
$password = $_POST['password'];

$errors =[];
if ($email) {
    $errors['email'] = 'provide a valid email';
}
if (strlen($password) < 7) {
    $errors['password'] ='password should be atleast 7 characters';
}
if (!empty($errors)) {
    return [
        'errors' => $errors
    ];
}
$user = $db->query('SELECT * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {

    //if yes, redirect to login page
    header('location: /');
} else {
    //if not, save one to the DB, login user and redirect.
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => $password 
    ]);

    //mark that the use has logged in

    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    exit();
}