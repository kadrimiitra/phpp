<?php
include ('header.php');
?>
<br>
<br>
<h2>Ülemine tutvustus</h2>
<?php
$file1 = fopen("tutvustus.txt", "r") or die("Ei saa faili avada");
$line1 = fgets($file1);
$data1 = explode("|", $line1);
fclose($file1);

$uploadDirectory = "uploads/";

$images1 = glob($uploadDirectory . "*.{jpg,jpeg,png,webp,gif}", GLOB_BRACE);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updated_data1 = $data1;

    if (!empty($_POST['myimage'])) {
        $updated_data1[0] = $_POST['myimage'];
    }

    if (!empty($_POST['title'])) {
        $updated_data1[1] = $_POST['title'];
    }

    if (!empty($_POST['subtitle'])) {
        $updated_data1[2] = $_POST['subtitle'];
    }

    if (!empty($_POST['text'])) {
        $updated_data1[3] = $_POST['text'];
    }

    $file1 = fopen("tutvustus.txt", "w") or die("Ei saa faili avada");
    fwrite($file1, implode("|", $updated_data1));
    fclose($file1);
    $file1 = fopen("tutvustus.txt", "r") or die("Ei saa faili avada");
    $line1 = fgets($file1);
    $data1 = explode("|", $line1);
    fclose($file1);
}
?>

<form method="post" enctype="multipart/form-data">

    <label for="myimage">Pilt:</label>
    <select name="myimage" id="myimage">
        <option value="">Vali pilt</option>
        <?php foreach ($images1 as $image): ?>
            <option value="<?php echo $image; ?>" <?php if ($data1[0] == $image) echo 'selected="selected"'; ?>><?php echo basename($image); ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label for="title">Pealkiri:</label><br>
    <textarea name="title" id="title" rows="4" cols="50"><?php echo $data1[1]; ?></textarea><br><br>

    <label for="subtitle">Alampealkiri:</label>
    <input type="text" name="subtitle" id="subtitle" value="<?php echo $data1[2]; ?>"><br><br>

    <label for="text">Tekst:</label>
    <input type="text" name="text" id="text" value="<?php echo $data1[3]; ?>"><br><br>

    <input type="submit" value="Salvesta">
</form>
<br>
<br>
<br>
<h2>Alumine tutvustus</h2>
<?php
$file2 = fopen("minust.txt", "r") or die("Ei saa faili avada");
$line2 = fgets($file2);
$data2 = explode("|", $line2);
fclose($file2);
$uploadDirectory = "uploads/";

$images2 = glob($uploadDirectory . "*.{jpg,jpeg,png,webp,gif}", GLOB_BRACE);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updated_data2 = $data2;

    if (!empty($_POST['image'])) {
        $updated_data2[0] = $_POST['image'];
    }

    if (!empty($_POST['recap'])) {
        $updated_data2[1] = $_POST['recap'];
    }

    if (!empty($_POST['years_experience'])) {
        $updated_data2[2] = $_POST['years_experience'];
    }

    if (!empty($_POST['projects_completed'])) {
        $updated_data2[3] = $_POST['projects_completed'];
    }

    if (!empty($_POST['companies_worked'])) {
        $updated_data2[4] = $_POST['companies_worked'];
    }


    $file2 = fopen("minust.txt", "w") or die("Ei saa faili avada");
    fwrite($file2, implode("|", $updated_data2));
    fclose($file2);
    $file2 = fopen("minust.txt", "r") or die("Ei saa faili avada");
    $line2 = fgets($file2);
    $data2 = explode("|", $line2);
    fclose($file2);
}
?>

<form method="post"  enctype="multipart/form-data">
<label for="image">Pilt:</label>
    <select name="image" id="image">
        <option value="">Vali pilt</option>
        <?php foreach ($images2 as $image): ?>
            <option value="<?php echo $image; ?>" <?php if ($data2[0] == $image) echo 'selected="selected"'; ?>><?php echo basename($image); ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label for="recap">Tekst:</label><br>
    <textarea name="recap" id="recap" rows="4" cols="50"><?php echo $data2[1]; ?></textarea><br><br>

    <label for="years_experience">Aastate kogemus:</label>
    <input type="text" name="years_experience" id="years_experience" value="<?php echo $data2[2]; ?>"><br><br>

    <label for="projects_completed">Lõpetatud projektide arv:</label>
    <input type="text" name="projects_completed" id="projects_completed" value="<?php echo $data2[3]; ?>"><br><br>

    <label for="companies_worked">Ettevõtetes töötanud arv:</label>
    <input type="text" name="companies_worked" id="companies_worked" value="<?php echo $data2[4]; ?>"><br><br>



    <input type="submit" value="Salvesta">
</form>


<?php
include ('footer.php');
?>
