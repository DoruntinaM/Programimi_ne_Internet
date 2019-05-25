<?php
function connectDb() {
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "PI";
  $port = 3306;
  
  $db = new mysqli($host, $username, $password, $dbname,$port);
  return $db;
}