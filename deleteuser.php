<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>

<body>


<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "movie ticket booking system new";

$conn = mysqli_connect($server, $user, $pass, $database);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}


$sql = "DELETE FROM login_user WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record deleted successfully')</script>";
  
} 
header("Location: ManageUser.php");
mysqli_close($conn);
?>
</body>
</html>