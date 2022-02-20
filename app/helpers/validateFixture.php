<?php


function validateFixture($fixture)
{
    $errors = array();

    if (empty($fixture['fixtureType'])) {
        array_push($errors, 'Fixture Type is required');
    }

    if (empty($fixture['fixtureLocation'])) {
        array_push($errors, 'Fixture Location is required');
    }
    if (empty($fixture['fixtureDate'])) {
        array_push($errors, 'Fixture Date is required');
    }

    if (empty($fixture['clubName'])) {
        array_push($errors, 'Club name is required');
    }
    
    if (empty($fixture['opponenetClubName'])) {
        array_push($errors, ' Oppnenet club name is required');
    }

    // $existingPost = selectOne('fixtures', ['fixtureType' => $fixture['fixtureType']]);
    // if ($existingPost) {
    //     if (isset($fixture['update-fixtures']) && $existingPost['id'] != $fixture['id']) {
    //         array_push($errors, 'Post with that title already exists');
    //     }

    //     if (isset($fixture['add-fixtures'])) {
    //         array_push($errors, 'Post with that title already exists');
    //     }
    // }

    return $errors;
}