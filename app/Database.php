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

    public function addContact($name_first, $name_last, $email, $birthdate)
    {
        $sql = "INSERT INTO contacts (name_first, name_last, email, birthdate) VALUES ('$name_first', '$name_last', '$email', '$birthdate')";
        mysqli_query($this->dbconn, $sql);
    }

    public function getContact($id)
    {
        $sql = "SELECT * FROM contacts WHERE id = $id";
        $result = mysqli_query($this->dbconn, $sql);
        $contact = mysqli_fetch_assoc($result);
        return $contact;
    }

    public function updateContact($id, $name_first, $name_last, $email, $birthdate)
    {
        $sql = "UPDATE contacts SET name_first = '$name_first', name_last = '$name_last', email = '$email', birthdate = '$birthdate' WHERE id = $id";
        mysqli_query($this->dbconn, $sql);
    }

    public function deleteContact($id)
    {
        $sql = "DELETE FROM contacts WHERE id = $id";
        mysqli_query($this->dbconn, $sql);
    }
}
