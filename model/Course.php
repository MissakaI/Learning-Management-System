<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 10:29 AM
 */

class Course
{
    public function getCourses(): array
    {
        $conn = DBConnection::getConnection();
        $sql = "SELECT * FROM Course";
        $resultSet = $conn->query($sql);
        if ($resultSet->num_rows > 0) {
            $arr = array();
            while ($row = $resultSet->fetch_assoc()) {
                $bo = new \Course\CourseBO($row["CourseCode"], $row["Name"], $row["CreditHours"], $row["College"],
                    $row["PreRequisiteCourseCode"], $row["DepartmentCode"]);
                array_push($arr, $bo);
            }
            return $arr;
        } else {
            return NULL;
        }
    }

    public function getCoursesOfferedBy(string $department): array
    {
        $conn = DBConnection::getConnection();
        $sql = "SELECT * FROM Course WHERE DepartmentCode='{$department}'";
        $resultSet = $conn->query($sql);
        if ($resultSet->num_rows > 0) {
            $arr = array();
            while ($row = $resultSet->fetch_assoc()) {
                $bo = new \Course\CourseBO($row["CourseCode"], $row["Name"], $row["CreditHours"], $row["College"],
                    $row["PreRequisteCourseCode"], $row["DepartmentCode"]);
                array_push($arr, $bo);
            }
            return $arr;
        } else {
            return NULL;
        }
    }

    public function createCourse(\Course\CourseBO $course): bool
    {
        $conn = DBConnection::getConnection();
        $sql = "INSERT INTO Course VALUES ('{$course->getCode()}','{$course->getName()}',{$course->getCredit()}," .
            "'{$course->getCollege()}','{$course->getDepartment()}')";
        $result = $conn->query($sql);
        if ($result === TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function createCourseSection(\Course\CourseSectionBO $course): bool
    {
        $conn = DBConnection::getConnection();
        $sql = "INSERT INTO CourseSection VALUES ('{$course->getCourse()}','{$course->getSectionNumber()}',{$course->getSemester()}," .
            "{$course->getYear()},'{$course->getClassroom()}','{$course->getClassTime()}',{$course->getClassSize()},'{$course->getProfessor()}')";
        $result = $conn->query($sql);
        if ($result === TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getCourseSectionsOf(string $course): array
    {
        $conn = DBConnection::getConnection();
        $sql = "SELECT * FROM CourseSection WHERE CourseCode='{$course}'";
        $resultSet = $conn->query($sql);
        if ($resultSet->num_rows > 0) {
            $arr = array();
            while ($row = $resultSet->fetch_assoc()) {
                $bo = new \Course\CourseBO($row["CourseCode"], $row["Name"], $row["CreditHours"], $row["College"],
                    $row["PreRequisteCourseCode"], $row["DepartmentCode"]);
                array_push($arr, $bo);
            }
            return $arr;
        } else {
            return NULL;
        }
    }


}