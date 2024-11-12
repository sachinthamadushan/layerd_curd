<?php
include_once '../data/customerDAL.php';
class CustomerBLL
{
    private $customerDAL;
    public function __construct()
    {
        $this->customerDAL = new CustomerDAL();
    }
    public function saveCustomer($cnic, $cname, $cpwd)
    {
        return $this->customerDAL->saveCustomer($cnic, $cname, $cpwd);
    }

    public function getCustomers()
    {
        return $this->customerDAL->getCustomers();
    }
}