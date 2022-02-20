<?php

function validateQrcodes($club)
{
    $errors = array();

    if (empty($club['name'])) {
        array_push($errors, 'Name is required');
    }

    $existingClub = selectOne('clubs', ['name' => $club['name']]);
    if ($existingClub) {
        if (isset($club['update-topic']) && $existingClub['id'] != $club['id']) {
            array_push($errors, 'Name already exists');
        }

        if (isset($club['add-topic'])) {
            array_push($errors, 'Name already exists');
        }
    }

    return $errors;
}
