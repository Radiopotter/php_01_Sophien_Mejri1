
<?php

$words1 = [
    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            'E'
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['fortuna']
    ],
    'fine' => '!'
];

$words3 = "Nel";
$words4 = "di cammin di nostra vita";
$words5 = "una selva";
$words6 = "che' la";
$words7 = "via";
$words8 = "smarrita";

$results = $words3 . " " .
           $words1[6][3][0] . " " .
           $words4 . " " .
           $words1[4] . " " .
           $words1[6][4] . " " .
           $words1[6][5] . " " .
           $words5 . " " .
           $words1[6][0] . ", " .
           $words6 . " " .
           $words1[7] . " " .
           $words7 . " " .
           $words1[6][1] . " " .
           $words8;

echo $results;