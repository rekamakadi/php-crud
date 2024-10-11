<?php
require_once "../app/Database.php";

use App\Database;

$database = new Database();

$title = "Simple PHP-CRUD - Contacts";
$contacts = $database->getContacts();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?php echo $title ?></title>
</head>

<body class="container">
    <h1><?php echo $title ?></h1>
    <table class="table">

        <head>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>Actions</th>
            </tr>
        </head>
        <tbody>
            <?php foreach ($contacts as $contacts): ?>
            <tr>
                <td><?php echo $contacts['name_first']; ?></td>
                <td><?php echo $contacts['name_last']; ?></td>
                <td><?php echo $contacts['email']; ?></td>
                <td><?php echo $contacts['birthday']; ?></td>
                <td>
                    <a href="add_edit.php?id=<?php echo $contatct['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="delete.php" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="add_edit.php" class="btn btn-primary">Add Contact</a>
</body>

</html>