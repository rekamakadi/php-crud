<?php

namespace App;

require __DIR__ . '../../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

use mysqli;

class Database
{
    private $dbconn;

    public function __construct()
    {
        $this->dbconn = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);

        if (!$this->dbconn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function getContacts()
    {
        $sql = "SELECT * FROM contacts";
        $result = mysqli_query($this->dbconn, $sql);
        $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $contacts;
    }
}
