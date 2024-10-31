
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
        
        $namaanime = $_POST['namaanime'];
        $deskripsi = $_POST['deskripsi'];
        $fileupload = $_FILES['fileupload'];
        $animestudio = $_POST['animestudio'];
        $animeepisode = $_POST['animeepisode'];
        $animerilis = $_POST['animerilis'];
        $anime = isset($_POST['anime']) ? $_POST['anime'] : [];
        

        
        echo "<h2>Anime Output:</h2>";
        echo "<p>Nama Anime: $namaanime</p>";


        echo "<p>Anime Studio: $animestudio</p>";
        echo "<p>Episode: $animeepisode</p>";
        echo "<p>Tanggal Rilis: $animerilis</p>";

        echo "<p>Genre: ";
        echo !empty($anime) ? implode(", ", $anime) : "Admin bingung genrenya apa nih";
        echo "</p>";
    }
    ?>
</body>
</html>