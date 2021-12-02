<?php

class ProductRepository
{
    /**
     * @return Database
     */
    public function getConnection()
    {
        $connection = new Database('mysql', 'root', 'password', 'scandiweb');

        return $connection;
    }

    /**
     * @return Database
     */
    public function getProducts()
    {
        $results = $this->getConnection()->query('SELECT * FROM product');

        return $results;
    }

    public function getProduct()
    {
        $result = $this->getConnection()->query('SELECT id FROM product WHERE id = ?');

        return $result;
    }
}
