<?php
/**
 * Created by IntelliJ IDEA.
 * User: Janitha Dhananjaya
 * Date: 7/1/2018
 * Time: 4:33 PM
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
