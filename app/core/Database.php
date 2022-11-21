<?php

namespace Model;

defined('ROOTPATH') OR exit('Access denied');

Trait Database
{
    private function connect()
    {
        $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
        $conn = new PDO($string,DBUSER,DBPASWORD);
        require $conn;
    }
    public function query($query, $data = [])
    {
        $conn = $this->connect();
        $stmt = $conn->prepare($query);
        $check = $stmt->execute($data);
        if ($check)
        {
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($check) && count($check) > 0)
            {
                return $result;
            }
        }
        return false;
    }
    public function getSingle($query, $data = [])
    {
        $conn = $this->connect();
        $stmt = $conn->prepare($query);
        $check = $stmt->execute($data);
        if ($check)
        {
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($check) && count($check) > 0)
            {
                return $result[0];
            }
        }
        return false;
    }
}
