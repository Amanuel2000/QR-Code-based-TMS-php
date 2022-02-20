<?php


function validateSettlePayments($payment)
{
    $errors = array();

    if (empty($payment['paymentCode'])) {
        array_push($errors, 'Payment Code is Required is required');
    }

    if (empty($payment['bankName'])) {
        array_push($errors, 'Bank Name is required');
    }

    // if (empty($post['topic_id'])) {
    //     array_push($errors, 'Please select a topic');
    // }

    $existingPost = selectOne('payments', ['paymentCode' => $payment['paymentCode']]);
    if ($existingPost) {
        if (isset($payment['update-payment']) && $existingPost['id'] != $payment['id']) {
            array_push($errors, 'Post with that code already exists');
        }

        if (isset($post['add-payment'])) {
            array_push($errors, 'Post with that code already exists');
        }
    }

    return $errors;
}