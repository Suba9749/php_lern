<?php
if(isset($_GET['id'])) {
    $contact_file='contacts.json';
    $contacts=file_exists($contact_file) ? json_decode(file_get_contents($contact_file), true) : [];

// remove the contact by id
   $contacts=array_filter($contacts, fn($c) => $c['id'] !==(int) $_GET['id']);

   file_put_contents($contact_file, json_encode($contacts, JSON_PRETTY_PRINT));


    echo "Contact deleted successfully.";
} else {
    echo "No record selected for deletion.";
}