<?php

namespace Potter\DBAL\Server;

use Potter\{
    DBAL\Throwable\DBALThrowableInterface,
    Throwable\Exception\Runtime\AbstractInvalidSelectionException
};

final class InvalidDatabaseSelectionException extends AbstractInvalidSelectionException implements DBALThrowableInterface
{

}