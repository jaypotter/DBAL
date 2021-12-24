<?php

namespace Potter\DBAL\PDO;

use Potter\DBAL\Database\DatabaseInterface;

interface PDOInterface extends DatabaseInterface
{
    public function getDriver(): string;
}