<?php
if ($GLOBALS['ROUTE_1'] == 'home') {
    switch($GLOBALS['ROUTE_2']) {
        default:
            include('views/pages/home.php');
            break;
    }
}
else {
    include('views/pages/home.php');
}
