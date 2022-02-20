<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validatetickets.php");
if(isset($_SESSION['id'])){

$table = 'tickets';
$f_table = 'fixtures';
$qrcodes = selectAll('qrcodes');
$tickettypes = selectAll('tickettypes');
$tickets = selectAll($table);

$errors =array();
$id = '';
$ticketName = '';
$price1 = "";
$price2 = "";
$price3 = "";
$price4 = "";
// $ticketTypeName = '';
// $seatAvailable = '';
$ticketTypePrice = '';
$ticketQuantity = '';
$tt_id = '';
$qr_id = '';
$f_id = '';



if(isset($_GET['id'])){
    $ticket = selectOne($table, ['id' => $_GET['id']]);

    $id =  $ticket['id'];
    $ticketName = $ticket['ticketName'];
    $ticketQuantity = $ticket ['ticketQuantity'];
    // $ticketTypeName = $ticket ['ticketTypeName'];
    // $seatAvailable = $ticket ['seatAvailable'];
    // $ticketTypePrice = $ticket ['ticketTypePrice'];
    $tt_id = $ticket['tt_id'];   
    $posted  =  $ticket['posted'];
    $qr_id = $ticket['qr_id']; 
}

if(isset($_GET['fId'])){
    $f_id = $_GET['fId'];

    $fixture = selectOne($f_table, ['id' => $f_id]);
    $ticketName = $fixture['clubName'] . ' vs ' . $fixture['opponenetClubName'];
    $price1 = $fixture['price1'];
    $price2 = $fixture['price2'];
    $price3 = $fixture['price3'];
    $price4 = $fixture['price4'];
}

// dd($tickets);


if (isset($_POST['next-btn'])) {
    $errors = validateTickets($_POST);

    unset($_POST['next-btn']);
    $_POST['fId'] = $_GET['fId'];
    $ticket_id = create($table, $_POST);   
    header('location: ' . BASE_URL . '/payment.php?tId='.$ticket_id); 
    exit();
}


if (isset($_POST['add-ticket'])){
    unset($_POST['add-ticket']);
    $ticket_id = create('tickets', $_POST);
    $_SESSION['message'] = 'Ticket details created successfully';
    $_SESSION['type'] = 'success';
    header('location: '. BASE_URL . '/admin/ticket/index.php');
    exit();
     
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $ticket = selectOne($table, ['id' => $id]);
    $id = $ticket['id'];
    $ticketName = $ticket['ticketName'];   
    $ticketQuantity = $ticket['ticketQuantity'];
    $ticketTypePrice = $ticket ['ticketTypePrice'];
    $tt_id = $ticket['tt_id'];
    $qr_id = $ticket['qr_id'];
    
   

}

if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $count = delete($table , $id);
    $_SESSION['message'] = 'Ticket details deleted successfully!';
    $_SESSION['type'] = 'success';
    header('location: '. BASE_URL . '/admin/ticket/index.php');
    exit();
  
}


if(isset($_POST['update-ticket'])){

    
    $errors = validateTickets($_POST);
    if(count($errors) == 0){
        $id = $_POST['id'];
        unset($_POST['update-ticket'], $_POST['id']);    
        $ticket_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Ticket details updated successfully!';
        $_SESSION['type'] = 'success';
        header('location: '. BASE_URL . '/admin/ticket/index.php');
        exit();
    }else{
    $ticketName = $_POST['ticketName'];
    $ticketQuantity = $_POST ['ticketQuantity'];
    // $ticketTypeName = $_POST ['ticketTypeName'];
    // $seatAvailable = $ticket ['seatAvailable'];
    $ticketTypePrice = $_POST ['ticketTypePrice'];
    }

}
}else {
    header('location: ' . BASE_URL . '/login.php');
    exit(0);

}
