<?php
    namespace App\Core;

    class Database
    {
    /**
     * @var Database The reference to *Database* instance of this class
     */
    private static $instance = null;

    /**
     * @var mysqli handler
     */
    private $mysqli;

    /**
     * Returns the *DB* instance of this class.
     *
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
        static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *DB* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
        $this->mysqli = new \MySQLI(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
        $this->mysqli->set_charset("utf8");
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *DB* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *DB*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }

    /**
     * Returns the database handler.
     *
     * @return mysqli The database handler.
     */
    public function handler()
    {
        return $this->mysqli;
    }

    /**
     * Runs a MySQL query.
     *
     * @param string The sql query.
     * @return false|mysqli_result The result of running the query.
     */
    public function query($sql)
    {
        return $this->mysqli->query($sql);
    }

    /**
     * Escapes the data to prevent MySQL injections.
     *
     * @param string The string to be escaped.
     * @return string The escaped string.
     */
    public function escape($data)
    {
        return $this->mysqli->real_escape_string($data);
    }

    }