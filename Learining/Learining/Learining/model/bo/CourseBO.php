<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 4:06 AM
 */

namespace Course;


class CourseBO
{
    private $code = "";
    private $name = "";
    private $credit = 0.0;
    private $college = "";
    private $prerequisite;
    private $department;

    /**
     * CourseBO constructor.
     * @param string $code
     * @param string $name
     * @param float $credit
     * @param string $college
     * @param $prerequisite
     * @param $department
     */
    public function __construct(string $code, string $name, float $credit, string $college, $prerequisite, $department)
    {
        $this->code = $code;
        $this->name = $name;
        $this->credit = $credit;
        $this->college = $college;
        $this->prerequisite = $prerequisite;
        $this->department = $department;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getCredit(): float
    {
        return $this->credit;
    }

    /**
     * @param float $credit
     */
    public function setCredit(float $credit): void
    {
        $this->credit = $credit;
    }

    /**
     * @return string
     */
    public function getCollege(): string
    {
        return $this->college;
    }

    /**
     * @param string $college
     */
    public function setCollege(string $college): void
    {
        $this->college = $college;
    }

    /**
     * @return mixed
     */
    public function getPrerequisite()
    {
        return $this->prerequisite;
    }

    /**
     * @param mixed $prerequisite
     */
    public function setPrerequisite($prerequisite): void
    {
        $this->prerequisite = $prerequisite;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public function setDepartment($department): void
    {
        $this->department = $department;
    }


}