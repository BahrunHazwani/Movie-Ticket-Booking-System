<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "movie ticket booking system new";

$conn = mysqli_connect($server, $user, $pass, $database);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['submit']))

{
$movie_name = $_POST['movie_name'];
$cast = $_POST['cast'];
$descript = $_POST['descript'];
$release_date = $_POST['release_date'];
$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$video_url = $_POST['video_url'];


    $query = "UPDATE addmovie SET cast='$cast', image = '$image', descript='$descript', release_date = '$release_date', video_url='$video_url' WHERE movie_name='$movie_name'  ";
    $query_run = mysqli_query($conn, $query);


if($query_run)
    {
        
        header("Location: ../ManageMovie.php");
    }
    else
    {
       
        header("Location: ../update.php");
    }
        }

?>