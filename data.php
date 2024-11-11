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
    }    


        

        
        

