<?php 

include 'Database/ticket.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$movie_name = $_POST['movie_name'];
	$cast = $_POST['cast'];
	$descript = ($_POST['descript']);
	$release_date = ($_POST['release_date']);
	$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$video_url = $_POST['video_url'];
	
	
		$sql = "SELECT * FROM addmovie WHERE movie_name='$movie_name'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO addmovie (movie_name, cast, descript, release_date, image, video_url)
					VALUES ('$movie_name', '$cast', '$descript', '$release_date', '$image', '$video_url')";
			$result = mysqli_query($conn, $sql);
  	}
			if ($result) {
				echo "<script>alert('Movie Added Successfully!')</script>";
				$movie_name = "";
				$cast = "";
				$descript = "";
				$release_date = "";
				$image = "";
				$video_url = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		}
		
	


?>


<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>KPI Cinemas (Admin) - Add Movie</title>
    <link rel="stylesheet" type="text/css" href="CSS/addmovie.css">
</head>

<body><center>
	<table>
		<form action="" method="POST" enctype="multipart/form-data">
			<tr>
            	<td><h1>Add Movie</h1></td>
			</tr>
            <tr>
				<td><div><label>Movie Name:</label></div></td>
			</tr>
			<tr>
				<td><input type="text"  name="movie_name" value="<?php echo $movie_name; ?>" style= "width: 100%;padding: 9px 20px;margin: 8px 0;border: 1px solid black;background-color:#FBEEE6;font-weight: bold;font-size: 17px;" required></td>
			</tr>
			<tr>
				<td><div><label>Cast:</label></div></td>
			</tr>
			<tr>
				<td><input type="text"  name="cast" value="<?php echo $cast; ?>" style= "width: 100%;padding: 9px 20px;margin: 8px 0;border: 1px solid black;background-color:#FBEEE6;font-weight: bold;font-size: 17px;" required></td>
			</tr>
			<tr>
				<td><div><label>Description:</label></div></td>
			</tr>
			<tr>
				<td><input type="text"  name="descript" value="<?php echo $_POST['descript']; ?>" style= "width: 100%;padding: 9px 20px;margin: 8px 0;border: 1px solid black;background-color:#FBEEE6;font-weight: bold;font-size: 17px;" required></td>
            </tr>
            <tr>
				<td><div><label>Release Date:</label></div></td>
			</tr>
            <tr>
				<td><input type="date"  name="release_date" value="<?php echo $_POST['release_date']; ?>" style= "width: 100%;padding: 9px 20px;margin: 8px 0;border: 1px solid black;background-color:#FBEEE6;font-weight: bold;font-size: 17px;" required></td>
			</tr>
			<tr>
				<td><div><label>Image:</label></div></td>
			</tr>
			<tr>
				<td><input type="file"  name="image" value="<?php echo $_POST['image']; ?>" style= "width: 100%;padding: 9px 20px;margin: 8px 0;border: 1px solid black;background-color:#FBEEE6;font-weight: bold;font-size: 17px;" required></td>
			</tr>
			<tr>
				<td><div><label>Video URL:</label></div></td>
			</tr>
			<tr>
				<td><input type="url"  name="video_url" value="<?php echo $_POST['video_url']; ?>" style= "width: 100%;padding: 9px 20px;margin: 8px 0;border: 1px solid black;background-color:#FBEEE6;font-weight: bold;font-size: 17px;margin-bottom: 0.7cm;" required></td>
			</tr>
			<tr>
				<td><button name="submit" class="btn">Add Movie</button></td>
			</tr>
			
		</form>
		</table>
	</div>
	<br>
	        <br><br>
<!-- TOP BUTTON -->
<center><button onclick="topFunction()" id="myBtn" title="Go to top">Go to top</button></center>
<script>
/* TOP BUTTON */

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script></center>
<br><br>
	<center><a href="ManageMovie.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:30%">Back</button></a></center>
</center>
</body>
</html>