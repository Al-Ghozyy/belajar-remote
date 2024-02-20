<?php
//data array pada json
// $dataJson = "[1, 2, 3, 4, 5]";

// $parsing = json_decode($dataJson);
// echo implode(", ", $parsing);
//[1 2 3 4 5]

//data objek pada json
// $dataJson = '{
//     "nama" => "Ucup",
//     "alamat" => "Depok",
//     "umur" => 18
// }'; 
$json[0];
$json->key;
$Users = '[
    {
        "nama" : "Budi",
        "alamat" : "Bandung"
    },
    {
        "nama" : "Agus",
        "alamat" : "Jakarta"
    },
    {
        "nama" : "Bamabang",
        "alamat" : "Depok"
    }

]';

$students = json_decode($Users);
foreach ($students as $student) {
    echo "Nama : ". $student[0]->nama." <br>";
    echo "Alamat : ".$student[0]->alamat ." <br> <br>";
}


// print_r($mahasantri->nama);