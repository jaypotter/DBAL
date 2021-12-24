<?php

namespace Potter\DBAL\Statement;

use Potter\DBAL\Server\DatabaseServerInterface;

abstract class AbstractStatement implements StatementInterface
{
    abstract public function bindParam(int $index, int $type, mixed &$var): void;
    
    abstract public function execute(): void;

    abstract public function fetch(): array;
}