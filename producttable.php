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
            <?php
            $anime = viewAnime($koneksi);

        if($anime == 0){
            echo 'Data Anime Kosong';
        }
        else if($buku == 1)

            ?>
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">Anime</th>
                    <th class="border border-gray-300 px-4 py-2">Genre</th>
                    <th class="border border-gray-300 px-4 py-2">Poster</th>
                    <th class="border border-gray-300 px-4 py-2">Deskripsi</th>
                    <th class="border border-gray-300 px-4 py-2">Episode</th>
                    <th class="border border-gray-300 px-4 py-2">Studio</th>
                    <th class="border border-gray-300 px-4 py-2">Tanggal Rilis</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white">
                    <td class="border border-gray-300 px-6 py-2">tes</td>
                    <td class="border border-gray-300 px-6 py-2"></td>
                    <td class="border border-gray-300 px-6 py-2"></td>
                    <td class="border border-gray-300 px-6 py-2"></td>
                    <td class="border border-gray-300 px-6 py-2"></td>
                    <td class="border border-gray-300 px-6 py-2"></td>
                    <td class="border border-gray-300 px-6 py-2"></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>