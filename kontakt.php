<!DOCTYPE html>
<html lang="et">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BS1</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap"
    />
    <style>
      body {
        font-family: "Montserrat", sans-serif;
      }
      .sitename {
        font-size: 32px;
        font-weight: 600;
      }
      .headers {
        font-weight: 300;
      }
      .card-text {
        font-weight: 200;
      }
      .container {
        max-width: 1200px;
      }

      .card {
        border: none;
      }
      * {
        margin: 0;
        padding: 0;
      }

      .bi {
        color: black;
      }
      .hover:hover {
        background-color: rgb(79, 79, 79);
      }
      .hover:hover .card-body {
        color: white;
      }

      .card-header {
        border-bottom: none;
      }
      .small-button {
        width: fit-content;
      }
      .container-text {
        margin-top: 80px;
      }
      .h1{
        margin-top:80px;
      }
      .profile {
      margin-bottom: 40px;
    }
    .profile img {
      max-width: 100%;
      height: auto;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div
        class="modal fade"
        id="searchModal"
        tabindex="-1"
        aria-labelledby="searchModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="searchModalLabel">Search</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your search query..."
                  />
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-light d-none d-lg-block">
        <div class="container">
          <div class="navbar-nav ms-auto d-flex align-items-center">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#"
                  ><i class="bi bi-envelope"></i> jaan@kadri.com</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"
                  ><i class="bi bi-headphones"></i> +123456789</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"
                  ><i class="bi bi-three-dots-vertical"></i
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-facebook"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-twitter"></i></a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#"
                  data-bs-toggle="modal"
                  data-bs-target="#searchModal"
                  ><i class="bi bi-search"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-navbar">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand sitename">Kadri</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="bs1.html">Avaleht</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tooted</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="teenused.php">Teenused</a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="kontakt.php"
                    style="background-color: rgb(18, 126, 233); color: #fff"
                    >Kontakt</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
<h1 class="h1 text-center">Minu oskused</h1>
      <?php

$oskused = ["HTML", "CSS", "Bootstrap", "PHP"];
$varvid = ["primary", "secondary", "success", "danger", "warning", "info", "dark"];

function getRandomColor($varvid) {
    $index = array_rand($varvid);
    return $varvid[$index];
}

echo '<div class="container">';

for ($i = 0; $i < count($oskused); $i++) {
    $value = rand(10, 100);
    $varv = getRandomColor($varvid);

    echo '<div class="progress mb-3">';
    echo '<div class="progress-bar bg-' . $varv . '" role="progressbar" style="width: ' . $value . '%" aria-valuenow="' . $value . '" aria-valuemin="0" aria-valuemax="100">' . $oskused[$i] . '</div>';
    echo '</div>';
}

echo '</div>';
?>



  <div class="container">
  <h2 class="text-center h1">Meie töötajad</h2>
  <div class="row">
    <?php
  
    $files = glob("pildid/*.jpeg");

    $employees = array(
        "Devlin" => "devlin@kadri.com",
        "Freeland" => "freeland@kadri.com",
        "Gabriel" => "gabriel@kadri.com",
        "Pete" => "pete@kadri.com",
        "Peterus" => "peterus@kadri.com",
        "Prentice" => "prentice@kadri.com"
    );

    foreach($files as $file) {
        
        $filename = pathinfo($file, PATHINFO_FILENAME);

        $email = isset($employees[$filename]) ? $employees[$filename] : 'Email not available';
    ?>
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="profile text-center">
        <img src="<?php echo $file; ?>" alt="<?php echo $filename; ?>" class="img-fluid">
        <h3><?php echo ucfirst($filename); ?></h3>
        <p>Email: <strong><?php echo $email; ?></strong></p>
      </div>
    </div>
    <?php } ?>
  </div>
</div>









    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
