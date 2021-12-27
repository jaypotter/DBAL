<?php

namespace Potter\DBAL\MySQLi;

use Potter\{
    DBAL\Throwable\DBALThrowableInterface,
    Throwable\Exception\AbstractInvalidSelectionException
};

final class InvalidDatabaseSelectionException extends AbstractInvalidSelectionException implements DBALThrowableInterface
{

}