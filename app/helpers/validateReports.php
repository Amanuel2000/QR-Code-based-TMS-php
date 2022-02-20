<?php

function validateReport($report)
{
    
    $errors = array();

    if (empty($report['username'])) {
        array_push($errors, 'Username is required');
    }

    if (empty($report['email'])) {
        array_push($errors, 'Email is required');
    }

    if (empty($report['password'])) {
        array_push($errors, 'Password is required');
    }

    if ($report['passwordConf'] !== $report['password']) {
        array_push($errors, 'Password do not match');
    }

    $existingReport = selectOne('users', ['email' => $report['email']]);
    if(isset($existingReport)){
        array_push($errors, 'Email already exists');
    }
    $existingReport = selectOne('users', ['username' => $report['username']]);
    if ($existingReport){
        array_push($errors, 'Username already exists');
    }
     return $errors;
}

    

//         if (isset($user['create-admin'])) {
//             array_push($errors, 'Email already exists');
//         }
//     }

//     return $errors;
// }


function validateLogin($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    return $errors;
}