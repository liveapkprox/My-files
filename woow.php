<?php
header("Content-Type: application/json");

$kid = $_GET['kid'];
$key = $_GET['key'];

echo json_encode([
 "keys"=>[
  [
   "kty"=>"oct",
   "kid"=>$kid,
   "k"=>$key
  ]
 ],
 "type"=>"temporary"
]);
?>