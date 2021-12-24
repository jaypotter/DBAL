<?php

namespace Potter\DBAL\Statement;

use Potter\DBAL\Server\DatabaseServerInterface;

interface StatementInterface
{
    public function __construct(DatabaseServerInterface $server, string $statement);
}