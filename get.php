<?php
    require_once "config.php";

    $id = $_POST['id'];
     
    $secret_file = "hosts/".$id."/shamir.txt";
    $file = file_get_contents($secret_file, true);
    echo json_encode($file);
    

?>
