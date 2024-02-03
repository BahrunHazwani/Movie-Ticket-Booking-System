<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>KPI Cinemas (Admin) - Generate Report</title>
    <link rel="stylesheet" type="text/css" href="CSS/gnreport.css">

</head>
<body>

    <br><h1>Generate Report</h1><br>
    <center> <ul>
      <a href="ManageUser.php" target="_self"><li>Manage User</li></a>
      <a href="ManageMovie.php" target="_self"><li>Manage Movie</li></a>
      <a><li>Generate Report</li></a>
</ul></center>
    <div class="container">
            <center><form action="" method="GET" >
                
                <div class="title" id="title">
            <div class="max-width">
            <h3 class="title" style="font-size: 20;"> Choose Movie Classification </h3>
            <tr><td><select  name="classification" id ="classification" style= "width: 50%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #FFFAF0;font-weight: bold;font-size: 15px;" required>
                <option value=""></option>
                <option value="u" > U </option>
                <option value="p13" > P13 </option>
                <option value="18sg" > 18SG </option>
                <option value="18pa" > 18PA </option>
                <option value="18pl" > 18PL </option>
            </select></td></tr>
            
            <h3 class="title" style="font-size: 20;"> Select Date </h3>
            <div class="searc_area">
                <b style= "font-size: 12px; font-weight: bold;">From Date:</b>
                <input type="date" name="date1"/>&nbsp;&nbsp;&nbsp;&nbsp;
                <b style= "font-size: 12px; font-weight: bold;">To Date:</b>
                <input type="date" name="date2"/>&nbsp;&nbsp; <button type="submit"> Submit </button>
            </div>
            </div>
            </div>

        </form>
        </div></center>
        <center>
            <table>
           
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Movie Name</th>
                            <th>Classification</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Number of Tickets</th>
                            <th>Total Amount</th>

                        <tr><br>

                <?php 
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"movie ticket booking system new");

                if(isset($_GET["classification"])) {
                    $classification = $_GET["classification"];
                    $date1 = $_GET["date1"];
                    $date2 = $_GET["date2"];
                    
                    $sql = "SELECT * FROM book_ticket WHERE classification = '$classification' AND date1 BETWEEN '$date1' AND '$date2'";
                    

                    $result = mysqli_query($connection, $sql);

                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                
                            <tr>
                              <td><?php echo $row["id"];?></td>
                              <td><?php echo $row['username1'];?></td>
                              <td><?php echo $row['movie'];?></td>
                              <td><?php echo $row['classification'];?></td>
                              <td><?php echo $row['time'];?></td>
                              <td><?php echo $row['date1'];?></td>
                              <td><?php echo $row['numTickets'];?></td>
                              <td><?php echo $row['tot_amount'];?></td>
    
                            </tr>

                            <?php
                        }
                    }
?>

</table>
    </center>
     <div><br>

        <center><a href = "logout.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:30%">Logout</button></a></center>
        
    </div>
</body>
</html>