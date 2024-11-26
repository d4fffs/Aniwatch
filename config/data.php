<?php
$rootDir = $_SERVER['DOCUMENT_ROOT'].'/Aniwatch/';
if(isset($_POST['submit'])){

      
      $animeid = $_POST['animeid'];
      $namaanime = $_POST['namaanime'];
      $deskripsi = $_POST['deskripsi'];
      $animestudio = $_POST['animestudio'];
      $animeepisode = $_POST['animeepisode'];
      $animerilis = $_POST['animerilis'];     
      $anime = implode(',',$_POST['anime']);  
      $file = basename($_FILES['file']['name']);
  
     
      $data = [ 
          'animeid' => $animeid,
          'namaanime' => $namaanime,
          'deskripsi' => $deskripsi,
          'file' => $file,
          'animestudio' => $animestudio,
          'animeepisode' => $animeepisode,
          'animerilis' => $animerilis,
          'anime' => $anime,
      ];
  
      
      $validasi = validasiData($data);
  
      if($validasi == 0 ){
          // echo "data sudah lengkap siap di inputkan";
          $result = inputAnimeGambar($data, $koneksi);
          $folderTujuan = $rootDir."upload";
          if($result) 
          { 
              $upload = tambahGambar("./upload/", $_FILES['file']);
              if($upload) 
                  header("location:aniwatchform.php?status=1");
              else 
              header("location:aniwatchform.php?status=1&errno=2");
          }
          else header("location:aniwatchform.php?errno=1");
      }
      else {
          echo "data $validasi kurang";
      }
  }

  else if(isset($_GET['del'])){
    $id = $_GET['del'] ?? null;

    if($id === null || !ctype_digit($id)){
        header("location:producttable.php?errno=3");
    }
    else {
        $result = delAnime($koneksi, $id);
        if($result) 
            header("location:producttable.php?success=1");
        else 
            header("location:producttable.php?errno=5");
    }
}
        

        
        

