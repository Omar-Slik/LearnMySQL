<?php

include "connect.php";

$stmt =$db->query("SELECT * FROM names");
$result=$stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $row){
  $firstname=htmlentities($row["firstname"]);
  $lastname=htmlentities($row["lastname"]);
  $postcode=htmlentities($row["postcode"]);
  echo "$firstname $lastname $postcode <br>";
}





?>