<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateClub.php");

$table = 'clubs';

$errors = array();
$id = '';
$clubName = '';
$description = '';

$clubs = selectAll($table);


if (isset($_POST['add-club'])) {
    adminOnly();
    $errors = validateClub($_POST);

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
        array_push($errors, "Post image required");
    }

    if (count($errors) === 0) {
        unset($_POST['add-club']);
        $club_id = create($table, $_POST);
        $_SESSION['message'] = 'Topic created successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/club/index.php');
        exit(); 
    } else {
        $clubName = $_POST['clubName'];
        $description = $_POST['description'];
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $club = selectOne($table, ['id' => $id]);
    $id = $club['id'];
    $clubName = $club['clubName'];
    $description = $club['description'];
}

if (isset($_GET['del_id'])) {
    adminOnly();
 
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Topic deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/club/index.php');
    exit();
}


if (isset($_POST['update-club'])) {
    adminOnly();
    $errors = validateClub($_POST);

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
        array_push($errors, "Post image required");
    }




    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-club']);
        $club_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Topic updated successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/club/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $clubName = $_POST['clubName'];
        $description = $_POST['description'];
    }

}
