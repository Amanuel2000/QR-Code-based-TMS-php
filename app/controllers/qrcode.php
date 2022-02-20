<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateQrcodes.php");

include(ROOT_PATH . "/assets/phpqrcode/qrlib.php");

// $folderTemp = '/assets/gbrqrcode/'; 
$folderTemp = 'gbrqrcode/'; 



$table = 'qrcodes';

$errors = array();
$id = '';
$user_id = '';
$name = '';
$qrcode = '';
$ticketNo = '';


// $ticketNo = $_POST['ticketNo'];//a
// $name = $_POST['name'];//b
$link = "http://192.168.8.103/QRCodeTicket/readticket.php?ticketNum=$ticketNo";//c
$qrcode = $ticketNo.".png";//d

$level = 'H';
$pixelSize= 6;
$frameSize = 0;

QRcode :: png($link, $folderTemp.$ticketNo , $level, $pixelSize, $frameSize );



$qrcodes = selectAll($table);


if (isset($_POST['add-club'])) {
    adminOnly();

    $errors = validateQrcodes($_POST); 





    if (count($errors) === 0) {
        unset($_POST['add-qrcode']);
        $qr_id = create($table, $_POST);
        $_SESSION['message'] = 'Club created successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/qrcode/index.php');
        exit(); 
    } else {
        $name = $_POST['name'];
        $qrcode = $_POST['qrcode'];
        $ticketNo =  $_POST['ticketNo'];
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qrc = selectOne($table, ['id' => $id]);
    $id = $qrc['id'];
    $name = $qrc['name'];
    $ticketNo =  $qrc['ticketNo'];
    $qrcode = $qrc['qrcode'];

}

if (isset($_GET['del_id'])) {
    adminOnly();
 
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'club deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/qrcode/index.php');
    exit();
}


if (isset($_POST['update-qrcode'])) {
    adminOnly();
    $errors = validateQrcodes($_POST);

    





    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-qrcode'], $_POST['id']);
        $club_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Club updated successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/qrcode/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $ticketNo =  $_POST['ticketNo'];
        $qrcode = $_POST['qrcode'];
    }

}
