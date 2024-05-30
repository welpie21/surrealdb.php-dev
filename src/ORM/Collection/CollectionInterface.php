<?php

namespace Surreal\ORM\Collection;

interface CollectionInterface
{
    public function first();
    public function last();
    public function count();
    public function get();
}