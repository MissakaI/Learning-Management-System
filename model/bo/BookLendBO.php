<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 4:14 AM
 */

namespace Book;

class BookLendBO
{
    private $isbn = 0;
    private $sid = "";
    private $borrowDate = "";
    private $returnDate = "";

    /**
     * BookLendBO constructor.
     * @param int $isbn
     * @param string $sid
     * @param string $borrowDate
     * @param string $returnDate
     */
    public function __construct(int $isbn, string $sid, string $borrowDate, string $returnDate)
    {
        $this->isbn = $isbn;
        $this->sid = $sid;
        $this->borrowDate = $borrowDate;
        $this->returnDate = $returnDate;
    }


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getIsbn(): int
    {
        return $this->isbn;
    }

    /**
     * @param int $isbn
     */
    public function setIsbn(int $isbn): void
    {
        $this->isbn = $isbn;
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
     * @return int
     */
    public function getBorrowDate(): string
    {
        return $this->borrowDate;
    }

    /**
     * @param int $borrowDate
     */
    public function setBorrowDate(string $borrowDate): void
    {
        $this->borrowDate = $borrowDate;
    }

    /**
     * @return array
     */
    public function getAuthor(): array
    {
        return $this->author;
    }

    /**
     * @param array $author
     */
    public function setAuthor(array $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getReturnDate(): string
    {
        return $this->returnDate;
    }

    /**
     * @param string $returnDate
     */
    public function setReturnDate(string $returnDate): void
    {
        $this->returnDate = $returnDate;
    }
}