<?php

  include "connect.php";
  
  $stmt=$db->prepare("DELETE FROM names WHERE firstname = ?");
  
  $stmt->bindValue(1,"Ulf");

  $stmt->execute();

?>