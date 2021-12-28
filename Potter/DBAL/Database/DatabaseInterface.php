<?php

namespace Potter\DBAL\Database;

use Potter\DBAL\Server\DatabaseServerInterface;

interface DatabaseInterface
{
    public function getName(): string;

    public function getServer(): DatabaseServerInterface;

    public function getTable(string $database): DatabaseInterface;

    public function getTables(): array;

    public function tableExists(string $database): bool;
}