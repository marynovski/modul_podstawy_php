<?php

$headerText = 'Logowanie';

//jezeli forumlarz jest wypelniony ten warunek bedzie spelniony
if (isset($_POST['email']) && isset($_POST['password'])) {
    $correctEmail = 'admin@example.com';
    $correctPassword = '123456';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $correctEmail && $password === $correctPassword) {
        header('Location: index.php');
    }

    echo '<span class="text-danger">Niepoprawne dane!</span>';
}

include_once 'login.view.php';


