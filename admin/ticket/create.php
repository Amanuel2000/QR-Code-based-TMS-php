<?php
include("../../path.php"); 

  include(ROOT_PATH . "/app/controllers/tickets.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../assets/css/admin.css">

        <title>Admin Section - Add Tickets</title>
    </head>

    <body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Ticket</a>
                    <a href="index.php" class="btn btn-big">Manage Ticket</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Add Ticket</h2>

                    <form action="index.php" method="post">
                        <div>
                            <label>Ticket Name </label>
                            <input type="text" name="ticketName" value = "<?php echo $ticketName; ?>"class="text-input">
                        </div>
                        

                        <div>
                            <label>Ticket Type Name</label>
                            
                            <input type="text" name="ticketTypeName" value = "<?php echo $ticketTypeName; ?>"class="text-input">
                        
                        </div>
                        <div>
                            <label>Seat Available </label>
                            <input type="text" name="seatAvailable" value = "<?php echo $seatAvailable; ?>"class="text-input">
                        
                        </div>
                       
                        <div>
                            <label>Ticket Quantity </label>
                            <input type="text" name="ticketTypePrice" value = "<?php echo $ticketTypePrice; ?>"class="text-input">
                        </div>
                        
                        
                        <div>
                            <button type="submit" name = "add-ticket" class="btn btn-big">Add Ticket</button>
                        </div>
                    </form>

                </div>

            </div>
            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../assets/js/scripts.js"></script>

    </body>

</html>