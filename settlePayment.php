<?php include("path.php"); ?>
<?php include( ROOT_PATH . "/app/controllers/settlePayment.php"); ?>
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
  <link rel="stylesheet" href="test.css">

  <title>Settle Payment</title>
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
          <h3 class="post-title">Settle Your Payments</h3>

          
          <!-- <div class="auth-content"> -->

        <form action="manage.php?tId=<?php echo $_GET['tId']; ?>" method="post">
        <div>
        <label>Payment Order Code</label>
        <input type="text" name="paymentCode" readonly value="<?php echo $paymentCode; ?> " class="text-input" >
      </div>   
       <div>
        <label>Bank Name</label>
        <input type="text" readonly name="bankname" readonly value="<?php echo $bankName; ?>" class="text-input" >
      </div>
      <div>
        <label>Payment Type</label>
        <select name="payment" value=" " class="text-input">
            <option value="Male">Telebirr</option>
            <option value="Female">CBE Birr</option>
            <option value="Female">Hello Cash</option>
            <option value="Female">Amole</option>
        </select>
    </div>          
           
      <div>
        <label>Ticket Price</label>
        <input type="text" name="ticketprice" readonly value="<?php echo $ticketprice; ?> " class="text-input" >
      </div>

      <div>
        <label>Ticket Name</label>
        <input type="text" name="ticketName" readonly value=" <?php echo $ticketName; ?>" class="text-input" >
      </div>
      <div>
        <label>Ticket Number</label>
        <input type="text" name="ticketNumber" readonly value="<?php echo 'QRC2022000000'.$_GET['tId']; ?>" class="text-input" >
      </div>
     
      <div>
          <br>
        <button type="submit" class="btn btn-big">Next</button>
      </div>
     
    </form>

  </div>

          <div class="post-content">
          
          <div class="section popular">
          <!-- <h4 class="section-title">Fixtures</h4>

          <div class="post clearfix">
          
            <a href="" class="title">
              <h6>Addis Ababa City</h6>
            </a>
            <img src="image/Fasil.JPG" class="girl" alt="girl" /> -->
          </div>
          
          

        </div>

        </div>
      </div>
      <!-- // Main Content -->

      <!-- Sidebar -->
      <div class="sidebar single">
<!-- 
        <div class="fb-page" data-href="https://web.facebook.com/codingpoets/" data-small-header="false"
          data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://web.facebook.com/codingpoets/" class="fb-xfbml-parse-ignore"><a
              href="https://web.facebook.com/codingpoets/">Coding Poets</a></blockquote>
        </div> -->


                  

        </div>

        
      </div>
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