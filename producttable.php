<?php
require "config/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Anime</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

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
                        <th class="border border-gray-300 px-4 py-2">Pilih</th>
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Anime</th>
                        <th class="border border-gray-300 px-4 py-2">Genre</th>
                        <th class="border border-gray-300 px-4 py-2">Poster</th>
                        <th class="border border-gray-300 px-4 py-2">Deskripsi</th>
                        <th class="border border-gray-300 px-4 py-2">Episode</th>
                        <th class="border border-gray-300 px-4 py-2">Studio</th>
                        <th class="border border-gray-300 px-4 py-2">Tanggal Rilis</th>
                    </tr>
                    <?php
                    // awalan foreach 
                    $no = 1;
                    foreach ($anime as $data) {
                    ?>
            </thead>

            <tbody>
                <tr class="bg-white">
                    <td class="border border-gray-300 px-6 py-2"><input type="checkbox" name="selected_id[]"></td>
                    <td class="border border-gray-300 px-6 py-2"><?= $no ?></td>
                    <td class="border border-gray-300 px-6 py-2"><?= $data['anime_nama'] ?></td>
                    <td class="border border-gray-300 px-6 py-2"><?= $data['anime_genre'] ?></td>
                    <td class="border border-gray-300 px-6 py-2"><?= $data['anime_poster'] ?></td>
                    <td class="border border-gray-300 px-6 py-2"><?= $data['anime_sinopsis'] ?></td>
                    <td class="border border-gray-300 px-6 py-2"><?= $data['anime_episode'] ?></td>
                    <td class="border border-gray-300 px-6 py-2"><?= $data['anime_studio'] ?></td>
                    <td class="border border-gray-300 px-6 py-2"><?= $data['tanggal_rilis'] ?></td>
                </tr>
            <?php
                        $no++;
                    }
                    // akhiran foreach
            ?>
            </tbody>
        </table>
    <?php } ?>
    <div class="mt-6">
    <a href="aniwatchform.php">
    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add</button>
    </a>
    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
    </div>
    </div>
</body>