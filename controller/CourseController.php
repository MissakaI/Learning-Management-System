<?php
$action = "noaction";
// check post request action or get request actions
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = $_GET['action'];
}
// create- call createCourse function
if ($action == "create") {
    //course details
    $code = $_POST['code'];
    $name = $_POST['name'];
    $credit = $_POST['credit'];
    $college = $_POST['college'];
    $prerequisite = $_POST['prerequisite'];
    $department = $_POST['department'];

    $CourseBO = new \Course\CourseBO($code, $name, $credit, $college, $prerequisite, $department);

    $CourseModel = new Course();
    $value = $CourseModel->createCourse($CourseBO);
    echo $value;

//  createSection - call createCourseSection
} elseif ($action == "createSection") {
    //course code- course details
    $courseCode = $_POST['courseCode'];
    //professor id - professor details
    $profID = $_POST['profID'];
    //section details
    $sectionNumber = $_POST['sectionNumber'];
    $semester = $_POST['semester'];
    $year = $_POST['year'];
    $classroom = $_POST['classroom'];
    $classTime = $_POST['classTime'];
    $classSize = $_POST['classSize'];

    $CourseBO = new \Course\CourseBO();
    $CourseBO->setCode($courseCode);

    $ProfessorBO = new \Professor\ProfessorBO();
    $ProfessorBO->setProfId($profID);

    $CourseSectionBO = new \Course\CourseSectionBO($CourseBO, $sectionNumber, $semester, $year, $classroom, $classTime, $classSize, $ProfessorBO);
    $CourseModel = new Course();
    $value = $CourseModel->createCourseSection($CourseSectionBO);
    echo $value;

//  createCourseEnrollment - call createCourseEnrollment function
} elseif ($action == "createCourseEnrollment") {
    //enrollment details
    $sid = $_POST['sid'];
    $grade = $_POST['grade'];
    //course section details
    $courseCode = $_POST['courseCode'];
    $sectionNumber = $_POST['sectionNumber'];
    $semester = $_POST['semester'];
    $year = $_POST['year'];

    $CourseBO = new \Course\CourseBO();
    $CourseBO->setCode($courseCode);

    $CourseSectionBO = new \Course\CourseSectionBO();
    $CourseSectionBO->setCourse($CourseBO);
    $CourseSectionBO->setSectionNumber($sectionNumber);
    $CourseSectionBO->setSemester($semester);
    $CourseSectionBO->setYear($year);

    $CourseEnrollmentBO = new \Course\CourseEnrollmentBO($sid, $CourseSectionBO, $grade);
    $CourseModel = new Course();
    $value = $CourseModel->createCourseEnrollment($CourseEnrollmentBO);
    echo $value;

}

