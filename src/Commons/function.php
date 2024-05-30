<?php   
 
   function debug($data)  {
    echo '<pre>';
    print_r($data);
    die;
   }
    function uploatFile($file) {
        $files = array_diff(scandir($file),['.','..']);

    foreach ($files as  $value) {
        // debug( $file . $value);
        require_once $file . $value;
    }
        // debug($file);
    }