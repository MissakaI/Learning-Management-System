<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 4:22 AM
 */

namespace Book;


class BookAuthorBO
{
    private $profId = "";
    private $isbn = "";

    /**
     * BookAuthorBO constructor.
     * @param string $profId
     * @param string $isbn
     */
    public function __construct(string $profId, string $isbn)
    {
        $this->profId = $profId;
        $this->isbn = $isbn;
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
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     */
    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

}