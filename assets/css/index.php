<?php
    include '../../config/app.php';
    $i = 0;
    if ($i == 0) {
        echo '<h1>Hayo Mau Ngapain</h1>';
        header('Refresh: 2; url='. $baseUrl .'', true, 301);
        exit();
    } else {
        header('location: '. $baseUrl .'', true, 301);
        exit();
    }
?>