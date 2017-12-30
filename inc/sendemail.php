<?php

    $to = "naufalrocket98@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "[Cassava Crunch] Pesan dari CassavaCrunch.github.io!";

    $fields = array();
    $fields{"Fname"}    = "Nama Depan";
    $fields{"Lname"}    = "Nama Belakang";
    $fields{"email"}    = "Email";
    $fields{"sub"}    = "Subjek";
    $fields{"message"}   = "Pesan";


    $body = "Pesan yang Anda dapat:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
