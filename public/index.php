<?php
$title = "Simple PHP-CRUD - Contacts";
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
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>test@test.com</td>
                <td>1999-01-01</td>
                <td>
                    <a href="add_edit.php" class="btn btn-primary">Edit</a>
                    <a href="delete.php" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="add_edit.php" class="btn btn-primary">Add Contact</a>
</body>

</html>