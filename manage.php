<?php
include "path.php";
include( ROOT_PATH . "/app/database/db.php");
include "phpqrcode/qrlib.php";
$folderTemp = 'gbrqrcode/'; 

$t_id = '';
$ticketNumber = '';
$ticketName = '';

 //$path = 'gbrqrcode/';
// $file = $path.uniqid().".png";
// $ticketNumber = $file.uniqid()."QRC";

//test to output

//$text = "QRC2022".uniqid();

// QRCode::png($text, $file, 'L', 10, 2);
// //png($text, $file, ECC_LEVEL, Pixel_size, Frame_size)
// echo "<center>ticket number : $text <center>";

// echo "<center> QR Code:<image src = ' ".$file." '><center>";


if(isset($_GET['tId'])){
        $t_id = $_GET['tId'];

        $t_table = 'tickets';

        $tickets = selectOne($t_table, ['id' => $t_id]);
        $ticketNumber = $tickets['id'];
        $ticketName = $tickets['ticketName'];
}

$a = $ticketNumber;
$b = $ticketName;
$c = "http://192.168.8.103/QRCodeTicket/readticket.php?ticketNum=$a";
$d = $a.".png";
$u_id = $_SESSION['id'];

$level = 'H';
$pixelSize= 6;
$frameSize = 0;

QRcode :: png($c, $folderTemp.$d, $level, $pixelSize, $frameSize );


$sql = $conn->query("INSERT INTO tbqrcode  VALUES ('$a', '$b', '$d')");

$sql = $conn->query("INSERT INTO tbTicket (ticketName, ticketNumber, qrCode, userId) VALUES('$b', '$a', '$d', '$u_id')");


if($sql){  
     //echo 'Success';
    header('location:generateTicket.php?tId='.'QRC2022000000'.$t_id);
}else{
        // echo 'Not Success';
        die($conn->error);
}
?>