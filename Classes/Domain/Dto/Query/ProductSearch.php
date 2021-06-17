<?php

namespace Aprodax\CatalogueFtcbtclc\Domain\Dto\Query;

class ProductSearch
{
    private $text;

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): ProductSearch 
    {
        $this->text = $text;
        return $this;
    }
}

?>