<?php

namespace Surreal\ORM\Attributes;

use Attribute;

#[Attribute]
class TableAttribute extends Attribute
{
    public function __construct(
        public readonly string $table
    ) {
        parent::__construct(self::TARGET_CLASS);
    }
}