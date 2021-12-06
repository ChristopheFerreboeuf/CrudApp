<?php

class Database
{

    private $_mysqli,
            $_query,
            $_results = array();

    public static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Database('mysql', 'root', 'password', 'scandiweb');
        }
        return self::$instance;
    }

    public function __construct($host, $user, $password, $db)
    {
        $this->_mysqli = new mysqli($host, $user, $password, $db);

        if ($this->_mysqli->connect_error) {
            die($this->_mysqli->connect_error);
        }
    }

    /**
     * @param $sql
     * @return $this
     */
    public function query($sql)
    {
        if ($this->_query = $this->_mysqli->query($sql)) {
            while ($row = $this->_query->fetch_object()) {
                $this->_results[] = $row;
            }
        }
        return $this;
    }

    public function results(): array
    {
        return $this->_results;
    }
}
