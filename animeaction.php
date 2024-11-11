
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "config.php";
        if (isset($_POST['submit'])) {
        $namaanime = $_POST['namaanime'];
        $deskripsi = $_POST['deskripsi'];
        $file =basename($_FILES['file'] );
        $animestudio = $_POST['animestudio'];
        $animeepisode = $_POST['animeepisode'];
        $animerilis = $_POST['animerilis'];     
        $anime = implode(',',$_POST['anime']);  
        
      }    


        

        
        echo "<h2>Anime Output:</h2>";
        echo "<p>Nama Anime: $namaanime</p>";
        echo "<p>Deskripsi: $deskripsi</p>";
        
        
      

        echo "<p>Anime Studio: $animestudio</p>";
        echo "<p>Episode: $animeepisode</p>";
        echo "<p>Tanggal Rilis: $animerilis</p>";




       
        echo "<p>Genre: $anime</p>";

    $data= [
    'namaanime'=> $namaanime,
    'deskripsi' => $deskripsi,
    'file'=> $file,
    'animestudio'=> $animestudio,
    'animeepisode'=> $animeepisode,
    'animerilis'=> $animerilis,
    'anime'=> $anime,
    ];

    $validasi = validasiData($data);   
     
      if ($validasi == 0){
        echo "data siap di input";
      }
      else{
        echo "data $validasi kurang";
      }

    ?>
</body>


</html>

