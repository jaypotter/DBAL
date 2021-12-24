<?php

namespace Potter\DBAL\Statement;

use Potter\DBAL\Server\DatabaseServerInterface;

abstract class AbstractStatement implements StatementInterface
{
    abstract public function __construct(DatabaseServerInterface $server, string $statement);

    abstract public function fetch(): array;
}