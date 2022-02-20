<?php include("path.php"); 
//  include( ROOT_PATH . "/app/database/db.php"); 
  include( ROOT_PATH . "/app/controllers/users.php"); 


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/admin.css">  
  <link rel="stylesheet" href=" test.css">

  <title>Generate Ticket</title>
</head>

<body>
  <!-- Facebook Page Plugin SDK -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=285071545181837&autoLogAppEvents=1">
  </script>

<?php include( ROOT_PATH . "/app/includes/header.php"); ?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content Wrapper -->
      <div class="main-content-wrapper">
        <div class="main-content single">
          <h2 class="post-title">Ticket Generation</h2>
          <h4 class="post-title">Your Generated ticket is in the form of QR Code</h4>
          <h4 class="post-title">You can print or download the image</h4>
          <h4 class="post-title">You should keep it private</h4>
          
       
            

          <div class="post-content">
          <h3>  "Your Ticket Details are:   </h3>   


<table class="table"> 
   <thead>
    <tr>
      <th>Ticket Name</th>
      <th>Ticket Number</th>
      <th>QR Code</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
      

  <?php

   
        $userId = $_SESSION['id'];
    echo "<script>console.log('test: ".$userId."');</script>";
 
      $sql = $conn->query("SELECT * FROM tbticket WHERE userId = $userId and isActive = 1");
   
      while ($result = $sql->fetch_array()) { ?>
    <tr>
      <td><?= $result['ticketName'] ?></td>
      <td><?= $result['ticketNumber'] ?></td>
      <td><img src ="gbrqrcode/<?= $result[
                  'qrCode'
              ] ?>" alt = "" width="100">  </td>
              <td><button onClick ="window.print()" class ="btn btn-primary">Print</button> </td>
              <td><a href ="gbrqrcode/<?= $result['ticketNumber'] ?>.png" download class ="btn btn-primary" >
              Download</a></td>
    </tr>
    <?php
      }
      ?>
    
  </tbody>
</table>
          
          <!-- <div class="text-center">
    <button onClick ="window.print()" class ="btn btn-primary">Print</button>
    <a href ="gbrqrcode/Addis Ababa.png" download class ="btn btn-primary" >
      Download</a>
      
</div>  -->
          
          </div>

        </div>
      </div>
      <!-- // Main Content -->

      <!-- Sidebar -->
      <div class="sidebar single">

        


        
      <!-- // Sidebar -->

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <!-- footer -->
   <?php include( ROOT_PATH . "/app/includes/footer.php"); ?> 
  <!-- // footer -->


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>

</body>

</html>