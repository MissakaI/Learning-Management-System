<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo1
 * Date: 6/26/2018
 * Time: 3:10 PM
 */

//require('.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/playground/Learning-Management-System' . '/model/Department.php');

$acttion = $_GET["action"];


if($acttion == 'view-all'){
    $DeparmentModel = new DepartmentModel\Department();
    $value = $DeparmentModel->getDepartments();
    echo json_encode($value);
}