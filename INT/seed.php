<?php
include("LidhjaDB.php");
$db = new mysqli($host, $username, $password, $dbname, $port);
$query = file_get_contents(__DIR__ . '/schema.sql');
$error = $db->multi_query($query);
echo $db->error;