<?php

  include "connect.php";
  
  $stmt=$db->prepare("UPDATE names SET postcode = ? WHERE firstname LIKE ?");

  
  $stmt->bindValue(1,"666");
  $stmt->bindValue(2,"a%");
 
  $stmt->execute();

?>