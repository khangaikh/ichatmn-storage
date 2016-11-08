<?php
    require_once "config.php";

    $secret = $_POST['secret'];
    $part = $_POST['part'];
    $id = $_POST['id'];
    
    $dir = 'hosts/'.$id;

    mkdir($dir, 0777, true);
	
	$secret_file = "hosts/".$id."/".$secret.".txt";
    $myfile = fopen($secret_file, "w") or die("Unable to open file!");

    fwrite($myfile, $part);
    fclose($myfile);
    

?>
