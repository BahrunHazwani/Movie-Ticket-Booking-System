<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>KPI Cinemas - Ticket Payment</title>
    <link rel="stylesheet" type="text/css" href="CSS/MakePayment.css">

</head>
<body>
    
 <center>
    <br><h1>TICKET PAYMENT</h1><br>
    <table>

        <form action = "MakePayment.php" method="POST">
                <tr>
                    <td><h2>MAKE PAYMENT</h2></td>
                </tr>

                <tr>
                    <td><label>Please Enter Name on Card</label></td>
                </tr>

                <tr>
                    <td><input type="text" name="name"  id= "name" style= "width: 100%;padding: 5px 20px;margin: 8px 0;border: 1px solid black;background-color:#FBEEE6;font-weight: bold;font-size: 17px;" required></td>
                </tr>

                <tr>
                    <td><p>Name must be 2-20 characters long</p></td>
                </tr>
                
                <tr> 
                    <td><div><label>Please Enter Card Number:</label></div></td>
                </tr>

                <tr>
                    <td><input type="text"  name="cardnum" id = "cardnum" max="16" style= "width: 100%;padding: 5px 20px;margin: 8px 0;border: 1px solid black;background-color: #FBEEE6;font-weight: bold;font-size: 17px;" required></td>
                </tr>
            
                <tr>
                    <td><p>The Card Number must be 16 characters long</p></td>
                </tr>

                <tr>
                    <td><div><label>Please Enter CCV:</label></div></td>
                </tr>
            
                <tr>
                    <td><input type="text"  name="ccv" id = "ccv" max="16"  style= "width: 100%;padding: 5px 20px;margin: 8px 0;border: 1px solid black;background-color: #FBEEE6;font-weight: bold;font-size: 17px;" required></td>
                </tr>
            
                <tr>
                    <td><p>The CCV must be 3 characters long</p></td>
                </tr>
                 <tr>
                    <td><div><label>Please Enter Amount You Want To Pay (RM):</label></div></td>
                </tr>
            
                <tr>
                    <td><input type="text"  name="pay" id = "pay" style= "width: 100%;padding: 5px 20px;margin: 8px 0;border: 1px solid black;background-color: #FBEEE6;font-weight: bold;font-size: 17px;" required></td>
                </tr>
                <tr>
                    <td><div><label>Expiration Date</label></div></td>
                </tr>
                
                <tr>
                    <td><input type="date" name="date1" id = "date1" style= "width: 100%;padding: 5px 20px;margin: 8px 0;border: 1px solid black;background-color: #FBEEE6;font-weight: bold;font-size: 17px;" required></td>
                </tr>

                <tr>
                    <td><div><label>Enter your Telephone Number</label></div></td>
                </tr>

                <tr>
                    <td><input type="tel" name="phone" id="phone" style= "width: 100%;padding: 5px 20px;margin: 8px 0;border: 1px solid black;background-color: #FBEEE6;font-weight: bold;font-size: 17px;" required></td>
                </tr>
               
               <tr>
                <td><div><button type="submit" name="submit" value="submit" >Make Payment</button></div></td>
               </tr>
</center>
        </form>
    </table>
 </center>
<center><a href="bookTicket.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:30%">Back</button></a></center>
</body>
</html>
<?php
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "movie ticket booking system new" ; 

$conn = mysqli_connect($server , $username, $password, $dbname);
    
if(isset($_POST['submit'])){
    
    
    if(!empty($_POST['name']) && !empty($_POST['cardnum']) && !empty($_POST['ccv']) && !empty($_POST['pay']) && !empty($_POST['date1']) && !empty($_POST['phone'])){
        
            $name = $_POST['name'];
            $cardnum = $_POST['cardnum'];
            $ccv = $_POST['ccv'];
            $pay = $_POST['pay'];
            $date1 = $_POST['date1'];
            $phone = $_POST['phone'];

        
        $query = "insert into make_payment(name,cardnum,ccv,pay,date1,phone) values('$name', '$cardnum', '$ccv', '$pay','$date1', '$phone')";
        
        $run = mysqli_query($conn,$query) or die(mysqli_error());
        
        if($run){
                echo header("Location: bank.php");

                
        }
        else {
            echo "Form Not Submitted";
            
        }
    }
    
else {
        echo "All fields required";
    }
}
 
?>


