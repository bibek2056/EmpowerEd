<html>
<script>
  $(document).ready(function(){
    $("form").submit(function(){
      alert("login Successfully");
    });
  });
  </script>

<?php

// login.php
require_once ('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Retrieve user data from the database
    $sql = "SELECT * FROM myadmin WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($password == $row["password"]) {

            header("Location: admin_panel.php");
			exit();
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "User not found";
    }

    $conn->close();
}
?>
<script type="text/javascript" src="admin_panel.js"></script>
</html>