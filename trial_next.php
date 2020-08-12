
<html>
<body>


Welcome <?php echo $_GET["email"]; ?>
<br>
Your email address is: <?php echo $_GET["passcode"]; ?>
<?php 
include_once 'includes/dbh_connect.php';
$conn=mysqli_connect($servername, $username, $password,$dbname);
$result = mysqli_query($conn,'SELECT COUNT(id) FROM inputs order by id desc limit 1');

$mail=$_GET["email"];
$pass=$_GET["passcode"];
$sql = "INSERT INTO inputs (id, emails, password,reg_date)
VALUES ('$num_rows', '$mail', '$pass',CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>



</body>
</html>
