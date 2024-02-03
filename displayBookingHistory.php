<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPI Cinemas - Display Booking History</title>
    <link rel="stylesheet" type="text/css" href="CSS/displayBookingHistory.css">
</head>

<body>
        <h2 style=" color: white;font-family: Trebuchet MS, sans-serif;text-align:center;">Booking History</h2><br>

        <p align = "right">
        <a href="updateUserProfile.php">
        <button name="submit" class="btn" 
        style="background-color: #34495E;border: 7px dotted gold;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 22px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:20%">
        Update Profile
        </button>
        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </p>

        <div class="container">
            <center><form action="" method="POST" >
                <label >Enter Your Username</label><br><br>

                <input type="text" id="username1" name="username1" style=" line-height: 1.6;background-color: #FFFAF0; opacity: 0.6; font-size: 20px; width: 50%; "><br><br>

                <input type="submit" name="search" class="btn" value="Confirm" style=" line-height: 1.6;background-color: #FFFAF0; opacity: 0.6; font-size: 20px;width: 50%; ">
            </form></div></center>
            <center><table style="font-family: Trebuchet MS, sans-serif;font-size: 20px;line-height: 1.6;background-color:black;opacity: 0.8; width: 80%; font-weight: 900;padding: 50px; margin:50px;">
           
                        <tr>
                            <th style = "color:gold; background-color:brown;">ID</th>
                            <th style = "color:gold; background-color:brown;">Your Name</th>
                            <th style = "color:gold; background-color:brown;">Movie Classification</th>
                            <th style = "color:gold; background-color:brown;">Movie Name</th>
                            <th style = "color:gold; background-color:brown;">Movie Time</th>
                            <th style = "color:gold; background-color:brown;">Movie Date</th>
                            <th style = "color:gold; background-color:brown;">Number of Tickets</th>
                            <th style = "color:gold; background-color:brown;">Total Amount</th>
                        <tr><br>


                    <?php 
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"movie ticket booking system new");

                    if(isset($_POST['search']))
                    {
                        $username1 = $_POST['username1'];

                        $query = "SELECT * FROM book_ticket where username1 ='$username1' " ;

                        $query_run = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['id'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['username1'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['classification'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['movie'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['time'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['date1'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['numTickets'];?></td>
                              <td style = "color:black; background-color:#AF9B60;"><?php echo $row['tot_amount'];?></td>
                            </tr>

                            <?php
                        }
                    }
?>
            </table>

<p style = "font-size:30px; font-weight:900;font-family:Trebuchet MS, sans-serif; color:orange; background-color:#FAE5D3 ;width: 30%;">Download e-Ticket here. <br><br>
<a href="images/e-ticket.jpg"  target = "blank" download>
  <img src="images/time.png" alt="W3Schools" width="100" height="100"><br><br></p>
</a>
    </center>

<div><br>
<center><a href=  "logout.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:30%">Logout</button></a></center>
    </div>
    
</body>

</html>