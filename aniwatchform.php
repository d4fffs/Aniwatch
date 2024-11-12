<?php
require_once "config/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">
    <style>
       ::-webkit-scrollbar{
            overflow-y: hidden;
        }
    </style>
<div class="container mx-auto">
    <div class="bg-black rounded-lg shadow-md p-6 my-20">
        <form action="" enctype="multipart/form-data" method="POST">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-center mt-5 text-6xl font-bold leading-7 text-green-500">Aniwatch</h2>
            <h2 class="text-center mt-4 text-3xl font-semibold leading-10 text-green-500">Anime Input</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                <label for="username" class="block text-xl font-bold leading-6 text-green-500">Nama Anime</label>
                <div class="mt-2">
                    <div class="flex rounded-lg shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="namaanime" id="username" autocomplete="username" class="block rounded-md flex-1 border-0 bg-transparent py-1.5 pl-1 text-black-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 bg-white" placeholder="Nama Anime" >
                    </div>
                </div>
                </div>

                <div class="col-span-full">
                <label for="about" class="block text-xl font-bold leading-6 text-green-500">Deskripsi</label>
                <div class="mt-2">
                    <textarea id="about" name="deskripsi" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
                <p class="mt-3 text-lg leading-6 text-white">Masukkan deskripsi singkat tentang anime yang dimasukkan.</p>
                </div>

                <div class="col-span-full">
                <label for="cover-photo" class="block text-xl font-bold leading-9 text-green-500">Anime Poster</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10 bg-white">
                    <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                    </svg>
                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                        <span>Masukkan Foto</span>
                        <input id="file-upload" name="file" type="file" class="sr-only">
                        </label>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                <label for="first-name" class="block text-xl font-bold leading-6 text-green-500">Anime Studio</label>
                <div class="mt-2">
                    <input type="text" name="animestudio" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <div class="sm:col-span-3 mt-6">
                <label for="first-name" class="block text-xl font-bold leading-6 text-green-500">Anime Episode</label>
                <div class="mt-2">
                    <input type="number" name="animeepisode" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <div class="sm:col-span-3 mt-6">
                    <label for="first-name" class="mt-6 block text-xl font-medium leading-6 text-green-500">Tanggal Rilis</label>
                    <div class="mt-2">
                        <input type="date" name="animerilis" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
        </div>
            <div class="mt-10 space-y-10">
                <fieldset>
                <legend class="text-xl font-bold leading-6 text-green-500">Genre</legend>
                <div class="mt-6 space-y-6">
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="comments" name="anime[]" type="checkbox" value="Action" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-lg leading-6">
                        <label for="comments" class="font-medium text-white">Action</label>
                    </div>
                    </div>
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="candidates" name="anime[]" type="checkbox" value="Supernatural" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-lg leading-6">
                        <label for="candidates" class="font-medium text-white">Supernatural</label>
                    </div>
                    </div>
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="offers" name="anime[]" type="checkbox" value="Shounen" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-lg leading-6">
                        <label for="offers" class="font-medium text-white">Shounen</label>
                    </div>
                </div>
                 <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="comments" name="anime[]" type="checkbox" value="Romance" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-lg leading-6">
                        <label for="comments" class="font-medium text-white">Romance</label>
                    </div>
                    </div>
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="comments" name="anime[]" type="checkbox" value="Sci-Fi" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-lg leading-6">
                        <label for="comments" class="font-medium text-white">Sci-Fi</label>
                    </div>
                    </div>
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="comments" name="anime[]" type="checkbox" value="Horror" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-lg leading-6">
                        <label for="comments" class="font-medium text-white">Horror</label>
                    </div>
                    </div>
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="comments" name="anime[]" type="checkbox" value="Fantasy" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-lg leading-6">
                        <label for="comments" class="font-medium text-white">Fantasy</label>
                    </div>
                    </div>
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="comments" name="anime[]" type="checkbox" value="Adventure" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-lg leading-6">
                        <label for="comments" class="font-medium text-white">Adventure</label>
                    </div>
                    </div>
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="comments" name="anime[]" type="checkbox" value="Comedy" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-lg leading-6">
                        <label for="comments" class="font-medium text-white">Comedy</label>
                    </div>
                    </div>
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="comments" name="anime[]" type="checkbox" value="Mystery" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-lg leading-6">
                        <label for="comments" class="font-medium text-white">Mystery</label>
                    </div>
                    </div>
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="comments" name="anime[]" type="checkbox" value="Drama" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-lg leading-6">
                        <label for="comments" class="font-medium text-white">Drama</label>
                    </div>
                    </div>
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="comments" name="anime[]" type="checkbox" value="Slice of Life" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-lg leading-6">
                        <label for="comments" class="font-medium text-white">Slice of Life</label>
                </div>
            </div>
            
                
        <div class="mt-6 items-end">
            <button type="submit" name="submit" class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
    </div>

    
</div>
</body>
</html>
    </form>
    

</body>

</html>