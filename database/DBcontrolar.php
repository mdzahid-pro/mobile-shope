<?php
class DBcontrolar
{
    //Create Database Connection
    protected $host = 'localhost';
    protected $user = 'adminShop';
    protected $pass = 'VLWvGw7TY2lQA8IB';
    protected $dbname = 'shop';

    //Connection Property
    public $con = null;

    //Call Constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);
        if($this->con->connect_error){
            echo "Faild To Connect Database".$this->con;
        }
    }

    public function __destruct(){
        $this->closeConnection();
    }

    protected function closeConnection(){
        if($this->con != null){
            $this->con->close();
            $this->con = null;
        }
    }
}
