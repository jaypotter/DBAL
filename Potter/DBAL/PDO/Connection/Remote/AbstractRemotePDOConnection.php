<?php

namespace Potter\DBAL\PDO\Connection\Remote;

use Potter\{
    Connection\Remote\AbstractRemoteConnection,
    DBAL\PDO\Connection\PDOConnectionTrait
};

abstract class AbstractRemotePDOConnection extends AbstractRemoteConnection implements RemotePDOConnectionInterface
{
    use PDOConnectionTrait;
}