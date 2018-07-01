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

    public function borrowBook(string $isbn, string $sid): bool
    {
        $conn = DBConnection::getConnection();
        $sql = "INSERT INTO BookBorrow VALUES ('{$isbn}','{$sid}',curdate())";
        $result = $conn->query($sql);
        if ($result === TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function returnBook(string $isbn, string $sid, string $date): bool
    {
        $conn = DBConnection::getConnection();
        $sql = "INSERT INTO BookBorrow VALUES ('{$isbn}','{$sid}','{$date}',curdate())";
        $result = $conn->query($sql);
        if ($result === TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getBorrowedBooks(): array
    {
        $conn = DBConnection::getConnection();
        $sql = "SELECT * FROM BookBorrow";
        $resultSet = $conn->query($sql);
        if ($resultSet->num_rows > 0) {
            $arr = array();
            while ($row = $resultSet->fetch_assoc()) {
                $bo = new \Book\BookLendBO($row["isbn"], $row["sid"], $row["BorrowDate"], "");
                array_push($arr, $bo);
            }
            return $arr;
        } else {
            return NULL;
        }
    }

    public function getReturnedBooks(): array
    {
        $conn = DBConnection::getConnection();
        $sql = "SELECT * FROM BookReturn";
        $resultSet = $conn->query($sql);
        if ($resultSet->num_rows > 0) {
            $arr = array();
            while ($row = $resultSet->fetch_assoc()) {
                $bo = new \Book\BookLendBO($row["isbn"], $row["sid"], $row["BorrowDate"], $row["ReturnDate"]);
                array_push($arr, $bo);
            }
            return $arr;
        } else {
            return NULL;
        }
    }
}