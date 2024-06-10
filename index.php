<?php

// 1. tampilkan text "Hello World"
echo "Hello World" . "<br><br>";

// 2. tampilkan 10 baris text "Hello World"
for ($i = 0; $i < 10; $i++) {echo "Hello World ";}; echo "<br><br>";

// 3. tampilkan 10 baris text "Hello World", dengan baris genap -> "Hello World - [no baris]"
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        echo "Hello World" . "<br>";
    } else {
        echo "Hello World - " . ($i + 1) . "<br>";
    }
} echo "<br>";

// 4. tampilkan array berisi nama bulan dari Januari s/d Desember
$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", " Desember");
echo implode(", ", $bulan); echo "<br><br>";

// 5. buat array 2 dimensi, dimana index pertama menyimpan nama bulan dan index kedua menyimpan hari libur nasional di bulan tersebut. Lalu tampilkan. Misal: Januari - Tahun Baru, Februari - Imlek, dst
$holidays = array(
    "Januari" => array("Hari Tahun Baru"),
    "Februari" => array("Hari Imlek"),
    "Maret" => array("Hari Nyepi"),
    "April" => array("Hari Paskah"),
    "Mei" => array("Hari Buruh"),
    "Juni" => array("Hari Pancasila"),
    "Juli" => array("Hari Idul Adha"),
    "Agustus" => array("Hari Kemerdekaan"),
    "September" => array("Hari Palang Merah Indonesia"),
    "Oktober" => array("Hari Haloween"),
    "November" => array("Hari Paskah"),
    "Desember" => array("Hari Natal")
);
foreach ($holidays as $month => $holiday) {
    echo "$month - " . implode(", ", $holiday) . "<br>";
} echo "<br>";

// 6. buat 4 functions untuk membuat pengurangan, perkalian, pembagian dan penjumlahan. Lalu panggil function tersebut dengan untuk melakukan operasi aritmatika. Berikut contoh hasilnya: Hasil perkalian 23 dan 2 adalah 46.
function tambah ( $a, $b ) { return $a + $b; }
function kurang ( $a, $b ) { return $a - $b; }
function kali ($a, $b ) { return $a * $b; }
function bagi ( $a, $b ) { return $a / $b; }

$a = 20; $b = 10;

echo "variabel a = $a, variabel b = $b <br>";
echo "hasil tambah $a dan $b adalah " . tambah($a, $b) . "<br>";
echo "hasil kurang $a dan $b adalah " . kurang($a, $b) . "<br>";
echo "hasil kali $a dan $b adalah " . kali($a, $b) . "<br>";
echo "hasil kali $a dan $b adalah " . bagi($a, $b) . "<br>";

?>