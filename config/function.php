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
    $namaanime = $data['namaanime'];
    $anime = $data['anime'];
    $deskripsi = $data['deskripsi'];
    $animestudio = $data['animestudio'];
    $animeepisode = $data['animeepisode'];
    $animerilis = time();

    $sql = "INSERT INTO anime (anime_nama, anime_genre, anime_sinopsis, anime_studio, anime_episode, tanggal_rilis) VALUES (?, ?, ?, ?, ?, ?,?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    
    if ($stmt === false) {
        return "Failed";
    }

    // Update bind_param types based on the actual data types
    mysqli_stmt_bind_param($stmt, 'ssssii', $namaanime, $anime, $deskripsi, $file, $animestudio, $animeepisode, $animerilis);

    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        return "Success";
    } else {
        return "Failed to execute statement";
    }

    mysqli_stmt_close($stmt);
}

    function inputAnimeGambar($data, $koneksi){  
       $namaanime = $data['namaanime'];
       $anime = $data['anime'];
       $deskripsi = $data['deskripsi'];
       $fileupload = $data['fileupload'];
       $animestudio = $data['animestudio'];
       $animeepisode = $data['animeepisode'];
       $animerilis = $data['animerilis'];
       $file = $data['file'];
    
        $sql = "INSERT INTO anime (anime_nama, anime_genre, anime_poster, anime_sinopsis, anime_studio, anime_episode, tanggal_rilis) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($koneksi, $sql);
        if($stmt === false) 
        {
            return "failed";
        }
    
        mysqli_stmt_bind_param($stmt, 'siiiissi', $namaanime, $anime, $deskripsi, $file, $animestudio, $animeepisode, $animerilis);
        $result = mysqli_stmt_execute($stmt);
    
        if(!$result)
            return false;
        
        mysqli_stmt_close($stmt);
        return true;  
    }
    
function viewAnime($koneksi){
    $sql = "SELECT FROM * anime";

    $stmt = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($stmt) > 0) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    else return false; 
}
    


?>