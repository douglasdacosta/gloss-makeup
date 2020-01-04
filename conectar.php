<?php
try {
    $connect = mysqli_connect('localhost', 'dougl179_glossma', 'dougl179_glossma#');
} catch (Exception $ex) {
    var_dump($ex);
}