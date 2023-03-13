<?php
$nama = $_GET ['nama'];
$jk = $_GET ['Jenis_Kelamin'];
$umur = $_GET ['umur'];
$hobi = $_GET ['hobi'];
$tanngal_lahir = $_GET ['lahir'];
$prodi = $_GET ['Prodi'];

echo "Hasil Formulir Pendaftaran : <br>";
echo "<br> Nama :".$nama;
echo "<br> Jenis Kelamin :".$jk;
echo "<br> Umur :".$umur;
echo "<br> Tanggal Lahir :".$tanngal_lahir;
echo "<br> Hobi :";
foreach($hobi as $h){
    echo $h . ",";
}
echo "<br> Prodi :".$prodi;