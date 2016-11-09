<?php
class DB{
    private $connection;
    private $serverName;
    private $database_name;
    private $userName;
    private $password;

    /**
     * DB constructor.
     * @param $connection
     * @param $serverName
     * @param $database_name
     * @param $password
     */
    public function __construct($serverName, $database_name,$userName, $password)
    {
        $this->serverName = $serverName;
        $this->database_name = $database_name;
        $this->userName = $userName;
        $this->password = $password;
        $this->setConnection();

    }

    private function setConnection(){

        $this->connection =  new mysqli($this->serverName,
            $this->userName, $this->password, $this->database_name);

        if($this->connection->connect_errno > 0){
            die('Unable to connect to database [' . $this->connection->connect_error . ']');
        }
    }

    public function getConnection(){
        return $this->connection;
    }




}