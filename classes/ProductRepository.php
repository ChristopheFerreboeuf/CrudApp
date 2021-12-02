<?php

class ProductRepository
{
    public function getConnection()
    {
        $connection = new Database('mysql', 'root', 'password', 'scandiweb');

        return $connection;
    }

    public function getProducts()
    {
        $results = $this->getConnection()->query('SELECT * FROM product');

        while($row = $results->results()) {
            foreach ($row as $results => $value) {
                var_dump($value);
            }
        }

        return $value;
    }

    public function getProduct()
    {
        $result = $this->getConnection()->query('SELECT id FROM product WHERE id = ?');

        return $result;
    }
}
