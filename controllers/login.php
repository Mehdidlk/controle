<?php
//   var_dump($_GET);
//    die;
$users = [
    [
        'pseudo' => 'Mehdi',
        'mdp' => 'requinsupercool',
        'age' => '20',
    ],
    [
        'pseudo' => 'RequinYeah',
        'mdp' => 'Yeah!',
        'age' => '2'
    ],

    [
        'pseudo' => 'Requinpabo',
        'mdp' => 'tpabo',
        'age' => '212'
    ],
];


$ok = true;

for ($i = 0; !$ok; $i++) {
    $ok = $users[$i]['pseudo'] === $_GET['name'] && $users[$i]['mdp'] === $_GET['password'];
}
if ($ok) {
    session_start();
    $_SESSION['isconnected'] = $_GET['name'];
    header('Location: /index.php');
    exit();
} else {
    unset($_SESSION['login']);
    header('Location: /Templates/connexion.php');
    exit();
}
