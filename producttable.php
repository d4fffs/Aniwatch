<?php
require "config/config.php";

if (isset($_POST["delete"]) && isset($_POST["selected_id"])) {
    foreach ($_POST["selected_id"] as $id) {
        $delete = "DELETE FROM anime WHERE anime.anime_id= $id";
        mysqli_query($koneksi,  $delete);
        break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Anime</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<form action="" method="POST">

    <body class="bg-gray-100 p-8">
        <div class="container mx-auto">
            <table class="min-w-full border border-gray-300">
                <thead>

                    <?php
                    $anime = viewAnime($koneksi);

                    if ($anime == 0) {
                        echo 'Data Anime Kosong';
                    } else {

                    ?>
                        <tr class="bg-gray-200">
                            
                            <th class="border border-gray-300 px-4 py-2">No</th>
                            <th class="border border-gray-300 px-4 py-2">Anime</th>
                            <th class="border border-gray-300 px-4 py-2">Genre</th>
                            <th class="border border-gray-300 px-4 py-2">Poster</th>
                            <th class="border border-gray-300 px-4 py-2">Deskripsi</th>
                            <th class="border border-gray-300 px-4 py-2">Episode</th>
                            <th class="border border-gray-300 px-4 py-2">Studio</th>
                            <th class="border border-gray-300 px-4 py-2">Tanggal Rilis</th>
                            <th class="border border-gray-300 px-4 py-2">Edit</th>
                            <th class="border border-gray-300 px-4 py-2">Delete</th>
                        </tr>
                        <?php
                        // awalan foreach 
                        $no = 1;
                        foreach ($anime as $data) {
                        ?>
                </thead>

                <tbody>
                    <tr class="bg-white">
                        <td class="border border-gray-300 px-6 py-2"><?= $no ?></td>
                        <td class="border border-gray-300 px-6 py-2"><?= $data['anime_nama'] ?></td>
                        <td class="border border-gray-300 px-6 py-2"><?= $data['anime_genre'] ?></td>
                        <td class="border border-gray-300 px-6 py-2"><?= $data['anime_poster'] ?></td>
                        <td class="border border-gray-300 px-6 py-2"><?= $data['anime_sinopsis'] ?></td>
                        <td class="border border-gray-300 px-6 py-2"><?= $data['anime_episode'] ?></td>
                        <td class="border border-gray-300 px-6 py-2"><?= $data['anime_studio'] ?></td>
                        <td class="border border-gray-300 px-6 py-2"><?= $data['tanggal_rilis'] ?></td>
                        <td class="border border-gray-300 px-6 py-2 hover:underline text-green-500">Edit</td>
                        <td class="border border-gray-300 px-6 py-2 hover:underline text-red-500"><a href="?del=<?=$data['anime_id']?>">Delete</a></td>
                    </tr>
                <?php
                            $no++;
                        }
                        // akhiran foreach
                ?>
                </tbody>
            </table>
        <?php } ?>
</form>

</body>