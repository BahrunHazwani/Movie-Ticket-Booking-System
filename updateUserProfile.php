<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPI Cinemas - Update Profile</title>
    <link rel="stylesheet" type="text/css" href="CSS/updateUserProfile.css">
</head>

<body>
        <h2 style=" color: white;font-family: Trebuchet MS, sans-serif;text-align:center;">Update User Profile</h2><br>
        <div class="container">
            <center><form action="" method="POST" >
                <label >Confirm Your Existing Username</label><br><br>

                <input type="text" id="username" name="username" style=" line-height: 1.6;background-color: #FFFAF0; opacity: 0.6; font-size: 20px; width: 50%; "><br><br>

                <input type="submit" name="search" class="btn" value="Confirm" style=" line-height: 1.6;background-color: #FFFAF0; opacity: 0.6; font-size: 20px;width: 50%; ">
            </form></div></center>
            <center><table style="font-family: Trebuchet MS, sans-serif;font-size: 20px;line-height: 1.6;background-color:black;opacity: 0.8; width: 80%; font-weight: 900;padding: 50px; margin:50px;">
           
                        <tr>

                            <th style = "color:gold; background-color:brown;">Username</th>
                            <th style = "color:gold; background-color:brown;">Email</th>
                            <th style = "color:gold; background-color:brown;">Profile Picture</th>
                            <th style = "color:gold; background-color:brown;">Option</th>

                        <tr><br>


                    <?php 
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"movie ticket booking system new");

                    if(isset($_POST['search']))
                    {
                        $username = $_POST['username'];

                        $query = "SELECT * FROM login_user where username ='$username' " ;

                        $query_run = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['username'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['email'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" width="200" 
                            height="300" ALIGN=”right”>'; ?></td>
                              <td style = "color:black; background-color:#AF9B60;" class="btn_rw">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="updateuser.php"><button id = "update">Update</td></button></a>
                            </tr>

                            <?php
                        }
                    }
?>
            </table>


    </center>

<div><br>
<center><a href=  "logout.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:30%">Logout</button></a></center>
    </div>
    
</body>

</html>