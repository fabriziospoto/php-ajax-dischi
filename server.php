<?php
include 'db.php';

if (!empty($_GET['author'])) {
    $searchAuthor = $_GET['author'];
    $dbFilter = [];

    foreach ($database as $cd) {
        if ($searchAuthor == $cd['author']) {
            $dbFilter[] = $cd;
        }
    }
    header('Content-Type:application/json');
    echo json_encode($dbFilter);
    } else {
    header('Content-Type:application/json');
    echo json_encode($database);
}
 ?>
