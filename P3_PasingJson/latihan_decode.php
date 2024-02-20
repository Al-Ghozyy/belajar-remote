<?php

$json = '{
    "perpustakaan" : {
        "rak" : {
            "buku" : [
                {
                    "judul" : "Pemrograman Web",
                    "pengarang" : "Budi",
                    "penerbit" : "Informatika Utama"
                },
                {
                    "judul" : "Pemrograman Java Netbeans",
                    "pengarang" : "Agus",
                    "penerbit" : "Informatika Utama"
                },
                {
                    "judul" : "Database MySQL",
                    "pengarang" : "Cecep",
                    "penerbit" : "Penghimpun Data"
                }
            ]
        }
    }
}';

echo json_encode($buku);

foreach ($buku as $item) {
    echo "Judul: " . $item->judul . "<br>";
    echo "Pengarang: " . $item->pengarang . "<br>";
    echo "Penerbit: " . $item->penerbit . "<br>";
}