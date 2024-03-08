<?php
require __DIR__ . "/source/autoload.php";


use Source\Models\Hospital\Doctor;
use Source\Models\Hospital\Pacient;

$doctor = new Doctor(12, "Drauzio Varela", "drauzio@gmail.com","3456789", "34567", "Cardiologista" );
var_dump($doctor);

$patient = new Patient(12, "Isabel Bays", "bel@gmail.com","678944", "23/03/2007", " . ");
var_dump($patient);
