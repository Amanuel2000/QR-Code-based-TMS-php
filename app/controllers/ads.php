<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateAds.php");
if(isset($_SESSION['id'])){


$table = 'ads';

$errors = array();
$id = '';
$name = '';
$description = '';

$ads = selectAll($table);


if (isset($_POST['add-ads'])) {
    adminOnly();

    $errors = validateAds($_POST);


    
    if (count($errors) === 0) {
        unset($_POST['add-ads']);
        $ads_id = create($table, $_POST);
        $_SESSION['message'] = 'Ads created successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/ads/index.php');
        exit(); 
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }

    if(!empty($_FILES['image']['name'])){
        $image_name = time(). '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination );

        if($result){
            $_POST['image'] = $image_name;

        }else{
            array_push($errors, "Failed to Upload image");
        }

    }else{
        array_push($errors, "Ads image required");
    }





}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $ad = selectOne($table, ['id' => $id]);
    $id = $club['id'];
    $name = $club['name'];
    $description = $club['description'];
}

if (isset($_GET['del_id'])) {
    adminOnly();
 
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Ads deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/ads/index.php');
    exit();
}


if (isset($_POST['update-ads'])) {
    adminOnly();
    $errors = validateClubs($_POST);

    





    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-ads'], $_POST['id']);
        $ads_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Ads updated successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/ads/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }

}
}

else {
    header('location: ' . BASE_URL . '/login.php');
    exit(0);
}