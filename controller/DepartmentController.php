<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo1
 * Date: 6/26/2018
 * Time: 3:10 PM
 */

//require('.php');
//use DepartmentModel\Department;

$acttion = $_GET["action"];


if($acttion == 'view-all'){
    $DeparmentModel = new \DepartmentModel\Department();
    $value = $DeparmentModel->getDepartments();
    echo $value;
}