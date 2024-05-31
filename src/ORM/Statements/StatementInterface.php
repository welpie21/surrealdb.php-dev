<?php

namespace Surreal\ORM\Statements;

use Surreal\ORM\QueryBuilder\QueryBuilder;

interface StatementInterface
{
    public function __construct(QueryBuilder &$builder);

    /**
     * Returns the type of the statement.
     * @return string
     */
    public static function getStatement(): string;
}