<?php

function validateUser($user)
{
    
    $errors = array();

   

    if (empty($user['fullName'])) {
        array_push($errors, 'Full Namme is required');
    }

    if (empty($user['birthDate'])) {
        array_push($errors, 'Birthdate is required');
    }


    if (empty($user['gender'])) {
        array_push($errors, 'gender is required');
    }

    if (empty($user['phoneNumber'])) {
        array_push($errors, 'phone number is required');
    }

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Email is required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }
    if(strlen($user['password']) < 8){
        array_push($errors, 'Weak Password, please use characters equal or greater than eight.');
    }
    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Password do not match');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if(isset($existingUser)){
        array_push($errors, 'Email already exists');
    }
    $existingUser = selectOne('users', ['username' => $user['username']]);
    if ($existingUser){
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