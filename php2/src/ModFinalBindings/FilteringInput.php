<?php
// Simulate a POST request
$_POST = [
    'firstname' => 'Mark',
    'lastname' => 'Watney',
    'occupation' => 'martian',
    'education' => 'Zend PHP II'
];

// Build white lists
$occ = ['martian', 'developer'];
$ed = ['Zend PHP I', 'Zend PHP II', 'Zend PHP III'];

// Filter
if(ctype_alpha($_POST['firstname']) &&
    ctype_alpha($_POST['lastname']) &&
    in_array($_POST['occupation'], $occ) &&
    in_array($_POST['education'], $ed)){

    // Input good, use it
    $goodtogo = [
        htmlspecialchars($_POST['firstname']),
        htmlspecialchars($_POST['lastname']),
        htmlspecialchars($_POST['occupation']),
        htmlspecialchars($_POST['education'])
    ];

    print_r($goodtogo);
} else {
    echo 'Input invalid';
}
