<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateSettlePayments.php");


if(isset($_SESSION['id'])){
  
    
$table = 'payments';

// $tk_table = 'tickets';

$errors = array();
$id = '';
$paymentCode = '';
$bankName = '';
$accountNo ='';
$paymentType='';
$ticketprice = '';
$ticketName = '';

$payments = selectAll($table);

// if(isset($_GET['tkId'])){
//     $tk_id = $_GET['tkId'];

//     $payment = selectOne($tk_table, ['id' => $tk_id]);
//     $paymentCode = $payment['paymentCode'];
// }

if (isset($_GET['tId'])) {
    $table_ticket = "tickets";
    $table_fixtures = "fixtures";
    $payment = selectOne($table, ['id' => ($_GET['bId'])]);
    $tickets = selectOne($table_ticket, ['id' => ($_GET['tId'])]);
    $ticketName = $tickets['ticketName'];
    $bankName = $payment['bankName'];
    $paymentCode = $payment['paymentCode'];
    $fixtures = selectOne($table_fixtures, ['id' => ($tickets['fId'])]);
    
    if ($tickets['tt_id'] == 1) {
        $ticketprice = $fixtures['price1'] * $tickets['ticketQuantity'];
    }
    else if ($tickets['tt_id'] == 2) {
        $ticketprice = $fixtures['price2'] * $tickets['ticketQuantity'];
    }
    else if ($tickets['tt_id'] == 3) {
        $ticketprice = $fixtures['price3'] * $tickets['ticketQuantity'];
    }
    else if ($tickets['tt_id'] == 4) {
        $ticketprice = $fixtures['price4'] * $tickets['ticketQuantity'];
    }
}

if (isset($_POST['add-payment'])) {
    adminOnly();

    $errors = validateSettlePayments($_POST);

    // if(!empty($_FILES['image']['name'])){
    //     $image_name = time(). '_' . $_FILES['image']['name'];
    //     $destination = ROOT_PATH . "/assets/images/" . $image_name;

    //     $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination );

    //     if($result){
    //         $_POST['image'] = $image_name;

    //     }else{
    //         array_push($errors, "Failed to Upload image");
    //     }

    // }else{
    //     array_push($errors, "Club image required");
    // }


    if (count($errors) === 0) {
        unset($_POST['add-payment']);
        $payment_id = create($table, $_POST);
        $_SESSION['message'] = 'Payment created successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/payment/index.php');
        exit(); 
    } else {
        
        $paymentCode = $_POST['paymentCode'];
        $bankName = $_POST['bankName'];
        $accountNo = $_POST['accountNo'];
        $paymentType= $_POST['paymentType'];
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $payment = selectOne($table, ['id' => $id]);
    $id = $payment['id'];
    $paymentCode = $payment['paymentCode'];
    $bankName = $payment['bankName'];
    $accountNo = $payment['accountNo'];
    $paymentType= $payment['paymentType'];
}

if (isset($_GET['del_id'])) {
    adminOnly();
 
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Payment deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/payment/index.php');
}


if (isset($_POST['update-payment'])) {
    adminOnly();
    $errors = validateSettlePayments($_POST);   





    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-payment'], $_POST['id']);
        $payment_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Payment updated successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/payment/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        
        $paymentCode = $_POST['paymentCode'];
        $bankName = $_POST['bankName'];
        $accountNo = $_POST['accountNo'];
        $paymentType= $_POST['paymentType'];
    
    }
}

}  else {
    header('location: ' . BASE_URL . '/login.php');
    exit(0);
}

