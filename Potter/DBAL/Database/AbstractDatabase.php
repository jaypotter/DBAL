<?php

namespace Potter\DBAL\Database;

require_once __DIR__ . '/DatabaseInterface.php';

abstract class AbstractDatabase implements DatabaseInterface
{
    abstract public function getName(): string;

    abstract public function query(string $query): array;
}