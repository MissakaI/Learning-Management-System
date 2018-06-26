<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 9:11 AM
 */

namespace Course;


class CourseEnrollmentBO
{
    private $sid = "";
    private $course_section;
    private $grade = "";

    /**
     * CourseEnrollmentBO constructor.
     * @param string $sid
     * @param $course_section
     * @param string $grade
     */
    public function __construct(string $sid, $course_section, string $grade)
    {
        $this->sid = $sid;
        $this->course_section = $course_section;
        $this->grade = $grade;
    }

    /**
     * @return string
     */
    public function getSid(): string
    {
        return $this->sid;
    }

    /**
     * @param string $sid
     */
    public function setSid(string $sid): void
    {
        $this->sid = $sid;
    }

    /**
     * @return mixed
     */
    public function getCourseSection()
    {
        return $this->course_section;
    }

    /**
     * @param mixed $course_section
     */
    public function setCourseSection($course_section): void
    {
        $this->course_section = $course_section;
    }

    /**
     * @return string
     */
    public function getGrade(): string
    {
        return $this->grade;
    }

    /**
     * @param string $grade
     */
    public function setGrade(string $grade): void
    {
        $this->grade = $grade;
    }


}