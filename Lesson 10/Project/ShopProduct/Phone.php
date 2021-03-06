<?php
declare(strict_types=1);

namespace ShopProduct;

use ShopProduct;

use ShopProduct\Info\PhoneInfo;
	
class Phone extends ShopProduct
{
    private const PHONE = 'Телефон';

    /** @var string */
    private string $memory;

    /**
     * @param string $title
     * @param string $producer
     * @param int    $price
     * @param string $memory
     */
    public function __construct(string $title, string $producer, int $price, string $memory)
    {
        parent::__construct($title, $producer, $price);
        $this->memory = $memory;
	    if (isset($this)) {
		    $this->info = new PhoneInfo($this);
	    }
    }

    /**
     * @return string
     */
    public function getMemory(): string
    {
        return $this->memory;
    }

    /**
     * @inheritDoc
     */
    public function getProductType(): string
    {
        return self::PHONE;
    }
}
