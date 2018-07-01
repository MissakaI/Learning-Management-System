<?php
/**
 * Created by PhpStorm.
 * User: Lenovo1
 * Date: 7/1/2018
 * Time: 11:59 AM
 */

class Book
{

    public function getBooks(): array
    {
        $conn = DBConnection::getConnection();
        $sql = "SELECT * FROM Book";
        $resultSet = $conn->query($sql);
        if ($resultSet->num_rows > 0) {
            $arr = array();
            while ($row = $resultSet->fetch_assoc()) {
                $bo = new \Book\BookBO($row["Title"], $row["ISBN"], $row["Publisher"], $row["Year"]);
                array_push($arr, $bo);
            }
            return $arr;
        } else {
            return NULL;
        }
    }

}