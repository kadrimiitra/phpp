<?php
include ('header.php');
?>
<br>
<br>
<h2>Ülemine tutvustus</h2>
<?php
$file = fopen("tutvustus.txt", "r") or die("Ei saa faili avada");
$line = fgets($file);
$data = explode("|", $line);
fclose($file);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updated_data = $data;

    if (!empty($_POST['myimage'])) {
        $updated_data[0] = $_POST['myimage'];
    }

    if (!empty($_POST['title'])) {
        $updated_data[1] = $_POST['title'];
    }

    if (!empty($_POST['subtitle'])) {
        $updated_data[2] = $_POST['subtitle'];
    }

    if (!empty($_POST['text'])) {
        $updated_data[3] = $_POST['text'];
    }




    $file = fopen("tutvustus.txt", "w") or die("Ei saa faili avada");
    fwrite($file, implode("|", $updated_data));
    fclose($file);


}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="myimage">Pildi nimi:</label>
    <input type="text" name="myimage" id="myimage" value="<?php echo $data[0]; ?>"><br><br>

    <label for="title">Pealkiri:</label><br>
    <textarea name="title" id="title" rows="4" cols="50"><?php echo $data[1]; ?></textarea><br><br>

    <label for="subtitle">Alampealkiri:</label>
    <input type="text" name="subtitle" id="subtitle" value="<?php echo $data[2]; ?>"><br><br>

    <label for="text">Tekst:</label>
    <input type="text" name="text" id="text" value="<?php echo $data[3]; ?>"><br><br>


    <input type="submit" value="Salvesta">
</form>
<br>
<br>
<br>
<h2>Alumine tutvustus</h2>
<?php
$file = fopen("minust.txt", "r") or die("Ei saa faili avada");
$line = fgets($file);
$data = explode("|", $line);
fclose($file);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updated_data = $data;

    if (!empty($_POST['image'])) {
        $updated_data[0] = $_POST['image'];
    }

    if (!empty($_POST['recap'])) {
        $updated_data[1] = $_POST['recap'];
    }

    if (!empty($_POST['years_experience'])) {
        $updated_data[2] = $_POST['years_experience'];
    }

    if (!empty($_POST['projects_completed'])) {
        $updated_data[3] = $_POST['projects_completed'];
    }

    if (!empty($_POST['companies_worked'])) {
        $updated_data[4] = $_POST['companies_worked'];
    }


    $file = fopen("minust.txt", "w") or die("Ei saa faili avada");
    fwrite($file, implode("|", $updated_data));
    fclose($file);


}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="image">Pildi nimi:</label>
    <input type="text" name="image" id="image" value="<?php echo $data[0]; ?>"><br><br>

    <label for="recap">Tekst:</label><br>
    <textarea name="recap" id="recap" rows="4" cols="50"><?php echo $data[1]; ?></textarea><br><br>

    <label for="years_experience">Aastate kogemus:</label>
    <input type="text" name="years_experience" id="years_experience" value="<?php echo $data[2]; ?>"><br><br>

    <label for="projects_completed">Lõpetatud projektide arv:</label>
    <input type="text" name="projects_completed" id="projects_completed" value="<?php echo $data[3]; ?>"><br><br>

    <label for="companies_worked">Ettevõtetes töötanud arv:</label>
    <input type="text" name="companies_worked" id="companies_worked" value="<?php echo $data[4]; ?>"><br><br>

    <input type="submit" value="Salvesta">
</form>


<?php
include ('footer.php');
?>