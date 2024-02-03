<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>KPI Cinemas (Admin) - Manage User</title>
    <link rel="stylesheet" type="text/css" href="CSS/ManageUser.css">

</head>
<body>

    <br><h1>Manage User</h1><br>
   <center> <ul>
      <a><li>Manage User</li></a>
      <a href="ManageMovie.php" target="_self"><li>Manage Movie</li></a>
      <a href="gnreport.php"  target="_self"><li>Generate Report</li></a>
</ul></center>
            <center><table>
           
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Option</th>
                        <tr><br>
                    <?php 
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"movie ticket booking system new");
                        $query = "SELECT id,username,email FROM login_user ";
                        $query_run = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                              <td><?php echo $row["id"];?></td>
                              <td><?php echo $row["username"];?></td>
                              <td><?php echo $row["email"];?></td>
                              <td><center><a href="deleteuser.php?id=<?php echo $row["id"]; ?>"><button id = "remove">Remove</button></a></center></td>
                            </tr>

                            <?php
                        }
                    
?>
            </table>
<center><a href = "logout.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:30%">Logout</button></a></center>
</body>
</html>