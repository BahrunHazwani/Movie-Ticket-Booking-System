
<html>
<head>
	<title>KPI Cinemas - Bank</title>
	<style>
	 button
       {
            background-color: gold;
            border: none;
            color: black;
            padding: 7px 32px;
            text-align: center;
            text-decoration: none;

            font-size: 18px;
            font-family: Trebuchet MS, sans-serif; 
            cursor: pointer; 
            font-weight: bold; 
            width:100%;  
            cursor: pointer;
            outline: none;
       }

       button:hover {background-color: gold}

       button:active 
       {
            background-color: #3e8e41;
            transform: translateY(4px);
       }
	</style>
</head>
	<center><body>
		<table style ="border:1px solid gray;width:35%; padding:30px;font-family: Trebuchet MS, sans-serif;">
			<form action = "BankProcess.php" method="POST"> 
				<tr>
					<th colspan = "2" style ="font-weight:bold; text-align:center; font-size:30px;">BANK</th>
				</tr>
				<tr>
					<td colspan = "2"><hr></td>
				</tr>
				<tr>
					<td>Merchant</td>
					<td>: Maybank</td>
				</tr>
				<tr>
					<td>Transaction Amount</td>
					<?php
					$connection = mysqli_connect("localhost","root","");
                    	$db = mysqli_select_db($connection,"movie ticket booking system new");
					$query = "SELECT * FROM make_payment where pay = 30 ";
					$query_run = mysqli_query($connection,$query);
					 while($row = mysqli_fetch_array($query_run))
                        {
                        	?>
					<td>: RM <?php echo $row["pay"];?></td>
					

				</tr>
				<tr>
					<td>Debit Card</td>
					<td>: <?php echo $row["cardnum"];?></td>
					<?php
					}
					?>
				</tr>
				<tr>
					<td colspan = "2"><hr></td>
				</tr>
				<tr>
					<td colspan = "2" style = "font-weight:bold; text-align:left; font-size:18px;color:#1F618D;">Authenticate Payment</td>
				</tr>
				<tr>
					<td colspan = "2">OTP sent to your mobile number ending with <b  style = "font-weight:bold;">4076</b></td>
				</tr>
				<tr>
					<td colspan = "2"><div style = "margin-top: 0.3cm;">Enter One Time Password (OTP)</div></td>
				</tr>
				<tr>
					<td><input type="text" name="number"  id= "number" style= "width: 100%;padding: 5px 20px;margin: 8px 0;border: 1px solid black;font-weight: bold;font-size: 17px;"></td>
					<td><a href=  "BankProcess.php"><button name="submit1" id = "submit"class="btn">Make Payment</button></a></td>
				</tr>
				<tr>
					<td></td>
					<td><a href="bank.php" style="color:black;">Resend OTP</a></td>
				</tr>
				<tr>
					<td><a href="MakePayment.php" style="color:black;">Go back</a> to merchant</td>
					<td></td>
				</tr>
		    </form>
		</table>
	</center></body>
</html>

