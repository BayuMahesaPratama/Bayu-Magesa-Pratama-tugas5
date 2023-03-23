<?php 
$mahasiswa = 
[
    [
        'nrp' => '223040111',
        'nama' => 'Antoine Griezmann',
        'email' => 'griezmann7@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'griezmann.jpg',
    ],
    [
        'nrp' => '223040112',
        'nama' => 'Neymar Junior',
        'email' => 'neymarjunior10@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'neymar.jpg',
    ],
    [
        'nrp' => '223040113',
        'nama' => 'Lionel Messi',
        'email' => 'lionelmessi10@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'messi.jpg',
    ],
    [
        'nrp' => '223050114',
        'nama' => 'Cristiano Ronaldo',
        'email' => 'cristiano7@gmail.com',
        'jurusan' => 'Teknik Lingkungan',
        'foto' => 'cristiano.jpg',
    ],
    [
        'nrp' => '223040115',
        'nama' => 'Mesut Ozil',
        'email' => 'mesutozil10@gmail.com',
        'jurusan' => 'Teknik Industri',
        'foto' => 'ozil.jpg',
    ],
    [
        'nrp' => '223040001',
        'nama' => 'Kylian Mbappe',
        'email' => 'mbappe7@gmail.com',
        'jurusan' => 'Teknik Mesin',
        'foto' => 'mbappe.jpg',
    ],
    [
        'nrp' => '223040002',
        'nama' => 'Lewis Hamilton',
        'email' => 'hamilton44@gmail.com',
        'jurusan' => 'Teknik Pangan',
        'foto' => 'hamilton.jpg',
    ],
    [
        'nrp' => '223040003',
        'nama' => 'Sebastian Vettel',
        'email' => 'sebastian5@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'sebastian.jpg',
    ],
    [
        'nrp' => '223040004',
        'nama' => 'Carles Leclerc',
        'email' => 'carles16@gmail.com',
        'jurusan' => 'Teknik Pangan',
        'foto' => 'leclerc.jpg',
    ],
    [
        'nrp' => '223040005',
        'nama' => 'Max Verstappen',
        'email' => 'verstappen1@gmail.com',
        'jurusan' => 'Teknik Mesin',
        'foto' => 'verstappen.jpg',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
    <style>
        img{
            width: 100px;
            height: 150px;
        }
    </style>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs) {?>
    <ul>
        <li><img src="img/<?= $mhs['foto'];?>"></li>
        <li>Nama : <?=  $mhs['nama']; ?></li>
        <li>NRP : <?= $mhs['nrp']; ?></li>
        <li>Jurusan : <?= $mhs['jurusan']?></li>
        <li>Email : <?= $mhs['email']?></li>
    </ul>
    <?php } ?>
</body>
</html>