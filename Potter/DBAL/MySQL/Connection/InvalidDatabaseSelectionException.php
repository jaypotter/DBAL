<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\{
    DBAL\Throwable\DBALThrowableInterface,
    Throwable\Exception\AbstractInvalidSelectionException
};

final class InvalidDatabaseSelectionException extends AbstractInvalidSelectionException implements DBALThrowableInterface
{

}