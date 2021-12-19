<?php

namespace Potter\DBAL\PDO;

use Potter\DBAL\Database\AbstractDatabase;

abstract class AbstractPDO extends AbstractDatabase implements PDOInterface
{
    private const PREFIX = 'pdo';

    public function getDriver(): string
    {

    }

    public function getPrefix(): string
    {
        return self::PREFIX . '/' . $this->getDriver();
    }
}