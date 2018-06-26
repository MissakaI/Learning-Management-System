<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 9:24 AM
 */

namespace Course;


class LabSessionBO
{
    private $lsNum = "";
    private $lab = "";
    private $time = "";
    private $topic = "";
    private $courseSection;
    private $graduate;

    /**
     * LabSessionBO constructor.
     * @param string $lsNum
     * @param string $lab
     * @param string $time
     * @param string $topic
     * @param $courseSection
     * @param $graduate
     */
    public function __construct(string $lsNum, string $lab, string $time, string $topic, $courseSection, $graduate)
    {
        $this->lsNum = $lsNum;
        $this->lab = $lab;
        $this->time = $time;
        $this->topic = $topic;
        $this->courseSection = $courseSection;
        $this->graduate = $graduate;
    }

    /**
     * @return string
     */
    public function getLsNum(): string
    {
        return $this->lsNum;
    }

    /**
     * @param string $lsNum
     */
    public function setLsNum(string $lsNum): void
    {
        $this->lsNum = $lsNum;
    }

    /**
     * @return string
     */
    public function getLab(): string
    {
        return $this->lab;
    }

    /**
     * @param string $lab
     */
    public function setLab(string $lab): void
    {
        $this->lab = $lab;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @param string $time
     */
    public function setTime(string $time): void
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }

    /**
     * @param string $topic
     */
    public function setTopic(string $topic): void
    {
        $this->topic = $topic;
    }

    /**
     * @return mixed
     */
    public function getCourseSection()
    {
        return $this->courseSection;
    }

    /**
     * @param mixed $courseSection
     */
    public function setCourseSection($courseSection): void
    {
        $this->courseSection = $courseSection;
    }

    /**
     * @return mixed
     */
    public function getGraduate()
    {
        return $this->graduate;
    }

    /**
     * @param mixed $graduate
     */
    public function setGraduate($graduate): void
    {
        $this->graduate = $graduate;
    }


}