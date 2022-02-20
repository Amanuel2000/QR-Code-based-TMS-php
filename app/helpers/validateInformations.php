<?php

function validateInformations($information)
{
    $errors = array();

    if (empty($information['title'])) {
        array_push($errors, 'Title is required');
    }
    if (empty($information['prerequest'])) {
        array_push($errors, 'body is required');
    }

    $existingInfo = selectOne('informations', ['title' => $information['title']]);
    if ($existingInfo) {
        if (isset($information['update-info']) && $existingInfo['id'] != $information['id']) {
            array_push($errors, 'Name already exists');
        }

        if (isset($information['add-info'])) {
            array_push($errors, 'Name already exists');
        }
    }

    return $errors;
}
