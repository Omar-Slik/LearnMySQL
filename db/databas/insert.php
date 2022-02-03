<?php

  include "connect.php";
  
  $stmt=$db->prepare("INSERT INTO names (firstname, lastname, postcode) 
                      VALUES (?,?,?)");
  
  $stmt->bindValue(1,"Ulf");
  $stmt->bindValue(2,"Wiberg");
  $stmt->bindValue(3,"784 65");
  $stmt->execute();

?>