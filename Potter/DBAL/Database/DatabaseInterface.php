<?php

namespace Potter\DBAL\Database;

use Potter\DBAL\Server\ServerInterface;

interface DatabaseInterface
{
    public function getName(): string;

    public function getServer(): ServerInterface;
}