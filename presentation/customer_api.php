<?php
include_once '../logic/customerBLL.php';

$customerBLL = new CustomerBLL();
$rm = $_SERVER['REQUEST_METHOD'];

switch ($rm) {
    case 'POST':
        $cnic = $_POST['nic'];
        $cname = $_POST['cname'];
        $cpwd = $_POST['cpwd'];
        $result = $customerBLL->saveCustomer($cnic, $cname, $cpwd);
        echo json_encode($result ? "Customer Added Successfully" : "Error Adding Customer");
        break;

    case 'GET':
        $result = $customerBLL->getCustomers();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                <td>' . $row['name'] . '</td>
                <td>' . $row['nic'] . '</td>
                <td><button class="btn btn-success" onclick="setData(' . $row['nic'] . ',\'' . $row['name'] . '\',\'' . $row['nic'] . '\',\'' . $row['password'] . '\')">Update</button></td>
                <td><button class="btn btn-danger" onclick="deleteData(' . $row['nic'] . ')">Delete</button></td>
                </tr>';
            }
        }
        break;

    default:
        echo json_encode("Invalid Request Method");
        break;
}