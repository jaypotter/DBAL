<?php

namespace Potter\DBAL\PDO;

use Potter\DBAL\Database\AbstractDatabase;

abstract class AbstractPDO extends AbstractDatabase implements PDOInterface
{
    public function getDriver(): string
    {
        return '';
    }
}