<?php
session_start();
session_destroy();
header("Location: login.php"); // arahkan kembali ke halaman login
exit;
?>
