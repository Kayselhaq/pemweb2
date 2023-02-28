<?php
$arraybuah = ['mangga','apel','mengkudu'];
//mengurutkan array
sort($arraybuah);
//menghapus nilai array paling belakang
array_pop($arraybuah);
//menghapus spesifik value array tertentu
unset($arraybuah[1]);
//menambah value array dibelakang
array_push($arraybuah,'nangka');
//untuk menghapus value array yang paling depan
array_shift($arraybuah);
//menambah value array didepan
array_unshift($arraybuah, 'mangga');

foreach($arraybuah as $buah){
    echo $buah . '<br>';
}
