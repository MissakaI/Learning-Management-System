<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo1
 * Date: 6/26/2018
 * Time: 3:16 PM
 */

namespace Professor;


class Professor
{
    public function addProfessor(\Professor\ProfessorBO $Professor):bool {
        $conn = DBConnection::getConnection();
        $sql = "INSERT INTO Professor VALUES ('{$Professor->getProfId()}','{$Professor->getName()}','{$Professor->getOffice()}','{$Professor->getPhone()}','{$Professor->getDepCode()}')";
        $result = $conn->query($sql);
        if ($result === TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}