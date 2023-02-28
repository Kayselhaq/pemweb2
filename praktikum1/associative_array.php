<?php
$profileArray = [
    [
            'nama'  => 'kays elhaq rabbani',
            'kelas' => 'ti06',
            'ipk'   => 4,
            'sudah lulus' => false 
    ], [
            'nama'  => 'kays elhaq rabbani',
            'kelas' => 'ti06',
            'ipk'   => 4,
            'sudah lulus' => false 
    ]
];

foreach ($profileArray as $profile) {
    echo $profile['nama'];
}
