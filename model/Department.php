<?php

/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 1:04 AM
 */

namespace DepartmentModel;

include_once($_SERVER['DOCUMENT_ROOT'] . '/playground/Learning-Management-System' . '/model/DBConnection.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/playground/Learning-Management-System' . '/model/bo/DepartmentBO.php');
use \ConnectionModel\DBConnection;

class Department
{
    public function getDepartments(): array
    {
        $conn = DBConnection::getConnection();
        $sql = "SELECT * FROM Department";
        $resultSet = $conn->query($sql);
        if ($resultSet->num_rows > 0) {
            $arr = array();
            while ($row = $resultSet->fetch_assoc()) {
                if ($row["EmpId"] == NULL)
                    $bo = new \Department\DepartmentBO($row["DepartmentCode"], $row["Name"], $row["Location"], $row["Phone"], "");
                else{
                    $bo = new \Department\DepartmentBO($row["DepartmentCode"], $row["Name"], $row["Location"], $row["Phone"], "");
                }
                array_push($arr, $bo);
            }
            return $arr;
        } else {
            return NULL;
        }
    }

    public function createDepartment(\Department\DepartmentBO $dep): bool
    {
        $conn = DBConnection::getConnection();
        $sql = "INSERT INTO Department VALUES ('{$dep->getDepCode()}','{$dep->getName()}','{$dep->getLocation()}','{$dep->getPhone()}','{$dep->getAdminID()}')";
        $result = $conn->query($sql);
        if ($result === TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
