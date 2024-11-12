<?php
include_once '../logic/categoryBLL.php';
$categoryBLL = new CategoryBLL();
$rm = $_SERVER['REQUEST_METHOD'];
switch ($rm) {
    case 'POST':
        $catName = $_POST['catName'];
        $result = $categoryBLL->createCategory($catName);
        echo json_encode($result ? "Category Added Successfully" : "Error Adding Category");
        break;

    case 'GET':
        $result = $categoryBLL->getCategoryList();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
            <td>' . $row['category'] . '</td>
            <td><button class="btn btn-success" onclick="setData(' . $row['id'] . ',\'' . $row['category'] . '\')">Update</button></td>
            <td><button class="btn btn-danger" onclick="deleteData(' . $row['id'] . ')">Delete</button></td>
            </tr>';
            }
        }
        break;

    case 'PUT':
        parse_str(file_get_contents("php://input"), $_PUT);
        $id = $_PUT['id'];
        $catName = $_PUT['catName'];
        $result = $categoryBLL->updateCategory($id, $catName);
        echo json_encode($result ? "Category Updated Successfully" : "Error Updating Category");
        break;

    case 'DELETE':
        parse_str(file_get_contents("php://input"), $_DELETE);
        $id = $_DELETE['id'];
        $result = $categoryBLL->deleteCategory($id);
        echo json_encode($result ? "Category Deleted Successfully" : "Error Deleting Category");
        break;

    default:
        echo json_encode(["status" => "error", "message" => "Invalid request"]);
        break;
}
