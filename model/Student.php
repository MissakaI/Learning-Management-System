<?php
/**
 * Created by IntelliJ IDEA.
 * User: Janitha Dhananjaya
 * Date: 7/1/2018
 * Time: 4:38 PM
 */

class Student
{
    public function addStudent(\Student\StudentBO $Student):bool {
        $conn = DBConnection::getConnection();
        $sql = "INSERT INTO Student VALUES ('{$Student->getSid()}','{$Student->getName()}'," .
            "'{$Student->getAddress()}','{$Student->getStatus()}')";
        $result = $conn->query($sql);
        if ($result === TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getStudents(): array
    {
        $conn = DBConnection::getConnection();
        $sql = "SELECT * FROM Student";
        $resultSet = $conn->query($sql);
        if ($resultSet->num_rows > 0) {
            $arr = array();
            while ($row = $resultSet->fetch_assoc()) {
                $bo = new \Student\StudentBO($row["Sid"], $row["Name"], $row["Address"], $row["Status"],
                    $row["Type"]);
                array_push($arr, $bo);
            }
            return $arr;
        } else {
            return NULL;
        }
    }
}