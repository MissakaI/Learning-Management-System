<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 9:11 AM
 */

namespace Student;


class CompanyEnrollmentBO
{
    private $sid = "";
    private $course_section;
    private $assesment = "";

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
        $this->assesment = $grade;
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
    public function getAssesment(): string
    {
        return $this->assesment;
    }

    /**
     * @param string $assesment
     */
    public function setAssesment(string $assesment): void
    {
        $this->assesment = $assesment;
    }


}