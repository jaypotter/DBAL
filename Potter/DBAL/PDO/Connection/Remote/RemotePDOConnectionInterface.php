<?php

namespace Potter\DBAL\PDO\Connection\Remote;

use Potter\{
    Connection\Remote\RemoteConnectionInterface,
    DBAL\PDO\Connection\PDOConnectionInterface
};                

interface RemotePDOConnectionInterface extends PDOConnectionInterface, RemoteConnectionInterface
{

}