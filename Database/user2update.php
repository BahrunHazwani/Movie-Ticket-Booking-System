<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "movie ticket booking system new";

$conn = mysqli_connect($server, $user, $pass, $database);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['update_user']))
{
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $date1 = ($_POST['date1']);
    $password = $_POST['password'];

    $query = "UPDATE login_user SET username='$username', email='$email', image = '$image', password='$password' WHERE date1='$date1' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        
        header("Location: ../updateUserProfile.php");
    }
    else
    {
       
        header("Location: ../updateuser.php");
    }
}

?>