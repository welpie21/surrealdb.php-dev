<?php

namespace Surreal\ORM\Collection;

final readonly class Collection
{
    public function __construct(
        private ?array $items
    ) {}

    public function first(): mixed
    {
        return reset($this->items);
    }

    public function last(): mixed
    {
        return end($this->items);
    }
}