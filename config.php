<?php
   define('DB_SERVER', 'localhost:5000');
   define('DB_USERNAME', 'dev');
   define('DB_PASSWORD', '1234');
   define('DB_DATABASE', 'banca');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>