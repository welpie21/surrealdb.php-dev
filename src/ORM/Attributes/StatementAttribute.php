<?php

namespace Surreal\ORM\Attributes;

use Attribute;

#[Attribute]
class StatementAttribute extends Attribute
{
    public function __construct(
        public readonly string $statement
    ) {}
}