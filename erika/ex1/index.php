<?php

require __DIR__ . "/source/User.php";

$user = new User();

$user->setName("Erika Souza");
$user->setEmail("erikasouza@gmail.com");

echo "Meu nome é {$user->getName()}";
echo "Meu e-mail é {$user->getEmail()}";

