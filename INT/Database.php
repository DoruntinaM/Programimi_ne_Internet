<?php

class Database{

    private $db;
    public function __construct($db)
    {
        $this->db=$db;
    }
    public function escapeString($string){
        $string =  $this->db->real_escape_string($string);

        return $string;
    }
    public function queryResult($query){
        $result= $this->db->query($query);
        return $result;
    }

}




?>