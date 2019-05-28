<?php
function connectDb() {
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "PI";
  $port = 3306;


  try
  {
      if ($db = new mysqli($host, $username, $password, $dbname,$port))
      {
        return $db;
      }
      else
      {
          throw new Exception('Unable to connect');
      }
  }
  catch(Exception $e)
  {
      echo $e->getMessage();
  }

 
}