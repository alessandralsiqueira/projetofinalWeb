<?php
    session_start();
    session_destroy();
    unset($_SESSION['id_usuarios']);
    $_SESSION['id_usuarios'] = null;
    header('location: index.php');
    session_commit();
?>