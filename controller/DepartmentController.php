<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo1
 * Date: 6/26/2018
 * Time: 3:10 PM
 */

//require('.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/Learning_Management_System' . '/model/Department.php');

use \DepartmentModel;

$acttion = $_GET["action"];


if($acttion == 'view-all'){
    $DeparmentModel = new DepartmentModel\Department();
    $value = $DeparmentModel->getDepartments();
    echo $value;
}