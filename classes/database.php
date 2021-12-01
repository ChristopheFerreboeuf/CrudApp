<?php

class database
{

    private $_mysqli,
            $_query,
            $_results = array();

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
        $this->_mysqli = new mysqli($host, $user, $password, $db);

        var_dump($this->_mysqli);

        /*parent::__construct($host, $user, $password, $db);*/

        if ($this->_mysqli->connect_error) {
            die($this->_mysqli->connect_error);
        }
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

    /*private $host;
    private $user;
    private $password;
    private $db;

    protected function connect()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = 'password';
        $this->db = 'scandiweb';

        @var mysqli $mysqli
        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);

        return $conn;
    }*/
}
