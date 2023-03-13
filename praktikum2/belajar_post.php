<?php
$nama = $_POST ['nama'];
$jk = $_POST ['Jenis_Kelamin'];
$umur = $_POST ['umur'];
$hobi = $_POST ['hobi'];
$tanngal_lahir = $_POST ['lahir'];
$prodi = $_POST ['Prodi'];

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