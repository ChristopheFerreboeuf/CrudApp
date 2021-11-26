<?php

class database
{
    private $servername;
    private $username;
    private $password;
    private $database;

    protected function connect()
    {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = 'password';
        $this->database = 'scandiweb';

        /** @var mysqli $mysqli */
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        return $conn;
    }
}
