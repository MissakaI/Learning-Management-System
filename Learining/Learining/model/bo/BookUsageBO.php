<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 4:47 AM
 */

namespace Book;


class BookUsageBO
{
    private $isbn;
    private $courseCode;
    private $empId;

    /**
     * BookUsageBO constructor.
     * @param $isbn
     * @param $courseCode
     * @param $empId
     */
    public function __construct($isbn, $courseCode, $empId)
    {
        $this->isbn = $isbn;
        $this->courseCode = $courseCode;
        $this->empId = $empId;
    }

    /**
     * @return mixed
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param mixed $isbn
     */
    public function setIsbn($isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * @return mixed
     */
    public function getCourseCode()
    {
        return $this->courseCode;
    }

    /**
     * @param mixed $courseCode
     */
    public function setCourseCode($courseCode): void
    {
        $this->courseCode = $courseCode;
    }

    /**
     * @return mixed
     */
    public function getEmpId()
    {
        return $this->empId;
    }

    /**
     * @param mixed $empId
     */
    public function setEmpId($empId): void
    {
        $this->empId = $empId;
    }


}