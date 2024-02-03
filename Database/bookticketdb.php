<?php
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "movie ticket booking system new" ; 

$conn = mysqli_connect($server, $username, $password, $dbname);
    
if(isset($_POST['submit'])){
    
    
    if(!empty($_POST['username1']) && !empty($_POST['movie']) && !empty($_POST['classification']) && !empty($_POST['time']) && !empty($_POST['date1']) && !empty($_POST['numTickets']) && !empty($_POST['tot_amount'])){
        
            $username1 = $_POST['username1'];
            $movie = $_POST['movie'];
            $classification = $_POST['classification'];
            $time = $_POST['time'];
            $date1 = $_POST['date1'];
            $numTickets = $_POST['numTickets'];
            $tot_amount = $_POST['tot_amount'];

        $query = "insert into book_ticket(username1,movie,classification,time,date1,numTickets, tot_amount) values('$username1', '$movie', '$classification', '$time', '$date1', '$numTickets', '$tot_amount')";
            
            
        
        $run = mysqli_query($conn,$query) or die(mysqli_error());
        
        if($run){
                 echo header("Location: ../MakePayment.php");

                
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