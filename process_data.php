<?php // process_data.php
  $name = $_POST['name']; // Access the posted data

  if (!empty($name)) {
    $greeting = "Hello, " . $name . "!";
    echo $greeting;  // Send the greeting back to the client
  } else {
    echo "Please enter a name.";
  }
?>