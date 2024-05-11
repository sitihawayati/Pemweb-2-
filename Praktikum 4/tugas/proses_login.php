<?php
$email = $_POST ['email'];
$password = $_POST ['password'];

if ($email == 'sitihawayati23@gmail.com' && $password == 'HAWAYATI') {
    header('Location: dashboard.php');
} else {
    echo "Login Gagal";
}