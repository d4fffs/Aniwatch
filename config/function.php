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

    function inputAnimeGambar($data, $koneksi){  
       $namaanime = $data['namaanime'];
       $anime = $data['anime'];
       $deskripsi = $data['deskripsi'];
       $file = $data['file'];
       $animestudio = $data['animestudio'];
       $animeepisode = $data['animeepisode'];
       $animerilis = $data['animerilis'];
       
    
        $sql = "INSERT INTO anime (anime_nama, anime_genre, anime_poster, anime_sinopsis, anime_studio, anime_episode, tanggal_rilis) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($koneksi, $sql);
        if($stmt === false) 
        {
            return "failed";
        }
    
        mysqli_stmt_bind_param($stmt, 'sssssii', $namaanime,  $anime, $file, $deskripsi, $animestudio, $animeepisode, $animerilis);
        $result = mysqli_stmt_execute($stmt);
    
        if(!$result)
            return false;
        
        mysqli_stmt_close($stmt);
        return true;  
    }
    
function viewAnime($koneksi){
    $sql = "SELECT * FROM `anime`";

    $stmt = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($stmt) > 0) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    else return false; 
}
    


?>