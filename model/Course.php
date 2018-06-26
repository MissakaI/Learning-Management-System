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
                $bo = new \Course\CourseSectionBO($row["CourseCode"], $row["SectionNumber"], $row["Semester"], $row["Year"],
                    $row["Classroom"], $row["ClassTime"], $row["ClassSize"], $row["ProfessorID"]);
                array_push($arr, $bo);
            }
            return $arr;
        } else {
            return NULL;
        }
    }


    public function createCourseEnrollment(\Course\CourseEnrollmentBO $course): bool
    {
        $conn = DBConnection::getConnection();
        $sql = "INSERT INTO CourseEnrollment VALUES ('{$course->getSid()}','{$course->getCourseSection()->getCourse()}'," .
            "'{$course->getCourseSection()->getSectionNumber()}','{$course->getCourseSection()->getSemester()}'," .
            "'{$course->getCourseSection()->getYear()}''{$course->getGrade()}')";
        $result = $conn->query($sql);
        if ($result === TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getCourseEnrollmentsFor(\Course\CourseSectionBO $course): array
    {
        $conn = DBConnection::getConnection();
        $sql = "SELECT * FROM CourseEnrollment WHERE CourseCode='{$course->getCourse()}' && SectionNumber='{$course->getSectionNumber()}'" .
            "&& Semester={$course->getSemester()} && Year={$course->getYear()}";
        $resultSet = $conn->query($sql);
        if ($resultSet->num_rows > 0) {
            $arr = array();
            while ($row = $resultSet->fetch_assoc()) {

                $bo = new \Course\CourseEnrollmentBO($row["StudentID"], $course, $row["Grade"]);
                array_push($arr, $bo);
            }
            return $arr;
        } else {
            return NULL;
        }
    }

    /*
     * @returns an array with course enrollments along with
     */
    public function getCourseEnrollmentsBy(string $sid): array
    {
        $conn = DBConnection::getConnection();
        $sql = "SELECT * FROM CourseEnrollment WHERE StudentID='{$sid}'";
        $resultSet = $conn->query($sql);
        if ($resultSet->num_rows > 0) {
            $arr = array();
            while ($row = $resultSet->fetch_assoc()) {
                $courseSection = new \Course\CourseSectionBO($row["CourseCode"], $row["SectionNumber"], $row["Semester"], $row["Year"], 0, "", 0, "");
                $bo = new \Course\CourseEnrollmentBO($row["StudentID"], $courseSection, $row["Grade"]);
                array_push($arr, $bo);
            }
            return $arr;
        } else {
            return NULL;
        }
    }

    public function getLabSessions(\Course\CourseSectionBO $sectionBO): array
    {

    }
}