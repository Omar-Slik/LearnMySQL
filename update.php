<?php
  
  include 'connect.php';
  
$stmt = $db->prepare(" UPDATE names SET postcode = ? WHERE firstname = ?");
$stmt->bindValue(1,'89898');
$stmt->bindValue(2,'Omar');
$stmt->execute();
?>