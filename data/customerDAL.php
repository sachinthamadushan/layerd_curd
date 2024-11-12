<?php
include_once 'database.php';

class CustomerDAL{
    private $database;
    public function __construct(){
        $this->database = (new Database())-> getConnection();
    }

    public function saveCustomer($cnic, $cname, $cpwd){
        $q = "INSERT INTO customer(nic,`name`, `password`, `status`) VALUES('$cnic', '$cname', '$cpwd',1)"; 
        return $this->database->query($q);
    }

    public function getCustomers(){
        $q = "SELECT * FROM customer ORDER BY `name` ASC"; 
        return $this->database->query($q);
    }
}