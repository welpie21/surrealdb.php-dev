<?php

namespace Surreal\ORM\QueryBuilder;

use Surreal\ORM\Statements\StatementInterface;

abstract class QueryBuilder
{
    /**
     * The query string
     * @var string
     */
    protected string $query;

    /**
     * The query parameters
     * @var array
     */
    protected array $params;

    public function assignStatement(StatementInterface &$statement): void
    {
        $reflection = new \ReflectionClass($statement);
        $attributes = $reflection->getAttributes();

        var_dump($attributes);
    }
}