<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/club.php");

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

        <title>Admin Section - Edit Topic</title>
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
                    <a href="create.php" class="btn btn-big">Add Clubs</a>
                    <a href="index.php" class="btn btn-big">Manage Clubs</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Edit Topic</h2>
                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>   

                    <form action="index.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" >
                        <div>
                            <label>Name</label>
                            <input type="text" name="clubName" value="<?php echo $clubName; ?>" class="text-input">
                        </div>
                        <div>
                            <label> Club Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="description" id="body" ><?php echo  $description; ?> </textarea>
                        </div>

                        <div>
                            <button type="submit"  name="update-club" class="btn btn-big">Update Club</button>
                        </div>
                    </form>

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