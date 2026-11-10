<?php
    // transaksi penjualan produk

    $namaproduk = "Baju suka tidur";
    $harga_satuan = 115500;
    $qty = 10 ;

    //harga hitung yang harus di bayar

    $total_harga = $harga_satuan * $qty;

    echo " <br>Nama Produk: " . $namaproduk;
    echo " <br>Harga Satuan  :" . $harga_satuan;
    echo " <br>Jumlah Beli: " . $qty;
    echo " <br> Total Harga :" . $total_harga;

    //terdapat diskon 5% jika Sub Total lebih dari 500.000

   $diskon = 0;
   if($total_harga > 500000){
    $diskon = 0.05 * $total_harga;
   }
    $total_akhir = $total_harga - $diskon;
   echo " <br> Diskon :" . $diskon;
   echo "<br> Total Harga Akhir : " . $total_akhir;
?>
