<?php
define("USERNAME", "shawon");
define("PASSWORD", "123");

echo "Enter a user name : ";
$user_name = trim(fgets(STDIN));

echo "Enter a password : ";
$password = trim(fgets(STDIN));

if ($user_name === USERNAME && $password === PASSWORD) {
    echo "Login Successfully!";
} else {
    echo "User Name and password not match!";
}
