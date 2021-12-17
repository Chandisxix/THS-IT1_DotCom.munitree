<?php
    session_start();
    session_destroy();
    // unset($_SESSION["empId"]);
    // unset($_SESSION["loginId"]);
    header("Location:login.php");
?>