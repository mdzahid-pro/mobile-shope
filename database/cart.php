<?php

class cart
{
    public $db = NULL;
    public function __construct($db)
    {
        if(!isset($db->con))return null;
        $this->db = $db;
    }

    public function insertintocart($params=null,$table='cart'){
        if($this->db->con !== NULL){
            if($params !== NULL){
                //insert into cart(user_id) values(0)
                //get Table Columns
                //specify array key
                $colums = implode(',',array_keys($params));
                //spacify array values
                $values = implode(',',array_values($params));
                $query_string = sprintf("INSERT INTO %s(%s) VALUES (%s);",$table,$colums,$values);
                //Exicute Query
                $result = $this->db->con->query($query_string);
            }
        }
    }

    public function getDataCart($userId,$itemId){
        if(isset($itemId) && isset($userId)){
            $arr = array("user_id" => $userId,"item_id" => $itemId);
            $result = $this->insertintocart($arr);
            if($result == true){
                header("Location: ".$_SERVER[PHP_SELF]);
            }
        }
    }

    //calculate Total Price
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f',$sum);
        }
    }


}