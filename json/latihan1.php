<?php 
 
// $mahasiswa =[
//    [

//      "nama" => "Zahwa Aulia",
//      "nim" => "2217020144",
//      "email" => "zahwaa495@gmail.com"

//    ], 
//      [

//      "nama" => "Zahwa Aulia",
//      "nim" => "2217020144",
//      "email" => "zahwaa495@gmail.com"
//     ]
//  ];
 
$dbh = new PDO('mysql:host=localhost;dbname=mahasiswa_db','root','');
$db = $dbh->prepare('SELECT * FROM mahasiswa_tb');
$db->execute();
$mahasiswa_tb = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa_tb);
echo $data;
?>