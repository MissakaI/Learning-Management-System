<?php
$code = $_POST['code'];
$name = $_POST['name'];
$credit = $_POST['credit'];
$college = $_POST['college'];
$prerequisite = $_POST['prerequisite'];
$department = $_POST['department'];

$courseBO = new \Course\CourseBO($code,$name,$credit,$college,$prerequisite,$department);

