<?php

require_once('function/helper.php');

session_start();

$page = isset($_GET['page']) ? ($_GET['page']) : false;

if ($_SESSION['id'] == null) {
    header("location: " . BASE_URL);
    exit();
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">To Do List App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASE_URL . 'dashboard.php?page=home' ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL . 'dashboard.php?page=create' ?>">Create</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </br>
    </br>
    <h1 align="center">To Do List</h1>

    <div class="content">
        <div class="container">
            <div class="sub-content mt-5">
                <?php

                $filename = "page/$page.php";

                if (file_exists($filename)) {
                    include_once($filename);
                } else {
                    echo "404 Not Found";
                }

                ?>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="sub-content mt-5">
                <?php

                $filename = "page/$page.php";

                if (file_exists($filename)) {
                    include_once($filename);
                } else {
                    echo "404 Not Found";
                }

                ?>
            </div>
        </div>
    </div>


    </br>
    </br>
    </br>
    </br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>