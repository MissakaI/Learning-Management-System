<?php
/**
 * Created by IntelliJ IDEA.
 * User: Janitha Dhananjaya
 * Date: 7/2/2018
 * Time: 12:28 AM
 */

$action = $_POST["action"];
$Sid = $_POST["Sid"];
$Name = $_POST["Name"];
$Address = $_POST["Address"];
$Status = $_POST["Status"];
$Type = $_POST["Type"];

if ($action === 'add') {
    $StudentBO = new Student\StudentBO($Sid, $Name, $Address, $Status, $Type);

    $StudentModel = new \Student();
    $value = $StudentModel->addStudent($StudentBO);
    echo $value;
}