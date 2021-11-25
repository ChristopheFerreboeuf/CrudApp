<?php

/**
 * @author Alvis Grigaluns <alvisgrigaluns@gmail.com>
 */
abstract class abstractClass
{
    /**
     * @var string
     */
    protected $sku;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $price;

    /**
     * @var integer
     */
    protected $weight;

    /**
     * @param string $sku
     * @param string $name
     * @param integer $price
     * @param integer $weight
     */
    public function __construct($sku, $name, $price, $weight)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
