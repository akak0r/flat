<?php

namespace Mattbit\Flat\Query\Expression\Leaf;

use Mattbit\Flat\Document\Matchable;

class GteExpression extends Expression
{
    public function match(Matchable $document)
    {
        return $document->get($this->key) >= $this->reference;
    }
}