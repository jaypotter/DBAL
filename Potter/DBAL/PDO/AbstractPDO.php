<?php

namespace Potter\DBAL\PDO;

require_once __DIR__ . '/PDOInterface.php';

require_once __DIR__ . '/../Database/AbstractDatabase.php';

use Potter\DBAL\Database\AbstractDatabase;

abstract class AbstractPDO extends AbstractDatabase implements PDOInterface
{

}