<?php

class Contact {
    protected $firstName;
    protected $lastName;
    protected $bestFriend;

    /* Constructor and destructor */
    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        echo "Je suis la et je suis $lastName $firstName\n";
    }

    public function __destruct() {
        echo "Bye bye $this->lastName $this->firstName\n";
    }

    /* Methods */
    public function setFirstName(string $firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName) {
        $this->lastName = $lastName;
    }

    public function setBestFriend(Contact $bestFriend) {
        $this->bestFriend = $bestFriend;
        if ($bestFriend->bestFriend != $this) {
            $bestFriend->setBestFriend($this);
        }
    }

    public function whoAreYou() {
        echo "Je suis la et je suis $this->lastName $this->firstName\n";
    }

    public function whoIsYourBf() {
        if (isset($this->bestFriend)) {
            $bln = $this->bestFriend->lastName;
            $bfn = $this->bestFriend->firstName;
            echo "Mon meilleur ami est $bln $bfn\n";
        } else {
            echo "Je n'ai pas de meilleur ami :(\n";
        }
    }
}

function main() {
    $contact = new Contact("Leno", "Lemarie");
    $contact->setFirstName("Lena");
    $contact->whoAreYou();
    $contact->WhoIsYourBf();
    echo "------------------\n";
    $contact2 = new Contact("Lala", "Sam");
    $contact->setBestFriend($contact2);
    $contact->WhoIsYourBf();
}

main();

