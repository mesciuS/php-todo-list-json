<?php

$milan = [
    'Maignan',
    'Calabria',
    'Kjaer',
    'Tomori',
    'Hernandez',
    'Krunic',
    'Bennacer',
    'Tonali',
    'Diaz',
    'Leao',
    'Giroud',
];

// var_dump($milan);
header('content-type: application/json');
echo json_encode($milan);