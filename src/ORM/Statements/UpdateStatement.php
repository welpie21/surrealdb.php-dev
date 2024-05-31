<?php

namespace Surreal\ORM\Statements;

use Surreal\ORM\QueryBuilder\QueryBuilder;

final class UpdateStatement implements StatementInterface
{
    public function __construct(private QueryBuilder &$builder)
    {
    }

    public static function getStatement(): string
    {
        return "UPDATE";
    }
}