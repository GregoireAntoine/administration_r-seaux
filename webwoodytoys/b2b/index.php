<?php
$user = "root";
$password = "Gregoire21";
$database = "woodtoys_db";
$table = "inventaire";

    try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>Site de b2b en php</h2><ol>";
  foreach($db->query("SELECT *  FROM $table") as $row) {
    echo "<li>" . $row['Name'] ." ".$row['Price']."€ "."</li>";
  } echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
