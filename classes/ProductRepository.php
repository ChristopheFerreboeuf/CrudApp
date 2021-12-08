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

        $product = [];

        while ($row = $results) {
            $product = new Product(
                $row['sku'],
                $row['name'],
                $row['price'],
                $row['type_id'],
                $row['size']
            );
        }

        /*while($row = $results->results()) {
            foreach ($row as $results => $value) {
                var_dump($value);
            }
        }*/

        return $product;
    }
}
