<?php

$xml = simplexml_load_file('index.xml');

foreach ($xml->rak->buku as $item){
    echo "Judul : $item->judul";
    echo"<br/>";
    echo "Pengarang : $item->pengarang";
    echo"<br/>";
    echo "Penerbit : $item->penerbit";
    echo"<br/>";
}

foreach ($xml->pegawai as $data) {
    echo "Judul : $data->nama";
    echo"<br/>";
    echo "Pengarang : $data->alamat";
    echo"<br/>";
    echo "Penerbit : $data->jabatan";
    echo"<br/>";
}