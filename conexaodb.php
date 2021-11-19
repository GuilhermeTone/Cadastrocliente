<?php
//Codigo para conexão com banco de dados

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'clientesnewm');

$conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';',USER, PASS)

?>