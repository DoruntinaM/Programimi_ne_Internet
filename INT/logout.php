<?php
    session_start();
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['mesazhi']);
    header("Location: login.php");
?>