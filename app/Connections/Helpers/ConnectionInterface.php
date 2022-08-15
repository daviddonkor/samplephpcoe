<?php

/**
 * This file defines the connection interface for all classes that connect to databases.
 * It must be implemented by all classess connecting to one database or the other.
 * 
 */

namespace App\Connections\Helpers;

interface ConnectionInterface
{


    /**
     * Releases system resources from the database connection
     */
    public function disconnect(): void;


    /**
     * This is a singleton function to get the instance of the connection
     */
    public static function getInstance();
}
