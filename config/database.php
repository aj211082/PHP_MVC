<?php

class Database
{

    public $db_connection;

    function __construct()
    {

        // make database connection
        // use PDO library
        $this->db_connection = null;

    }

    public function getConnection()
    {
        return $this->db_connection;
    }

    /**
     * @return string
     */
    public function selectData()
    {
        $array = array('data' => array('name' => 'abc'), 'total' => 10);
        return json_encode($array);
    }

    public function insertData($data)
    {
        return false;
    }

    public function deleteData($data)
    {
        if(empty($data)) {
            return true;
        }
        return false;
    }

}