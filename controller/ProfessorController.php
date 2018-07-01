<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo1
 * Date: 6/26/2018
 * Time: 3:23 PM
 */



$action = $_POST["action"];
$Empid = $_POST["Empid"];
$Name = $_POST["Name"];
$Office = $_POST["Office"];
$Phone = $_POST["Phone"];
$DepartmentCode = $_POST["DepartmentCode"];

if($action === 'add') {
    $ProfessorBO = new Professor\ProfessorBO($Empid, $Name, $Office, $Phone, $DepartmentCode);

    $ProfessorModel = new \Professor\Professor();
    $value = $ProfessorModel->addProfessor($ProfessorBO);
    echo $value;
}