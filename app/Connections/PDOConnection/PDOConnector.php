<?php

namespace App\Connections\PDOConnection;

use \PDO;
use \PDOException;
use \Exception;
use App\Connections\Helpers\ConnectionInterface;

/**
 * This is a connector class that connects to the MySQL Database using
 * PDO.
 */
class PDOConnector implements ConnectionInterface
{
    private static $instance = null;
    private static $con = null;
    private static $host = "127.0.0.1";
    private static $database = "priestland_erp";
    private static $username = "main";
    private static $password = "main";

    private function __construct()
    {
        try {
            /**
             * Set connection
             */
            self::$con = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$database, self::$username, self::$password);

            // Set PDO Error mode to Exception
            @self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception("Failed to connect to server" . $e->getMessage());
        }
    }

    public function isconnect(): bool
    {

        return true;
    }

    public function disconnect(): void
    {
        $this->con = null;
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            return self::$instance = new PDOConnector(self::$host, self::$database, self::$username, self::$password);
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return self::$con;
    }

    public function __clone()
    {
    }
}
