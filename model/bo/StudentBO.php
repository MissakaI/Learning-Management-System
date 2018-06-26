<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 4:50 AM
 */

namespace Student;


class StudentBO
{
    private $sid = "";
    private $name = "";
    private $address = "";
    private $status = "";
    private $thesis = "";
    private $option = "";

    /**
     * StudentBO constructor.
     * @param string $sid
     * @param string $name
     * @param string $address
     * @param string $status
     */
    public function __construct(string $sid, string $name, string $address, string $status)
    {
        $this->sid = $sid;
        $this->name = $name;
        $this->address = $address;
        $this->status = $status;
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
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getThesis(): string
    {
        return $this->thesis;
    }

    /**
     * @param string $thesis
     */
    public function setThesis(string $thesis): void
    {
        $this->thesis = $thesis;
    }

    /**
     * @return string
     */
    public function getOption(): string
    {
        return $this->option;
    }

    /**
     * @param string $option
     */
    public function setOption(string $option): void
    {
        $this->option = $option;
    }

}