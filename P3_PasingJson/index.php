<?php
// $json = [1, 2, 3, 4, 5];
$user = [
    'nama' => 'Ucup',
    'alamat' => 'Depok',
    'umur' => 18
];

$users = [
    '0' => [
        'nama' => 'Ucup',
        'alamat' => 'Depok',
        'umur' => 18
    ],
    '1' => [
        'nama' => 'Budi',
        'alamat' => 'Bandung',
        'umur' => 17
    ],
    '2' => [
        'nama' => 'Surya',
        'alamat' => 'Sumedang',
        'umur' => 19
    ]
    ];
//mengubah array menjadi json
$parsing = json_encode(['users' => $users]);

echo $parsing;

