<?php
    session_start();
    session_unset();// All the session Unset.
    session_destroy(); // All the Session Destroy.
    unset($_SESSION['uname']);
    header("Location:index.php");

?>