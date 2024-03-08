<?php

require __DIR__ . "/source/Models/User.php";

use Source\Models\User;

$user = new User();
$user->setId(1);
$user->setName(NULL);
$user->setEmail("fabiosantos@ifsul.edu.br");
$user->setPassword("12345");

echo "<div>Meu id é {$user->getId()}</div>";
echo "<div>Meu nome é {$user->getName()}</div>";
echo "<div>Meu e-mail é {$user->getEmail()}</div>";
echo "<div>Minha senha é {$user->getPassword()}</div>";

$userSecond = new User(1,"Débora", "debora@gmail.com","234567");

echo "<div>Meu id é {$userSecond->getId()}</div>";
echo "<div>Meu nome é {$userSecond->getName()}</div>";
echo "<div>Meu e-mail é {$userSecond->getEmail()}</div>";
echo "<div>Minha senha é {$userSecond->getPassword()}</div>";