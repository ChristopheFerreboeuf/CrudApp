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

        $products = [];

        while ($row = $results->fetchArray()) {
            $products[] = new Product(
                $row['sku'],
                $row['name'],
                $row['price'],
                $row['type_id'],
                $row['size']
            );
        }

        var_dump($products);

        return $products;
    }

    public function getProduct($id)
    {
        $results = $this->getConnection()->query('SELECT id FROM product WHERE id = ?');

        return $results;
    }
}
