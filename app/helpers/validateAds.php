<?php

function validateAds($ads)
{
    
    $errors = array();

    if (empty($ads['name'])) {
        array_push($errors, 'Name is required');
    }

    if (empty($ads['description'])) {
        array_push($errors, 'Description is required');
    }

   
    $existingAds = selectOne('ads', ['name' => $ads['name']]);
    if(isset($existingAds)){
        array_push($errors, 'Name already exists');
    }
    $existingAds = selectOne('ads', ['description' => $ads['description']]);
    if ($existingAds){
        array_push($errors, 'Description already exists');
    }
     return $errors;
}

    

//         if (isset($user['create-admin'])) {
//             array_push($errors, 'Email already exists');
//         }
//     }

//     return $errors;
// }


