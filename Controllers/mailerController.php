<?php

$to = "haqizza@gmail.com";
$headers = "From: haqizza@ilkomc2-19.my.id";
$emailSubject = "Mail From Visitor Hakuten";
$emailBody = $_POST["message"];

mail($to,$emailSubject,$emailBody,$headers);

?>
