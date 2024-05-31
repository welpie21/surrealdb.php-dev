<?php

namespace Surreal\ORM\Statements;

use Surreal\ORM\QueryBuilder\QueryBuilder;

final class RemoveStatement implements StatementInterface
{
    public function __construct(private QueryBuilder &$builder)
    {
    }

    public static function getStatement(): string
    {
        return "REMOVE";
    }
}