<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 1:10 AM
 */

class DBConnection
{
    private $servername = "localhost";
    private static $username = "root";
    private static $password = "mysql";
//    private $dbname = "lms_ucsc_scs1203";
    private $dbname = "lms_ucsc_scs1203";
    private static $conn;
    private static $instance;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->initConnection();
    }

    private function initConnection()
    {
        self::$conn = new mysqli($this->servername, self::$username, self::$password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . self::$conn->connect_error);
        }
    }

    public static function setCredentials(string $username, string $password): void
    {
        self::$username = $username;
        self::$password = $password;
    }

    public static function getConnection()
    {
        if (self::$conn === NULL) {
            self::$instance = new DBConnection();
        }
        return self::$conn;
    }

}