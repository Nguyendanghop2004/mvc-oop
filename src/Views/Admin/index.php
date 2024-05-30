<?php

use Acer\Assets\Controllsers\DashboardController;
// use Acer\Assets\Controllsers\HomeAdmin;

require_once './Controllsers/DashboardController.php';
$act = $_GET['act'] ?? '/';
// dege($act);
match ($act) {
    '/' => (new DashboardController)->home(),
    
};