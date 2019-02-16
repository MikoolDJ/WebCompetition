<?php
session_start();

if (isset($_SESSION['login']) && $_SESSION["login"] == "OK") {

    unset($_SESSION['login']);
    unset($_SESSION['question']);
    unset ($_SESSION["user"]);
}

session_destroy();

header('Location:./homepage.php');

?>
