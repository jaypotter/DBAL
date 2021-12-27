<?php

namespace Potter\DBAL\Database;

use Potter\DBAL\Server\DatabaseServerInterface;

interface DatabaseInterface
{
    public function getName(): string;

    public function getServer(): DatabaseServerInterface;
}