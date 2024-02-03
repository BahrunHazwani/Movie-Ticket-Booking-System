<html>
<body>
   </body>
</html>
<?php
    
if(isset($_POST['submit1'])){
 ?>   
    <body><table align='center'><tr><td><STRONG>Transaction is being processed,</STRONG></td></tr><tr><td><font color='blue'>Please Wait <i class="fa fa-spinner fa-pulse fa-fw"></i>
<span class="sr-only"></font></td></tr><tr><td>(Do not 'RELOAD' this page or 'CLOSE' this page)</td></tr></table><h2></h2></span></font></td></tr></table></body>
<script>
    setTimeout(function(){ window.location="displayBookingHistory.php"; }, 3000);
</script><?php
 
}
 
?>