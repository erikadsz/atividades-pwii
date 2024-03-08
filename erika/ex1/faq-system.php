<?php
require __DIR__ . "/source/autoload.php";


use Source\Models\Faq\Question;
use Source\Models\Faq\Type;

$question = new Question();
var_dump($question);

$type = new Type();
var_dump($type);
