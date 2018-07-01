<?php
/**
 * Created by IntelliJ IDEA.
 * User: Janitha Dhananjaya
 * Date: 7/1/2018
 * Time: 4:33 PM
 */


$studentCourse = $_GET["action"];
$id = $_GET["id"];

if($studentCourse == 'existing-course'){
    $courses = new \Course();
    $value = $courses->getCourseEnrollmentsBy($id);
    echo $value;
}