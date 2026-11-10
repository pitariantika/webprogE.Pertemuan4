<?php
    //percabangan if pada PHP

     $nilai = 70;

     //beri keterangan lulus apabila nilai 65 ke atas
     $ket = "LULUS";
     if($nilai >= 65){
        $ket = "Tidak Lulus";
     }
        
     echo "Keterangan: " . $ket;
?>