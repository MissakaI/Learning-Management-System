<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 4:26 AM
 */

namespace Course;


class CourseSectionBO
{
    private $course;
    private $sectionNumber = 0;
    private $semester = 0;
    private $year = 0;
    private $classroom = "";
    private $classTime = "";
    private $professor;

    /**
     * CourseSectionBO constructor.
     * @param $course
     * @param int $sectionNumber
     * @param int $semester
     * @param int $year
     * @param string $classroom
     * @param string $classTime
     * @param $professor
     */
    public function __construct($course, int $sectionNumber, int $semester, int $year, string $classroom, string $classTime, $professor)
    {
        $this->course = $course;
        $this->sectionNumber = $sectionNumber;
        $this->semester = $semester;
        $this->year = $year;
        $this->classroom = $classroom;
        $this->classTime = $classTime;
        $this->professor = $professor;
    }

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course): void
    {
        $this->course = $course;
    }

    /**
     * @return int
     */
    public function getSectionNumber(): int
    {
        return $this->sectionNumber;
    }

    /**
     * @param int $sectionNumber
     */
    public function setSectionNumber(int $sectionNumber): void
    {
        $this->sectionNumber = $sectionNumber;
    }

    /**
     * @return int
     */
    public function getSemester(): int
    {
        return $this->semester;
    }

    /**
     * @param int $semester
     */
    public function setSemester(int $semester): void
    {
        $this->semester = $semester;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getClassroom(): string
    {
        return $this->classroom;
    }

    /**
     * @param string $classroom
     */
    public function setClassroom(string $classroom): void
    {
        $this->classroom = $classroom;
    }

    /**
     * @return string
     */
    public function getClassTime(): string
    {
        return $this->classTime;
    }

    /**
     * @param string $classTime
     */
    public function setClassTime(string $classTime): void
    {
        $this->classTime = $classTime;
    }

    /**
     * @return mixed
     */
    public function getProfessor()
    {
        return $this->professor;
    }

    /**
     * @param mixed $professor
     */
    public function setProfessor($professor): void
    {
        $this->professor = $professor;
    }


}