<?php

interface ConnectionInterface
{
    public function connect();
}

// high level module depends and conforms upon/to the abstraction
class PasswordReminder
{
    /**
     * @var ConnectionInterface
     */
    protected $dbConnection;

    /**
     * @param ConnectionInterface $dbConnection
     */
    public function __construct(ConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}

// low level module depends/conforms upon/to the abstraction
class MySQLConnection implements ConnectionInterface
{
    public function connect()
    {
        //
    }
}

$passwordReminder = new PasswordReminder(new MySQLConnection());