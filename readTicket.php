<?php

include("path.php");
include( ROOT_PATH . "/app/database/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<?php
if (isset($_SESSION['id']) && $_SESSION['userType'] == 2) {
?>
<div class="container">
<br><br>
  <h2>Generated Ticket  </h2>
  <h3><?php echo "Your ticket number is: ".'QRC2022000000'.$_GET['ticketNum']?> </h3>
 
  <br>
   
  <?php
 
    $sql = $conn->query('SELECT * FROM tbticket WHERE isActive=1 and ticketNumber = '.$_GET['ticketNum']);

    if ($result = $sql->fetch_array()) {
        echo " Welcome! Your ticket is valid";
        $sql = $conn->query('UPDATE tbticket SET isActive=0 WHERE isActive=1 and ticketNumber = '.$_GET['ticketNum']);
        
    }
    else {
        echo "Sorry your ticket is not Valid. Good bye!";
    }
    ?>
  <!-- <div class="text-center">
    <button onClick ="window.print()" class ="btn btn-primary">Print</button>
    <a href ="gbrqrcode/Addis Ababa.png" download class ="btn btn-primary" >
      Download</a> -->
      
</div>
<?php
}
else {
  header('location: ' . BASE_URL . '/login.php');
  exit(0);
}
?>
</div>

</body>
<!-- <style>
    footer {
    
    text-align: center;   
    background: rgb(139, 138, 138);
    color: white;  
    min-width: 100%;
  
}
    </style>
  <footer>
        <p>Copyright &copy
            <script> document.write(new Date().getFullYear())</script> ABC Technology college</p>
        <p><a href="Disclaimer.html"><b>Disclaimer</b></a> </p>
        <p><a href="Contact_Us.html"><b>Contact us</b></a></p>

    </footer> -->
</html>
