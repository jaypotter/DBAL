<?php

namespace Potter\DBAL\MySQLi;

use \MySQLi;

trait MySQLiHandleTrait
{
    private MySQLi $handle;

    final public function getHandle(): MySQLi
    {
        return $this->handle;
    }

    final public function setHandle(MySQLi $handle): void
    {
        $this->handle = $handle;
    }
}