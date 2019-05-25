<?php

    class Functions{

      public function writeLog($txt = "") {
            file_put_contents(__DIR__ . '/../log.txt', $txt . PHP_EOL , FILE_APPEND | LOCK_EX);
      }
        
       
       
      public function escape($db, array $strings) {
            return array_map(
              function ($str) use ($db) {
                return $db->real_escape_string($str);
              }, $strings);
        }


    }

    

?>