<?php
$rootDir = $_SERVER['DOCUMENT_ROOT'].'/Aniwatch/';
if(isset($_POST['submit'])){

      // mengambil semua data dari form ke dalam variabel lokal
      $namaanime = $_POST['namaanime'];
      $deskripsi = $_POST['deskripsi'];
      $animestudio = $_POST['animestudio'];
      $animeepisode = $_POST['animeepisode'];
      $animerilis = $_POST['animerilis'];     
      $anime = implode(',',$_POST['anime']);  
      $file = basename($_FILES['file']['name']);
  
      // variabel array associative 
      $data = [ 
          'namaanime' => $namaanime,
          'deskripsi' => $deskripsi,
          'file' => $file,
          'animestudio' => $animestudio,
          'animeepisode' => $animeepisode,
          'animerilis' => $animerilis,
          'anime' => $anime,
      ];
  
      // var_dump($data);
  
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


        

        
        

