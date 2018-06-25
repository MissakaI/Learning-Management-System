<?php

namespace Department;
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 12:47 AM
 */

class DepartmentBO
{

    private $name = "";
    private $depCode = "";
    private $location = "";
    private $phone = "";
    private $adminID = "";

    /**
     * DepartmentBO constructor.
     * @param string $name
     * @param string $depCode
     * @param string $location
     * @param string $phone
     * @param string $adminID
     */
    public function __construct(string $name, string $depCode, string $location, string $phone, string $adminID)
    {
        $this->name = $name;
        $this->depCode = $depCode;
        $this->location = $location;
        $this->phone = $phone;
        $this->adminID = $adminID;
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

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
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
    public function getAdminID(): string
    {
        return $this->adminID;
    }

    /**
     * @param string $adminID
     */
    public function setAdminID(string $adminID): void
    {
        $this->adminID = $adminID;
    }


}

