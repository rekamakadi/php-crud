<?php
$title = "Simple PHP-CRUD - Add / Edit Contacts";
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
    <form action="">
        <div class="mb-3">
            <label for="name_first" class="form-label">First Name</label>
            <input type="text" class="form-control" id="name_first" placeholder="First Name">
        </div>
        <div class="mb-3">
            <label for="name-last" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="name_last" placeholder="Last Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="birthdate" class="form-label">Birthdate</label>
            <input type="date" class="form-control" id="birthdate" placeholder="Birthdate">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</body>

</html>