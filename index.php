<?php

use Acer\Assets\Controllsers\HomeAdmin;

require_once './src/Controllsers/HomeAdmin.php';
$act = $_GET['act'] ?? '/';
// dege($act);
match ($act) {
    'admin' => (new HomeAdmin)->home(),
    
};
?>