<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>KPI Cinemas - Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/home.css">

</head>
<body>

    <br><h1>KPI Cinemas</h1><br>
            
                     
<p align = "right"><a href=  "login.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:10%">Login</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<div style = "background-color:black;"><p align = "right" style = "font-style:italic;color:yellow;font-size:18px;font-weight: bold;"> **Please login to book ticket for user **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></div>                 
                           
                            
                            
                            
                            
                        <br>
                    <?php 
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"movie ticket booking system new");
                        $query = "SELECT * FROM addmovie ";
                        $query_run = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                           <center><table>
           
                             <tr><th>Movie Name:</th></tr>
                             <tr><td style = "color:white;"><?php echo $row["movie_name"];?></td></tr>
                              <tr><th>Cast:</th></tr>
                              <tr><td style = "color:white;"><?php echo $row["cast"];?></td></tr>
                              <tr><th>Descript:</th></tr>
                             <tr> <td style = "color:white;"><?php echo $row["descript"];?></td></tr>
                             <tr><th>Release Date:</th></tr>
                             <tr> <td style = "color:white;"><?php echo $row["release_date"];?></td></tr>
                             <tr><td><center><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" width="200" 
                            height="300" ALIGN=”right” ></center></td></tr>
                            <tr><td><a href="<?php echo $row["video_url"];?>" target="_blank"><center><button>Watch Trailer</button></center></a></td></tr>
</table></center>
                            <?php
                        }
                    
?>
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
            
<center><a href="index.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:30%">Back</button></a></center>
</body>
</html>