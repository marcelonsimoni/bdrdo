<?php
 // Código atual
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
 header("Location: http://www.google.com");
 exit();
 } elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
 header("Location: http://www.google.com");
 exit();
 }

// Código modificado
session_start();
if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) || (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true)) {
    header("Location: http://www.google.com");
    exit();
}
