<?php
// echo "test1";
      if(isset($_POST['submit'])) {
        // echo "test";

        $namaanime = $_POST['namaanime'];
        $deskripsi = $_POST['deskripsi'];
        $animestudio = $_POST['animestudio'];
        $animeepisode = $_POST['animeepisode'];
        $animerilis = $_POST['animerilis'];     
        $anime = implode(',',$_POST['anime']);  
        
        
        $data= [
          'namaanime'=> $namaanime,
          'deskripsi' => $deskripsi,
          'animestudio'=> $animestudio,
          'animeepisode'=> $animeepisode,
          'animerilis'=> $animerilis,
          'anime'=> $anime,
        ];

        $validasi = validasiData($data);   
     
      if ($validasi == 0){
        
        echo "data sudah lengkap siap di inputkan";
        $result = inputAnime($data, $koneksi);
        if($result) header("location:aniwatchform.php?status=1");
        else header("location:aniwatchform.php?errno=1");
      }
      else{
        echo "data $validasi kurang";
      }
    }    else if(isset($_POST['btnInputAnimeGambar'])){

      // mengambil semua data dari form ke dalam variabel lokal
      $namaanime = $_POST['namaanime'];
      $deskripsi = $_POST['deskripsi'];
      $animestudio = $_POST['animestudio'];
      $animeepisode = $_POST['animeepisode'];
      $animerilis = $_POST['animerilis'];     
      $anime = implode(',',$_POST['anime']);  
      $file = basename($_FILES ['file']);
  
      // variabel array associative 
      $data = [ 
          'judul' => $judul,
          'pengarang' => $pengarang,
          'penerbit' => $penerbit,
          'tahun' => $tahunTerbit,
          'genre' => $genre,
          'sinopsis' => $sinopsis,
          'file' => $file
      ];
  
      // var_dump($data);
  
      $validasi = validasiData($data);
  
      if($validasi == 0 ){
          // echo "data sudah lengkap siap di inputkan";
          $result = inputAnimeGambar($data, $koneksi);
          $folderTujuan = $rootDir."upload";
          if($result) 
          { 
              $upload = tambahGambar($folderTujuan, $_FILES['gambar']);
              if($upload) 
                  header("location:aniwatchform?status=1");
              else 
              header("location:aniwatchform?status=1&errno=2");
          }
          else header("location:aniwatchform?errno=1");
      }
      else {
          echo "data $validasi kurang";
      }
  }


        

        
        

