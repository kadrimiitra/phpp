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
                  <a class="nav-link" href="teenused.html">Teenused</a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="#"
                    style="background-color: rgb(18, 126, 233); color: #fff"
                    >Kontakt</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <div class="container">
    <h1 class="mt-5">Rendi auto juba täna!</h1>

    <?php
    // Kui vorm on esitatud
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Funktsioon vormi andmete valideerimiseks
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        // Kontrolli, kas sisendväljad on täidetud ja valideeritud
        $service_fee = $days = $total_cost = $extra_cost = 0;
        $errors = false;

        if (empty($_POST["service_fee"]) || empty($_POST["days"])) {
            $errors = true;
        } else {
            $service_fee = test_input($_POST["service_fee"]);
            $days = test_input($_POST["days"]);
        }

        if (!empty($_POST["extra"])) {
            $extra_cost = test_input($_POST["extra"]);
        }

        if (!$errors) {
            // Kalkuleeri teenuse maksumus
            $total_cost = ($service_fee * $days) + $extra_cost;
        } else {
            // Kuvame veateate, kui väljad on täitmata
            echo '<div class="alert alert-danger mt-3">Palun täitke kõik väljad.</div>';
        }
    }
    ?>

    <!-- Vorm teenuse kalkuleerimiseks -->
    <form method="post" action="" class="mt-3">
        <div class="form-group">
            <label for="service_fee">Rendi päevahind:</label>
            <input
                type="number"
                class="form-control"
                id="service_fee"
                name="service_fee"
                value="<?php echo $service_fee; ?>"
                required
            />
        </div>
        <div class="form-group">
            <label for="days">Päevad:</label>
            <input
                type="number"
                class="form-control"
                id="days"
                name="days"
                value="<?php echo $days; ?>"
                required
            />
        </div>
        <!-- Lisaelement, näiteks rippmenüü -->
        <div class="form-group">
            <label for="extra">Lisateenused:</label>
            <select class="form-control" id="extra" name="extra">
                <option value="0">Vali lisateenus</option>
                <option value="15">Kindlustus - 15€</option>
                <option value="30">Juht - 30€</option>
                <option value="10">Laste turvatool - 10€</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Arvuta</button>
    </form>

    <!-- Kui kalkulatsioon on tehtud, kuvame tulemuse -->
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !$errors): ?>
    <div class="alert alert-success mt-3">
        Teenuse maksumus: <?php echo $total_cost; ?> eurot
    </div>
    <?php endif; ?>
</div>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
