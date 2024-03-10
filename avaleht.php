<?php
include ('header.php');
?>

<div class="containerFirst">
    <div class="column">
        <?php
        // Loeme failist andmed
        $file = fopen("tutvustus.txt", "r") or die("Ei saa faili avada");
        // Loeme failist rea
        $line = fgets($file);
        // Sulgeme faili
        fclose($file);

        // Jagame rea osadeks
        $data = explode("|", $line);
        ?>
        <h1><?php echo $data[1]; ?></h1>
        <h3><?php echo $data[2]; ?></h3>
        <p><?php echo $data[3]; ?></p>
        <div class="containerButton">
            <button type="button" class="btn btn-icon">
                Palka mind
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="column">
        <img src="<?php echo $data[0]; ?>" alt="">
    </div>
</div>


<div class="containerTekst">
  <h2>Minust</h2>
<p>Minu parimad saavutused</p>
</div>

<div class="containerSecond">
    <?php
    $file = fopen("minust.txt", "r") or die("Ei saa faili avada");
    $line = fgets($file);
    fclose($file);

    $data = explode("|", $line);

    ?>
    <div class="columnSecond">
        <img src="<?php echo $data[0]; ?>" alt="">
    </div>

    <div class="columnSecond">
        <p><?php echo $data[1]; ?></p>
        <div class="containerNumber">
            <div class="years">
                <h2><?php echo $data[2]; ?></h2>
                <p>aastat kogemust</p>
            </div>
            <div class="projects">
                <h2><?php echo $data[3]; ?></h2>
                <p>projekti lõpetatud</p>
            </div>
            <div class="company">
                <h2><?php echo $data[4]; ?></h2>
                <p>ettevõttes töötanud</p>
            </div>
        </div>
        <div class="containerButton">
            <button type="button" class="btn btn-icon">
                Lae alla CV
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                </svg>
            </button>
        </div>
    </div>
</div>


<?php
include ('footer.php');
?>