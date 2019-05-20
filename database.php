<?php 
$db = new mysqli('127.0.0.1', 'root', '', 'dmiami_university'); 

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>