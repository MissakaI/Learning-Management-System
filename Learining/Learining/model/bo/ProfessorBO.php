<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 3:37 AM
 */

namespace Professor;


class ProfessorBO
{
    private $profId = "";
    private $name = "";
    private $office = "";
    private $phone = "";
    private $depCode = "";

    /**
     * ProfessorBO constructor.
     * @param string $profId
     * @param string $name
     * @param string $office
     * @param string $phone
     * @param string $depCode
     */
    public function __construct(string $profId, string $name, string $office, string $phone, string $depCode)
    {
        $this->profId = $profId;
        $this->name = $name;
        $this->office = $office;
        $this->phone = $phone;
        $this->depCode = $depCode;
    }

    /**
     * @return string
     */
    public function getProfId(): string
    {
        return $this->profId;
    }

    /**
     * @param string $profId
     */
    public function setProfId(string $profId): void
    {
        $this->profId = $profId;
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
     * @return string
     */
    public function getOffice(): string
    {
        return $this->office;
    }

    /**
     * @param string $office
     */
    public function setOffice(string $office): void
    {
        $this->office = $office;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getDepCode(): string
    {
        return $this->depCode;
    }

    /**
     * @param string $depCode
     */
    public function setDepCode(string $depCode): void
    {
        $this->depCode = $depCode;
    }


}