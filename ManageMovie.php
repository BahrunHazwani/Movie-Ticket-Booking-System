<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>KPI Cinemas (Admin) - Manage User</title>
    <link rel="stylesheet" type="text/css" href="CSS/ManageMovie.css">

</head>
<body>

    <br><h1>Manage Movie</h1><br>
   <center> <ul>
      <a href="ManageUser.php"  target="_self"><li>Manage User</li></a>
      <a><li>Manage Movie</li></a>
      <a href="gnreport.php"  target="_self"><li>Generate Report</li></a>
</ul></center>
            <center><table>
                <br><br>
           <center><a href="addmovie.php"><button id = "add">Add</button></a></center></a></center>
                        <tr>
                            <th>ID</th>
                            <th>Movie Name</th>
                            <th>Cast</th>
                            <th>Description</th>
                            <th>Release Date</th>
                            <th>Trailer</th>
                            <th>Images</th>
                            <th>Option</th>
                        </tr><br>
                    <?php 
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"movie ticket booking system new");
                        $query = "SELECT movie_id,movie_name,cast,descript,release_date,video_url,image FROM addmovie ";
                        $query_run = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                              <td><?php echo $row["movie_id"];?></td>
                              <td><?php echo $row["movie_name"];?></td>
                              <td><?php echo $row["cast"];?></td>
                              <td><?php echo $row["descript"];?></td>
                              <td><?php echo $row["release_date"];?></td>
                              <td><?php echo $row["video_url"];?></td>
                              <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" width="200" 
                            height="300" ALIGN=”right”>'; ?></td>

                              <td><a href="update.php?movie_name=<?php echo $row["movie_name"]; ?>" ><button id = "remove">update</button>

                                <a href="deletemovie.php?movie_id=<?php echo $row["movie_id"]; ?>"><button id = "remove">Remove</button></a></td>
                            </tr>
                            <?php
                        }
                    
?>
            </table>
              
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
<center><a href = "logout.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:30%">Logout</button></a></center>
</body>
</html>