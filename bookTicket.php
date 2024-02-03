<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPI Cinemas - Book Ticket</title>
    <link rel="stylesheet" type="text/css" href="CSS/bookTicket.css">
</head>

<body>
 <center>
    <table>
<h1>Book Ticket</h1>
            <form action = "Database/bookTicketdb.php" method="POST" >
                <tr><td><h2 >Book Your Ticket Here</h2></td></tr>
                <tr>

                <td> <label  >Enter Your Username</label></td></tr>
                <tr> <td><input type="text" name="username1"  id="username1"style= "width: 93%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #FFFAF0;font-weight: bold;font-size: 17px;" required></td></tr>
              
                <tr><td><label>Choose Movie Classification</label></td></tr>
                <tr><td><select  name="classification" id ="classification" style= "width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #FFFAF0;font-weight: bold;font-size: 17px;" required>
                    <option value=""></option>
                    <option value="u" > U </option>
                    <option value="p13" > P13 </option>
                    <option value="18sg" > 18SG </option>
                    <option value="18pa" > 18PA </option>
                    <option value="18pl" > 18PL </option>
                </select></td></tr>

                <tr><td><label>Choose Movie</label></td></tr>
                <tr><td><select  name="movie" id ="movie" style= "width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #FFFAF0;font-weight: bold;font-size: 17px;" required>
                    <option value=""></option>
                    <option value="the conjuring: the devil made me do" >The Conjuring: The Devil Made Me Do It</option>
                    <option value="sarpatta parambarai" >Sarpatta Parambarai</option>
                    <option value="wish dragon" >Wish Dragon</option>
                    <option value="lin shirong the murtial god of huang feihong" >Lin Shirong The Murtial God Of Huang Feihong</option>
                    <option value="petaka: syurga ini milikmu" >Petaka: Syurga Ini Milikmu</option>
                </select></td></tr>

                <tr><td><label >Choose Movie Time</label></td></tr>
                <tr><td><select  name="time" id = "time" style= "width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #FFFAF0;font-weight: bold;font-size: 17px;" required>
                    <option value=""></option>
                    <option value="12:00 - 16:00" >12:00 - 16:00</option>
                    <option value="16:00 - 20:00" >16:00 - 20:00</option>
                    <option value="20:00 - 00:00" >20:00 - 00:00</option>
                </select></td></tr>

                <tr><td> <label >Choose Movie Date</label></td></tr>
                <tr><td><input type="date" name="date1" id = "date1" style= "width: 93%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #FFFAF0;font-weight: bold;font-size: 17px;" required></td></tr>
      
                                <tr><td><label >Choose Number of Tickets</label></td></tr>
                <tr><td><input style= "width: 93%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #FFFAF0;font-weight: bold;font-size: 17px;" type="number" min="1" name="numTickets" id = "numTickets" onkeyup="mult(this.value);"></td></tr>

                <tr><td><label >Total Amount (RM)</label></td></tr>
                <tr><td><input type="text" name="tot_amount" id="tot_amount" style= "width: 93%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #FFFAF0;font-weight: bold;font-size: 17px;margin-bottom: 0.5cm;" readonly></td></tr>
                <script>
                  function mult(value){

                    var x;
                    x= 15 * value ;
                    document.getElementById('tot_amount').value = x ;

                    //var numberoftic = mysqli_real_escape_string($conn, $_POST['numTickets']);

                    //var tot_price = numberoftic * 15;
                    // display the result
                    //var divobj = document.getElementId('tot_amount'); 
                    //var divobj.number = tot_price;
                  }
                </script>

                <br><br>

              
                <tr><td><a><button type="submit" name="submit" value="submit" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:100%">BOOK</button></a></td></tr>
            </form>
        </table>
        </center>
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
<center><a href="home.php"><button name="submit" class="btn" style="background-color: gold;border: none;color: black;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 18px;font-family: Trebuchet MS, sans-serif; margin: 4px 2px;cursor: pointer; font-weight: bold; width:30%">Back</button></a></center>
</body>
</html>

