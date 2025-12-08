<?php

$username = "daffa";
$email = "daffa0@gmail";
$errors = [];

// Validasi username 6–12 karakter
if (strlen($username) < 6 || strlen($username) > 12) {
    $errors['username'] = "Username must be between 6 and 12 characters";
}

// Validasi email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Invalid email format";
}

// Hasil
if ($errors) {
    print_r($errors);
} else {
    echo "Registrasi berhasil!";
}