<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/fixture.php");

$fixtures = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
  $fixtures = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for fixtures under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $fixtures = searchPosts($_POST['search-term']);
} else {
  $fixtures = getPublishedPosts();
}

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

  <title>Fixture</title>
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
    <div class="main-content">
      <h1 class="recent-post-title">Fixtures</h1>
      <?php foreach ($fixtures as $fixture): ?>  
        <div class="post clearfix">  
           
                      <br>   
                      <h4><a href="single.php?id=<?php echo $fixture['id']; ?>"><?php echo $fixture['fixtureType']; ?></a></h4>           
                     <br>
                      <h6><?php echo $fixture['fixtureLocation']; ?></h6> 
                      <br>                 
                      <i class="far fa-calendar"> <?php echo date('j F, Y', strtotime($fixture['fixtureDate'])); ?></i>
                      <i class=" far fa-bell"> <?php echo date('H:i', strtotime($fixture['fixtureTime'])); ?></i>
                      &nbsp; 
                    <br><br>  <br>
                    <div class="circular-image">   
                            <h6><?php echo $fixture['clubName']; ?></h6>  
                                  
                            <img src="<?php echo BASE_URL . '/assets/images/' . $fixture['clubImage']; ?>"  class="girl" alt="girl" />
                            
                          <p>V</p>
                           <img src="<?php echo BASE_URL . '/assets/images/' . $fixture['opponentClubImage']; ?>"  class="girl" alt="girl" />            
                            <h6><?php echo $fixture['opponenetClubName']; ?></h6>
                              
                          <a href="ticketRequest.php?fId=<?php echo $fixture['id']?>" class="btn read-more">Request Ticket</a>        
                          
                        </div>
              
          </div>
          <?php endforeach; ?>
        
<!-- 
        <div class="post clearfix">    
              <br>   
            <h4>Premier League</h4>            
              <br>                    
            <i class="far fa-calendar"> Mar 8, 2019 </i>
            <i class=" far fa-bell"> 04:30 PM </i>   
        <hr>
        <div class="circular-image">   
                <h6>Bahirdar City</h6>  
                      
              <img src="image/bd.jpg" class="girl" alt="girl" />
              <p>V</p>
              <img src="image/Fasil.JPG" class="girl" alt="girl" />            
              <h6>Fasil City</h6>  
                
              <a href="ticketRequest.php" class="btn read-more">Request Ticket</a>        
              
            </div>
        </div>

        <div class="post clearfix">    
              <br>   
            <h4>Premier League</h4>            
              <br>                    
            <i class="far fa-calendar"> Mar 8, 2019 </i>
            <i class=" far fa-bell"> 04:30 PM </i>   
        <hr>
        <div class="circular-image">   
                <h6>Bahirdar City</h6>  
                      
              <img src="image/bd.jpg" class="girl" alt="girl" />
              <p>V</p>
              <img src="image/Fasil.JPG" class="girl" alt="girl" />            
              <h6>Fasil City</h6>  
                
              <a href="ticketRequest.php" class="btn read-more">Request Ticket</a>        
              
            </div>
        </div>

        <div class="post clearfix">    
              <br>   
            <h4>Premier League</h4>            
              <br>                    
            <i class="far fa-calendar"> Mar 8, 2019 </i>
            <i class=" far fa-bell"> 04:30 PM </i>   
        <hr>
        <div class="circular-image">   
                <h6>Bahirdar City</h6>  
                      
              <img src="image/bd.jpg" class="girl" alt="girl" />
              <p>V</p>
              <img src="image/Fasil.JPG" class="girl" alt="girl" />            
              <h6>Fasil City</h6>  
                
                <a href="ticketRequest.php" class="btn read-more">Request Ticket</a>         
              
            </div>
        </div> -->

      <!-- Main Content Wrapper -->
     

         


         
           
         
      <!-- // Main Content -->


      <!-- Sidebar -->
      
     
      <!-- // Sidebar -->
            

    </div>
        <div class="sidebar">

            <div class="section search">
              <h2 class="section-title">Search</h2>
              <form action="fixture.php" method="post">
                <input type="text" name="search-term" class="text-input" placeholder="Search...">
              </form>
            </div>


              <div class="section topics">
                <h2 class="section-title">Clubs</h2>
                <ul>
                  <?php foreach ($clubs as $key => $club): ?>
                    <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $club['id'] . '&name=' . $club['name'] ?>"><?php echo $club['name']; ?></a></li>     <?php endforeach; ?>
                </ul>
              </div>

        </div>

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