<?php
  
  include 'connect.php';
  
$stmt = $db->prepare("INSERT INTO names(firstname, lastname, postcode)
                    VALUE(?, ?, ?)");
$stmt->bindValue(1,'Omar  ');
$stmt->bindValue(2,'Slik');
$stmt->bindValue(3,'79176');
$stmt->execute();
?>