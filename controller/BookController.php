<?php
/**
 * Created by IntelliJ IDEA.
 * User: Janitha Dhananjaya
 * Date: 6/26/2018
 * Time: 8:21 PM
 */

$action = $_POST["action"];

if($action === 'view-all'){
    $BookModel = new Book();
    $value = $BookModel->getBooks();
    echo $value;
}