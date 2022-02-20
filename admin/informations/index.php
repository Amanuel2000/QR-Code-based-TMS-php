<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/information.php");

adminOnly();
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

        <title>Admin Section - Manage Information</title>
    </head>

    <body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <?php include( ROOT_PATH . "/app/includes/messages.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Information</a>
                    <a href="index.php" class="btn btn-big">Manage Information</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage Information</h2>
                    

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                           
                            <th colspan="4">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($informations as $key => $information): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $information['title'] ?></td>  
                                <td><?php echo $information['image'] ?></td>  
                                <td><?php echo $information['description'] ?></td>  
                                
                                 
                                <td><a href="edit.php?id=<?php echo $information['id']; ?>" class="edit">edit</a></td>
                                <td><a href="edit.php?del_id=<?php echo $information['id']; ?>" class="delete">delete</a></td>
                            </tr>
                            <?php endforeach; ?>
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