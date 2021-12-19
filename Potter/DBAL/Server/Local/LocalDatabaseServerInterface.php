<?php

namespace Potter\DBAL\Server\Local;

use Potter\{
    Connection\Local\LocalConnectionInterface,
    DBAL\Server\DatabaseServerInterface
};

interface LocalDatabaseServerInterface extends DatabaseServerInterface, LocalConnectionInterface
{

}