<?php
/* Database connection settings */
$host = 'localhost:3306';
$user = 'root';
$pass = 'root';
$db = 'wbs';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
