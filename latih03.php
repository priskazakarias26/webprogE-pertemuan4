<?php
  // transaksi penjualan produk
  $namaproduk = "Baju suka tidu";
  $harga_satuan = 115500;
  $qty = 2;

  // hitung harga yang harus di bayar
  $total_bayar = $harga_satuan * $qty;
  
  // tampilkan hasil
  echo "Nama Produk: " . $namaproduk . "<br>";
  echo "Harga Satuan: Rp " . $harga_satuan . "<br>";
  echo "Jumlah Beli: " . $qty . "<br>";
  echo "Total Harga: Rp " . $total_bayar;

  // terdapat diskon 5% jika sub total lebih dari 500.000
   if ($total_bayar > 500000) {
    $diskon = $total_bayar * 5 / 100;
   } else {
    $diskon = 0;
   }
   
  $total_akhir = $total_bayar - $diskon;

  // tampilkan diskon dan total pembayaran
  echo "<br>Diskon: Rp " . $diskon . "<br>";
  echo "Total Bayar Setelah Diskon: Rp " . $total_akhir;

?>

  