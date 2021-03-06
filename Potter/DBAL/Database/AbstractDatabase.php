<?php

namespace Potter\DBAL\Database;

use Potter\DBAL\Server\DatabaseServerInterface;

abstract class AbstractDatabase implements DatabaseInterface
{
    abstract public function getName(): string;

    abstract public function getServer(): DatabaseServerInterface;
}