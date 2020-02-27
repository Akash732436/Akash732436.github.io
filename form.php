<!Doctype html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akash";
$name= $_GET["u_name"];
$mail= $_GET["e_mail"];
$pass= $_GET["password"];
$text= $_GET["text"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO user (name, email_id, password,text) VALUES ('$name', '$mail', '$pass','$text')";
if(mysqli_query($conn, $sql)){
    echo "Your account has been created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>
<br><br>
<a href="log_in.html">click here to login</a>
</body>
</html>
