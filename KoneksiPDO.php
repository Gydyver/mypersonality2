<?php

$DSN="mysql:host=localhost;dbname=3sc5";
$Username="root";
$conn=new PDO ($DSN, $Username);

$query="INSERT INTO siswa(no_reg, nama, alamat) values(:no_reg, :nama, :alamat)";
$stmt = $conn->prepare($query);
$stmt->execute(array(':no_reg'=>1710010077,':nama' =>'nurul', ':alamat'=>'jalan aja'));

$no_reg=1710010078;
$nama='nuril';
$alamat='jalan dong';
$stmt->bindparam(":no_reg", $no_reg, PDO::PARAM_INT);
$stmt->bindparam(":nama", $nama, PDO::PARAM_STR);
$stmt->bindparam(":alamat", $alamat, PDO::PARAM_STR);
$stmt->execute();

$no_reg=1710010077;
$sql="SELECT * FROM 3sc5 where no_reg>$no_reg";
foreach($conn->query($sql) AS $row)
{
    echo "8"
}

?>