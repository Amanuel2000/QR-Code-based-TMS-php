<?php

include(ROOT_PATH . "/app/database/db.php");
// include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateMatches.php");

if(isset($_POST['add-fixtures']));
dd($_POST);

// $table = 'fixture';
// $match = selectAll($table);


// $errors = array();

  
//  if (isset($_POST['add-matches'])) {
//      $_POST['userId'] = 1;
//      $_POST['posted'] = 1;
   

//     $match_id = create($table, $_POST);
//     header("location: " . BASE_URL . "/admin/matches/index.php"); 
// }

// $errors = array();
// $fixtureId = '';
// $userId = '';
// $matchType = '';
// $matchName = '';
// $matchDate = '';
// $location= '';
// $posted= '';


// $fixture = selectAll($table);


// if (isset($_POST['add-matches'])) {

//     adminOnly();
//     $errors = validateMatches($_POST);

//     if (count($errors) === 0) {
//         unset($_POST['add-topic']);
//         $topic_id = create($table, $_POST);
//         $_SESSION['message'] = 'Topic created successfully';
//         $_SESSION['type'] = 'success';
//         header('location: ' . BASE_URL . '/admin/topics/index.php');
//         exit(); 
//     } else {
//         $fixtureId = $_POST['fixtureId'];
//         $userId = $_POST['userId'];
//         $matchType = $_POST['matchType'];
//         $matchName = $_POST['matchName'];
//         $matchDate = $_POST['matchDate'];
//         $location= $_POST['location'];
//         $posted= $_POST['posted'];
        
//     }
// }


// if (isset($_GET['fixtureId'])) {
//     $fixtureId = $_GET['fixtureId'];
//     $fixture = selectOne($table, ['fixtureId' => $fixtureId]);
//     $fixtureId = $fixture['fixtureId'];
//     $matchType = $fixture['matchType'];
//     $matchName =$fixture['matchName'];
//     $matchDate = $fixture['matchDate'];
//     $location=$fixture['location'];
//     $posted= $fixture['posted'];
// }

// if (isset($_GET['del_id'])) {
//     adminOnly();
//     $fixtureId = $_GET['del_id'];
//     $count = delete($table, $fixturId);
//     $_SESSION['message'] = 'Topic deleted successfully';
//     $_SESSION['type'] = 'success';
//     header('location: ' . BASE_URL . '/admin/topics/index.php');
//     exit();
// }


// if (isset($_POST['update-topic'])) {
//     adminOnly();
//     $errors = validateTopic($_POST);

//     if (count($errors) === 0) { 
        
//         $fixtureId  = $_POST['fixtureId'];
//         unset($_POST['update-topic'], $_POST['fixtureId']);
//         $topic_id = update($table, $fixtureId, $_POST);
//         $_SESSION['message'] = 'Topic updated successfully';
//         $_SESSION['type'] = 'success';
//         header('location: ' . BASE_URL . '/admin/topics/index.php');
//         exit();
//     } else {
//         $fixtureId = $_POST['fixtureId'];
//         $userId = $_POST['userId'];
//         $matchType = $_POST['matchType'];
//         $matchName = $_POST['matchName'];
//         $matchDate = $_POST['matchDate'];
//         $location= $_POST['location'];
//         $posted= $_POST['posted'];

// }
// }