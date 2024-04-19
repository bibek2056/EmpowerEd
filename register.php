<html>
<script>
  $(document).ready(function(){
    $("form").submit(function(){
      alert("Registered Successfully");
    });
  });
  </script>

<?php
// register.php
require_once ('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"]; // Hash the password for security, recommended


	// Prepare SQL statement to check if email exists
	$stmt = $conn->prepare("SELECT * FROM sign_up WHERE email = ?");
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$result = $stmt->get_result();

	// Check if any rows were returned (email already exists)
	if ($result->num_rows > 0) {
		echo "Email already exists";
		exit();
	} else {
		// Insert user data into the database
		$sql = "INSERT INTO sign_up (name, email, password) VALUES ('$name', '$email', '$password')";

		if ($conn->query($sql) === TRUE) {
			
			echo "User registered successfully";
			header("Location: login.php");
			exit();

		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
	$stmt->close();
}

?>
<script type="text/javascript" src="script.js"></script>
</html>