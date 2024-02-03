
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>KPI Cinemas (Admin) - Update Movie</title>
    <link rel="stylesheet" type="text/css" href="CSS/updatemovie.css">
</head>

<body><center>
	<table>
		<form action="Database/updatemovie.php" method="POST" enctype="multipart/form-data">
			<tr>
            	<td><h1>Update Movie</h1></td>
			</tr>
            <tr>
				<td><div><label>Movie Name:</label></div></td>
			</tr>
			<tr>
				<td><input type="text"  name="movie_name" value=""  required></td>
			</tr>
			<tr>
				<td><div><label>Cast:</label></div></td>
			</tr>
			<tr>
				<td><input type="text"  name="cast" value=""  required></td>
			</tr>
			<tr>
				<td><div><label>Description:</label></div></td>
			</tr>
			<tr>
				<td><input type="text"  name="descript" value=""  required></td>
            </tr>
            <tr>
				<td><div><label>Release Date:</label></div></td>
			</tr>
            <tr>
				<td><input type="date"  name="release_date" value="" required></td>
			</tr>
			<tr>
				<td><div><label>Image:</label></div></td>
			</tr>
			<tr>
				<td><input type="file"  name="image" value=""  required></td>
			</tr>
			<tr>
				<td><div><label>Video URL:</label></div></td>
			</tr>
			<tr>
				<td><input type="url"  name="video_url" value=""  required></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit" >Update Movie</button></td>
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