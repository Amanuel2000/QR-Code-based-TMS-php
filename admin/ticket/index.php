<?php include("../../path.php"); 
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

        <title>Admin Section - Manage Tickets</title>
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

                    <h2 class="page-title">Manage Tickets</h2>
                    <?php include( ROOT_PATH . "/app/includes/messages.php"); ?>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Ticket Name</th>  
                                                
                            <th>Ticket Type Name </th>
                            <th>Seat Available </th> 
                           
                            
                            <th>Ticket Price </th>   

                                                        
                            <th colspan="10">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($tickets as $key => $ticket): ?>

                            <tr>
                                <td><?php echo $key + 1; ?> </td>
                                <td><?php echo $ticket['ticketName']; ?></td>   
                                <td><?php echo $ticket['ticketTypeName']; ?></td>  
                                <td><?php echo $ticket['seatAvailable']; ?></td>    
                                
                                <td><?php echo $ticket['ticketTypePrice']; ?></td>     
                                <td><?php if (!empty($tt_id) && $tt_id == $tickettype['id'] ): ?> <?php echo $ticket['ticketTypeName']; ?></td>   <?php endif; ?>     
                                <td><a href="edit.php?id=<?php echo $ticket['id']; ?>" class="edit">edit</a></td>
                                <td><a href="index.php?del_id=<?php echo $ticket['id']; ?>" class="delete">delete</a></td>
                                <td><a href="#" class="publish">Post</a></td>
                            </tr>
                            <?php endforeach;?>

                           
                            
                        </tbody>
                    </table>

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