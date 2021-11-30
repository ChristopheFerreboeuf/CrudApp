<?php

class database
{

    private $_mysqli,
            $_query,
            $_results = array(),
            $_count = 0;

    public static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new database('localhost', 'root', 'password', 'scandiweb');
        }
        return self::$instance;
    }

    public function __construct($host, $user, $password, $db)
    {
        /*$this->_mysqli = new mysqli('localhost', 'root', 'password', 'scandiweb');*/

        parent::__construct($host, $user, $password, $db);

        /*if ($this->_mysqli->connect_error) {
            die($this->_mysqli->connect_error);
        }*/
    }

    public function query($sql)
    {
        if ($this->_query = $this->_mysqli->query($sql)) {
            while ($row = $this->_query->fetch_object()) {
                $this->_results[] = $row;
            }
        }
        return $this;
    }

    public function results()
    {
        return $this->_results;
    }

    /*private $servername;
    private $username;
    private $password;
    private $database;

    protected function connect()
    {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = 'password';
        $this->database = 'scandiweb';

        @var mysqli $mysqli
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        return $conn;
    }*/
}
