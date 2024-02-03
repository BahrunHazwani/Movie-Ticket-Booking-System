<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Profile</title>
    <link rel="stylesheet" type="text/css" href="CSS/updateuser.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

               
                        <center><table>
                        <form action="Database/user2update.php" method="POST" enctype="multipart/form-data">
                        <tr>
                                <td><center><h2>Update Profile</h2></center></td>
                        </tr>
                            
                                <td><label for="">Username</label><br>
                                <input type="text" name="username" value="" ></td>
                            
                        <tr>   
                                <td><label for="">Email</label><br>
                                <input type="text" name="email" value="" ></td>
                        </tr>  

                        <tr>  
                                <td><label for="">Profile Picture</label><br>
                                <input type="file" name="image" value="" ></td>
                        </tr> 
   
                        <tr>
                                <td><label>Date of Birth:</label><br>
                                <input type="date"  name="date1" id = "date1" value="" required>
                                <small>* You must use the same date of birth as you <br>&nbsp;&nbsp;&nbsp;registered</small></td>
                        </tr>
                        
                        <tr>
                                <td><label for="">Password</label><br>
                                <input type="password" name="password" value="" ></td>

                        </tr>    
                        
                        <tr>
                                <td><label for="">Confirm Password</label><br>
                                <input type="password" name="cpassword" value="" ></td>

                        </tr>
                        <tr>
                                <td><button type="submit" name="update_user" value="" >
                                    Update Profile
                                </button></td>
                         </tr>  

                        </form>
                        </table></center>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
        <center><a href="updateUserProfile.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:30%">Back</button></a></center>
</body>
</html>

