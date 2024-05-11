<?php
// tangkap input login
$email = $_POST['email'];
$password = $_POST['password'];

// validasi login
if ($email == 'sitihawayati23@gmail.com' && $password == '12345678') {
    header('Location: dashboard.php');
} else {
    echo "Login Gagal";
}
