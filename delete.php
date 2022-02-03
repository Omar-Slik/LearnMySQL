<?php
  
  include 'connect.php';
  
$stmt = $db->prepare(" DELETE FROM names WHERE firstname = ?");
$stmt->bindValue(1,'Omar');
$stmt->execute();
?>