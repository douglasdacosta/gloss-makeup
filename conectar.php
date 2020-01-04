<?php
try {
    $connect = mysqli_connect('127.0.0.1', 'dougl179_glossma', 'dougl179_glossma#');
    $db = mysqli_select_db($connect, 'dougl179_glossmakeup');
} catch (Exception $ex) {
    var_dump($ex);
}