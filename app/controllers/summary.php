<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateSummary.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

if(isset($_SESSION['id'])){

$table ='fixtures';

$clubs = selectAll('clubs');
$fixtures = selectAll($table);

$errors =array();
$id =  "";
$fixtureType = "";
$clubName = '';
$clubImage = '';
$opponenetClubImage = '';
$opponenetClubName = '';
$fixtureLocation = "";
$fixtureDate = "";
$fixtureTime = "";
// $club_id  = "";
$published  = "";





if(isset($_POST['add-fixtures'])){
    adminOnly();
    $errors = validateFixture($_POST);

    if (!empty($_FILES['clubImage']['name'])) {
        $image_name = time() . '_' . $_FILES['clubImage']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['clubImage']['tmp_name'], $destination);

        if ($result) {
            $_POST['clubImage'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, "Post image required");
    }

    if(count($errors) == 0){
        unset($_POST['add-fixtures']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1: 0;
        // $_POST['body'] = htmlentities($_POST['body']);
        // $_POST['fixtureDate'] = $_POST['fixtureDate'];
        // $topic_id  = $_POST['topic_id'];
    
    
        $fixture_id = create($table, $_POST);
        $_SESSION['message'] = "Fixtuure created successfully";
        $_SESSION['type'] = "success";
    
        header('location: ' . BASE_URL . '/admin/fixture/index.php');
        exit();
    
    }else{
        $fixtureType = $_POST['fixtureType'];
        $clubName = $_POST['clubName'];
        $clubImage = $_POST['clubImage'];
        $opponenetClubName = $_POST['opponenetClubName'];
        $opponenetClubImage = $_POST['opponenetClubImage'];
        $fixtureLocation = $_POST['fixtureLocation'];   
        $fixtureDate = $_POST['fixtureDate'];
        $fixtureTime =$_POST['fixtureTime'];
        // $club_id  = $_POST['club_id'];
        $published  = isset($_POST['published']) ? 1: 0;
    }
    

    

    if(!empty($_FILES['opponenetClubImage']['name'])){
        $image_name2 = time(). '_' . $_FILES['opponenetClubImage']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name2;

        $result = move_uploaded_file($_FILES['opponenetClubImage']['tmp_name'], $destination );

        if($result){
            $_POST['opponenetClubImage'] = $image_name2;

        }else{
            array_push($errors, "Failed to Upload image");
        }

    }else{
        
    }



if(isset($_GET['id'])){
     $id = $_GET['id'];
    $fixture = selectOne($table, ['id' => $_GET['id']]);

    $id =  $fixture['id'];
    $fixtureType = $fixture['fixtureType'];
    $clubName = $fixture['clubName'];
    $clubImage = $fixture['clubImage'];
    $opponenetClubName = $fixture['opponenetClubName'];
    $opponenetClubImage = $fixture['opponenetClubImage'];
    $fixtureLocation = $fixture['fixtureLocation'];  
   
    $fixtureDate = $fixture['fixtureDate'];
    $fixtureTime =$fixture['fixtureTime'];
    // $club_id  =  $fixture['club_id'];
    $published  =  $fixture['published'];
}



if(isset($_GET['delete_id'])){
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Post deleted successfully";
    $_SESSION['type'] = "success";
    header('location: ' . BASE_URL . '/admin/fixture/index.php');
    exit();
}

if(isset($_GET['published']) && isset($_GET['p_id'])){
    adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    
    $count = update($table, $p_id, ['published' =>$published]);

    $_SESSION['message'] = "Fixture post state changed";
    $_SESSION['type'] = "success";
    header('location: ' . BASE_URL . '/admin/fixture/index.php');
    exit();

    
}

}

if(isset($_POST['update-fixtures'])){
    adminOnly();

    $errors = validateFixture($_POST);
    
    
    if(count($errors) == 0){
        $id = $_POST['id'];
        unset($_POST['update-fixtures'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1: 0;
        // $_POST['body'] = htmlentities($_POST['body']);
        // $fixtureDate = $_POST['fixtureDate'];
        // $topic_id  = $_POST['topic_id'];


        $fixture_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Post updated successfully";
        $_SESSION['type'] = "success";
        header('location: ' . BASE_URL . '/admin/fixture/index.php');


        

    }else{
        $fixtureType = $_POST['fixtureType'];
        $clubName = $_POST['clubName'];
        $clubImage = $_POST['clubImage'];
        $opponenetClubName = $_POST['opponenetClubName'];
        $opponenetClubImage = $_POST['opponenetClubImage'];
        $fixtureLocation = $_POST['fixtureLocation'];   
        // $club_id  = $_POST['club_id'];
        $fixtureDate = $_POST['fixtureDate'];
        $fixtureTime =$_POST['fixtureTime'];
        $published  = isset($_POST['published']) ? 1: 0;
    }

    if(!empty($_FILES['clubImage']['name'])){
        $image_name = time(). '_' . $_FILES['clubImage']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['clubImage']['tmp_name'], $destination );

        if($result){
            $_POST['clubImage'] = $image_name;

        }else{
            array_push($errors, "Failed to Upload image");
        }

    }else{
        array_push($errors, "Club image required");
    }

    
    if(!empty($_FILES['opponenetClubImage']['name'])){
        $image_name2 = time(). '_' . $_FILES['opponenetClubImage']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name2;

        $result = move_uploaded_file($_FILES['opponenetClubImage']['tmp_name'], $destination );

        if($result){
            $_POST['opponenetClubImage'] = $image_name2;

        }else{
            array_push($errors, "Failed to Upload image");
        }

    }else{
        array_push($errors, "Opponenet club image required");
    }
   

}
}


else {
    header('location: ' . BASE_URL . '/login.php');
    exit(0);
}

