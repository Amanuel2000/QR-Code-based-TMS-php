<?php

function validateClub($club)
{
    $errors = array();

    if (empty($club['clubName'])) {
        array_push($errors, 'Club name is required');
    }

    $existingClub = selectOne('clubs', ['clubName' => $club['clubName']]);
    if ($existingClub) {
        if (isset($club['update-club']) && $existingClub['id'] != $club['id']) {
            array_push($errors, 'Name already exists');
        }

        if (isset($club['add-club'])) {
            array_push($errors, 'Name already exists');
        }
    }

    return $errors;
}
