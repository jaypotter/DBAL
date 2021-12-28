<?php

namespace Potter\DBAL\Database;

use Potter\DBAL\Server\DatabaseServerInterface;

abstract class AbstractDatabase implements DatabaseInterface
{
    abstract public function getName(): string;

    abstract public function getServer(): DatabaseServerInterface;

    abstract public function getTable(string $database): DatabaseInterface;

    abstract public function getTables(): array;

    abstract public function tableExists(string $database): bool;
}