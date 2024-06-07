<?php
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if($text==""){
    $response = "CON what you would you what to check \n ";
    $response .= "1. My account No \n";
    $response .= "2. My phone Number";
}else if($text=="1"){
    $response = "CON choose account info you want to view \n ";
    $response .= "1. Account Number \n";
    $response .= "2. Account Balance"; 
}else if($text=="2"){
    $response = $phoneNumber
}

?>