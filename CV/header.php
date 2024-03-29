<!doctype html>
<html lang="et">
    <head>
        <title>CV</title>

        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />


        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="cv.css">

    </head>

    <body>


<div class="container">


<?php
if (!empty($_GET['leht'])) {
    $leht = htmlspecialchars($_GET['leht']);
    if (is_file($leht . '.php')) {
        include($leht . '.php');
    } else {
        $msg = 'Lehte ei leitud';
    }
} else {
    $msg = '';
}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="#">Kadri.ee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active purple-link" aria-current="page" href="index.php">Avaleht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tehtudtood.php">Tehtud tööd</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?leht=oskused">Oskused</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?leht=contact">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
if (!empty($msg)) {
    echo '<div style="background-color: #ffcccc; color: #ff0000; padding: 10px;">' . $msg . '</div>';
}
?>
