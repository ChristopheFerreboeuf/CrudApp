<?php

class product
{
    private $sku;
    private $name;
    private $price;
    private $type;
    private $size;

    public function __construct()
    {
        $this->sku = '';
        $this->name = '';
        $this->price = '';
        $this->type = '';
        $this->size = '';
    }

    public function getProducts()
    {
        global $db;
        return $db->query("SELECT * FROM product");
    }
}
