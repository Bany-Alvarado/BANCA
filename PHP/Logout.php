<?php

session_start();
unset ($SESSION['username']);
session_destroy();

echo "<script>location.href='../index.php';</script>";

?>