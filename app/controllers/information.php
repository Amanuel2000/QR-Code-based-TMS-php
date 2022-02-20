<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateInformations.php");

$table = 'informations';

$posts = selectAll('posts');
$users = selectAll('users');
$clubs = selectAll('clubs');
$informations = selectAll($table);

$errors = array();
$id = '';
$image = '';
$title = '';
$description = '';





if (isset($_POST['add-info'])) {
    adminOnly();

    $errors = validateInformations($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
           $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
       array_push($errors, "Post image required");
    }

    
    if (count($errors) === 0) {
        unset($_POST['add-info']);
        $information_id = create($table, $_POST);
        $_SESSION['message'] = 'Informations created successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/informations/index.php');
        exit(); 
    }else {
        $title = $_POST['title'];        
        $description = $_POST['description'];
       
    
    }
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
    //     array_push($errors, "Image required");
    // }

}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $information = selectOne($table, ['id' => $id]);
    $id = $information['id'];
    $title = $information['title'];  
    $description = $information['description'];
} 
    
   

if (isset($_GET['del_id'])) {
    adminOnly();

    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Informations deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/informations/index.php');
    exit();
}


if (isset($_POST['update-info'])) {
    adminOnly();
    $errors = validateInformations($_POST);

    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-info'], $_POST['id']);
        $information_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Informations updated successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/informations/index.php');
        exit();
    }else {
        $id = $_POST['id'];
        $title = $_POST['title'];
        
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
        array_push($errors, "Image required");
    }




    
}
