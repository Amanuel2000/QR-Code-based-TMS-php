<?php include("path.php"); ?>
<?php include( ROOT_PATH . "/app/database/db.php"); ?>
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

  <title>Payment</title>
</head>

<body>
  
  <?php include( ROOT_PATH . "/app/includes/header.php"); ?>
  <?php include( ROOT_PATH . "/app/includes/messages.php"); ?>
  
  

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h3 class="recent-post-title">Choose your Payment Method</h3>

        <div class="post clearfix">
          <img src="image/CBE.JPG" alt="" class="post-image">
          <div class="post-preview">
            <h4><a href="single.hmtl">Commerical Bank of Ethiopia</a></h4>
            
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="<?php echo BASE_URL . '/settlePayment.php?tId='.$_GET['tId'].'&bId=1' ?>" class="btn read-more">Settle Payment</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src= "image/abyssinia.JPG" alt="" class="post-image">
          <div class="post-preview">
            <h4><a href="single.hmtl">Bank Of Abyssinia</a></h4>
            
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="<?php echo BASE_URL . '/settlePayment.php?tId='.$_GET['tId'].'&bId=2' ?>" class="btn read-more">Settle Payment</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="image/Dashin Bank.JPG" alt="" class="post-image">
          <div class="post-preview">
            <h4><a href="single.hmtl">Dashin Bank</a></h4>
            
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="<?php echo BASE_URL . '/settlePayment.php?tId='.$_GET['tId'].'&bId=3' ?>" class="btn read-more">Settle Payment</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src=" image/Awash.JPG" alt="" class="post-image">
          <div class="post-preview">
            <h4><a href="single.hmtl">Awash Bank</a></h4>
            
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="<?php echo BASE_URL . '/settlePayment.php?tId='.$_GET['tId'].'&bId=4' ?>" class="btn read-more">Settle Payment</a>
          </div>
        </div>
        

      </div>
      <!-- // Main Content -->

      <div class="sidebar">

        

      </div>

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