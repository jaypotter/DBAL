<?php

namespace Potter\DBAL\Database;

abstract class AbstractDatabase implements DatabaseInterface
{
    abstract public function getName(): string;

    abstract public function query(string $query): array;
}