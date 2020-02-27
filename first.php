<!Doctype html>
<html>
<head>
<title>User Information</title>
</head>
<body style=" background-image: url(download1.jpg); color: white;">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akash";
$name= $_GET["u_name"];
$mail= $_GET["e_mail"];
$pass= $_GET["password"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
	print "Connection successfull";
echo "<br>";
$sql = "SELECT DISTINCT name, email_id, password,text FROM user WHERE password= '$pass' and email_id='$mail'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Username: " . $row["name"]. " Email-id: " . $row["email_id"]. " Password: " . $row["password"] . "<br>" ." information: " . $row["text"]. "<br>";
}}
else {
    echo "e-mail id or username is wrong";
}
mysqli_close($conn);
?>
</body>
</html>