<?php

class PasswordReminder
{
    /**
     * @var MySQLConnection
     */
    protected $dbConnection;

    /**
     * @param MySQLConnection $dbConnection
     */
    public function __construct(MySQLConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}

$passwordReminder = new PasswordReminder(new MySQLConnection());