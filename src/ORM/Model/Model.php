<?php

namespace Surreal\ORM\Model;

use Surreal\ORM\Collection\Collection;
use Surreal\ORM\Statements\CreateStatement;
use Surreal\ORM\Statements\RemoveStatement;
use Surreal\ORM\Statements\UpdateStatement;

abstract class Model
{
    /**
     * The parameters for the query
     * @var array|null
     */
    protected ?array $params = null;

    public function get(): Collection
    {
        return new Collection([]);
    }

    public function find(int $id): Collection
    {
        return new Collection([]);
    }

    public function create(array $data): CreateStatement
    {
        return new CreateStatement();
    }

    public function update(array $data): UpdateStatement
    {
        return new UpdateStatement();
    }

    public function remove(): RemoveStatement
    {
        return new RemoveStatement();
    }
}