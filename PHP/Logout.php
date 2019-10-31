<?php

session_start();
session_destroy();
unset($SESSION['username']);

echo "<script>location.href='../index.php';</script>";

?>