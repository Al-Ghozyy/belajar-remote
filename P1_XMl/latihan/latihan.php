<?php

$xml = simplexml_load_file('latihan.xml');

echo "<h1>Menampilkan data file latihan.xml berbentuk table</h1>";

echo "<table border='1'>";

echo "<tr>";
echo "<th>Nama</th>";
echo "<th>Departemen</th>";
echo "<th>Komplek</th>";
echo "</tr>";

foreach ($xml->pengurus as $pengurus) {
    echo "<tr>";
    echo "<td>$pengurus->nama</td>";
    echo "<td>$pengurus->departemen</td>";
    echo "<td>$pengurus->komplek</td>";
    echo "</tr>";
}

echo "</table>";