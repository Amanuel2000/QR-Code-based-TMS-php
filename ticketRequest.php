<?php include("path.php");  
 
include(ROOT_PATH . "/app/controllers/tickets.php");
// include(ROOT_PATH . "/app/database/tickets.php");

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
  <link rel="stylesheet" href="test.css">

  <title>Ticket Request</title>
</head>

<body>
  
  

<?php include( ROOT_PATH . "/app/includes/header.php"); ?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content Wrapper -->
      <div class="main-content-wrapper">
        <div class="main-content single">
          <h3 class="post-title">Reserve your Ticket here</h3>
          <div class="post-content">
            
            <div class="section topics">       
        
        </div>
            
            
          </div>
          
          <!-- <div class="auth-content"> -->

        <form action="ticketRequest.php?fId=<?php echo $_GET['fId']; ?>" method="post">
        <img src="image/Ticket.JPG" alt="girl" width="200" />

       
        <div>
           <br>
        <label>Ticket Name</label>
        <input type="text" name="ticketName" readonly value="<?php echo $ticketName; ?>"  class="text-input"  >
      </div>
      

      
      <div>
          <label>Ticket Type Name</label>
          <select name="tt_id" class="text-input">
              <option value=""></option>
              <?php foreach ($tickettypes as $key => $tickettype): ?>
                  <?php if (!empty($id) && $id == $tickettype['id'] ): ?>
                      <option selected value="<?php echo $tickettype['id'] ?>"><?php echo $tickettype['ticketTypeName'] ?></option>
                  <?php else: ?>
                      <option value="<?php echo $tickettype['id'] ?>"><?php echo $tickettype['ticketTypeName'] ?></option>
                  <?php endif; ?>

              <?php endforeach; ?>

          </select>
      </div>
    <!-- <div>
       <label>Number of Seat Avaialble</label>
       <input type="text" name="seatAvailable" value="<?php echo $seatAvailable; ?> " class="text-input"   >
       </div> -->


      <!-- <div>
      <label>Number of Seat Avaialble</label>
          <select name="tt_id" class="text-input" ">
              <option value=""></option>
              <?php foreach ($tickettypes as $key => $tickettype): ?>
                  <?php if (!empty($tt_id) && $tt_id == $tickettype['id'] ): ?>
                      <option selected value="<?php echo $tickettype['id'] ?>"><?php echo $tickettype['seatAvailable'] ?></option>
                  <?php else: ?>
                      <option value="<?php echo $tickettype['id'] ?>"><?php echo $tickettype['seatAvailable'] ?></option>
                  <?php endif; ?>

              <?php endforeach; ?>

          </select>
      </div> -->
       <!-- <div>
       <label> Seat Number</label>
       <input type="text" name="seatNo" value="<?php echo $seatNo; ?> " class="text-input"   >
       </div> -->
    <div>
        <label>Ticket Quantity</label>
        <select name="ticketQuantity" class="text-input">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>            
           
        </select>
    </div>
           

      <!-- <div>
      <label>Ticket Type Price</label>
          <select name="tt_id" class="text-input" >
              <option value=""></option>
              <?php foreach ($tickettypes as $key => $tickettype): ?>
                  <?php if (!empty($tt_id) && $tt_id == $tickettype['id'] ): ?>
                      <option selected value="<?php echo $tickettype['id'] ?>"><?php echo $tickettype['ticketTypePrice'] ?></option>
                  <?php else: ?>
                      <option value="<?php echo $tickettype['id'] ?>"><?php echo $tickettype['ticketTypePrice'] ?></option>
                  <?php endif; ?>

              <?php endforeach; ?>

          </select>
      </div> -->

      <!--<div>
      <label>Ticket Type Price</label>
      <input type="text" name="ticketTypePrice"  value="<?php echo $ticketTypePrice; ?>"  class="text-input"  >
      </div>-->





      <div>
          <br>
        <button type="submit" name="next-btn" class="btn read-more">Next</button>
        <!-- <a href="<?php echo BASE_URL . '/payment.php?tt_id='.$_GET['tt_id'] ?>" class="btn read-more">Payment</a> -->
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