<?php

/*
 if each request in this code takes a second
 $listContact = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
 foreach($listContact as $contactId) {
    $contact = Contact::load(contactId);
    echo "Bonjour, ".$contact->getDesignation();
 }
 Then it would take 10 seconds to execute the code.

*/