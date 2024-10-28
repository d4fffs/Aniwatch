<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action= "action.php" enctype="multipart/form-data" method="POST">
        Nama: <input type="text" name="Nama"> <br>
        NIS: <input type="number" name="NIS"> <br>
        NISN: <input type="text" name="NISN"> <br>
        Tanggal Lahir: <input type="date" name="Tanggal Lahir"> <br>
        <select name="Jurusan" id="">
            <option value="0">Pilih Jurusan</option>
            <option value="1">PPLG</option>
            <option value="2">AKL</option>
            <option value="3">DKV</option>
            <option value="4">MPLB</option>
            <option value="5">KL</option>
            <option value="6">SP</option>
            <option value="7">BCF</option>
            <option value="8">TJKT</option>
        </select> <br>
        Alamat: <textarea name="Alamat"></textarea> <br>
        No. HP: <input type="number" name="no_hp"> <br>
        Gender: <br />
        <input name="Gender" type="radio" value="Cowok">Cowok
        <input name="Gender" type="radio" value="Cewek">Cewek <br>
        Hobi: <br>
        <input type="checkbox" name="Hobi[]" value="Tidur" id="Tidur">
        <label for="Tidur">Tidur</label><br>
        <input type="checkbox" name="Hobi[]" value="Main Game" id="MainGame">
        <label for="MainGame">Main Game</label><br>
        <input type="checkbox" name="Hobi[]" value="Liat Film" id="LiatFilm">
        <label for="LiatFilm">Liat Film</label><br>
        <input type="checkbox" name="Hobi[]" value="Makan" id="Makan">
        <label for="Makan">Makan</label><br>
        Foto:
        <input type="file" name="Foto"> <br>
        <input type="submit" name="submit" value="Kirim File">
    </form>
</body>

</html>