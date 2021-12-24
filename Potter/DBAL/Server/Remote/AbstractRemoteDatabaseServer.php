<?php

namespace Potter\DBAL\Server\Remote;

use Potter\Connection\Remote\AbstractRemoteConnection;

abstract class AbstractRemoteDatabaseServer extends AbstractRemoteConnection implements RemoteDatabaseServerInterface
{
    private const PREFIX = 'db_remote';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}