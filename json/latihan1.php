<?php

// $mahasiswa = [
//   [
//     "nama" => "Alfin Budiyanto",
//     "nrp" => "037284548",
//     "email" => "alfinbudiyanto@unpas.ac.id"
//   ],
//   [
//     "nama" => "Erik Doank",
//     "nrp" => "037224892",
//     "email" => "erik@gmail.com"
//   ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
