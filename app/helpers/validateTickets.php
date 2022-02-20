<?php

function validateTickets($ticket)
{
    $errors = array();

    if (empty($ticket['ticketName'])) {
        array_push($errors, 'Ticket Name is required');
    }
    if (empty($ticket['ticketTypeName'])) {
        array_push($errors, 'Ticket Type Name is required');
    }
    if (empty($ticket['ticketQuantity'])) {
        array_push($errors, 'Ticket Quantity is required');
    }
    
    

   

    $existingTicket = selectOne('tickets', ['ticketName' => $ticket['ticketName']]);
    if ($existingTicket) {
        if (isset($ticket['update-ticket']) && $existingTicket['id'] != $ticket['id']) {
            array_push($errors, 'Name already exists');
        }

        if (isset($ticket['add-ticket'])) {
            array_push($errors, 'Name already exists');
        }
    }

    return $errors;
}
