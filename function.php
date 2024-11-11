<?php
function validasiData($data)  {
    
    foreach ($data as $index => $value) {
    $value = trim($value);
    if ($value === '' || $value === 0 || $value === null || $value === false) {
        return $index;
        }
    }
    return 0;
}

function inputAnime($data, $koneksi) {
    $data= [
       $namaanime = $data['namaanime'],
       $anime = $data['anime'],
       $fileupload = $data['fileupload'],
       $deskripsi = $data['deskripsi'],
       $animestudio = $data['animestudio'],
       $animeepisode = $data['animeepisode'],
       $animerilis = $data['animerilis'],
       
       ];
       $sql = "INSERT INTO ";
}
?>