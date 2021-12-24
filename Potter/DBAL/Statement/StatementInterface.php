<?php

namespace Potter\DBAL\Statement;

use Potter\DBAL\Server\DatabaseServerInterface;

interface StatementInterface
{
    public function execute(): void;
    
    public function fetch(): array;
}