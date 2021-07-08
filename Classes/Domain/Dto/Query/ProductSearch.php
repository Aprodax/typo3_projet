<?php

namespace Aprodax\CatalogueFtcbtclc\Domain\Dto\Query;

class ProductSearch
{
    /**
    * @var int|null
    */
    private $minPrice;
    /**
    * @var int|null
    */
    private $maxPrice; 
    /**
    * @var Category|null
    */
    private $category;
    /**
    * @var string|null
    */
    private $text;

    public function getMinPrice(): ?int
    {
        return $this->minPrice;
    }

    public function setMinPrice(?int $minPrice): ProductSearch 
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    public function setMaxPrice(?int $maxPrice): ProductSearch 
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?\Aprodax\CatalogueFtcbtclc\Domain\Model\Category $brand): ProductSearch 
    {
        $this->category = $category;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): ProductSearch 
    {
        $this->text = $text;
        return $this;
    }
}

?>