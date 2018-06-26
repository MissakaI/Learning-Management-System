<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 4:14 AM
 */

namespace Book;

class BookBO
{
    private $title = "";
    private $isbn = 0;
    private $publisher = "";
    private $year = 0;
    private $author = array();

    /**
     * BookBO constructor.
     * @param string $title
     * @param int $isbn
     * @param string $publisher
     * @param int $year
     */
    public function __construct(string $title, int $isbn, string $publisher, int $year)
    {
        $this->title = $title;
        $this->isbn = $isbn;
        $this->publisher = $publisher;
        $this->year = $year;
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
    public function getPublisher(): string
    {
        return $this->publisher;
    }

    /**
     * @param string $publisher
     */
    public function setPublisher(string $publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
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
}