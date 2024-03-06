<?php
// tangkap input form
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// list harga produk
$harga = [
    'TV' => 4200000,
    'Kulkas' => 3100000,
    'Mesin Cuci' => 3800000
]; 

// menghitung total harga 
$total = $jumlah * $harga[$produk];

// Input grade dan predikat 

if($nilai_total >= 0 && $nilai_total <= 35) {
    $grade = "E";
    $predikat = "Sangat Kurang";
} else if($nilai_total >= 36 && $nilai_total <=55) {
    $grade = "D";
    $predikat = "Kurang";
} else if($nilai_total >= 56 && $nilai_total <= 69) {
    $grade = "C";
    $predikat = "Cukup";
} else if($nilai_total >= 70 && $nilai_total <=84) {
    $grade = "B";
    $predikat = "Memuaskan";
} else if($nilai_total >= 85 && $nilai_total <=100) {
    $grade = "A";
    $predikat = "Sangat Memuaskan";
} else {
    $grade = "I";
    $predikat = "";
}



// format harga 
$total = number_format($total);

// tampilkan hasil form
echo "Nama Customer: $customer";
echo "<br> Pilihan Produk: $produk";
echo "<br> Jumlah Beli: $jumlah";
echo "<br> Total Belanja: $total";
echo "<br> Grade: $grade";
echo "<br> Predikat: $predikat";