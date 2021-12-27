<?php

namespace Potter\DBAL\MySQLi;

use Potter\{
    DBAL\Throwable\DBALThrowableInterface,
    Throwable\Flag\AbstractCodeInjectionFlag
};

final class MySQLiInjectionFlag extends AbstractCodeInjectionFlag implements DBALThrowableInterface
{

}