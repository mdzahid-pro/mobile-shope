<?php
//Use to Fetch Product Data Form Database
class product
{
    public $db = null;

    //Construct Function
    function __construct($db){
        if(!isset($db->con))return NULL;
        $this->db = $db;
    }
    //Get Fetch Data Using Get Fect Method
    public function getData($table='product'){
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $productData = array();
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $productData[] = $item;
        }
        return $productData;
    }

    public function getDataUser($user,$table='cart'){
        if(isset($user)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE user_id={$user}");
            $product_array = array();
            while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $product_array[] = $item;
            }
            return $product_array;
        }
    }

    public function getProduct($itemId = null,$table = 'product'){
        if(isset($itemId)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$itemId}");
            $productArray = array();
            while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $productArray[] = $item;
            }
            return $productArray;

        }
    }

}