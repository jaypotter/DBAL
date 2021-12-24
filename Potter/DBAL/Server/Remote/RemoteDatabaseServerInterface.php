<?php

namespace Potter\DBAL\Server\Remote;

use Potter\{
    Connection\Remote\RemoteConnectionInterface,
    DBAL\Server\DatabaseServerInterface
};

interface RemoteDatabaseServerInterface extends DatabaseServerInterface, RemoteConnectionInterface
{

}