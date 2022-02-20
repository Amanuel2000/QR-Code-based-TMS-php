<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");?>

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

        <title>Admin Section - Edit Post</title>
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
                    <a href="create.php" class="btn btn-big">Add Fixtures</a>
                    <a href="index.php" class="btn btn-big">Manage Fixtures</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Edit Fixtures</h2>

                    <form action="create.html" method="post">
                    <div>
                            <label>Match Name</label>
                            <input type="text" name="matchName" class="text-input">
                        </div>
                        <div>
                            <label>Match Type</label>
                            <input type="text" name="matchType" class="text-input">
                        </div>
                        <div>
                            <label>Match Location</label>
                            <input type="text" name="location" class="text-input">
                        </div>
                        <div>
                            <label>Match Date</label>
                            <input type="text" name="matchDate" class="text-input">
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        <div>
                            <label>Topic</label>
                            <select name="topic" class="text-input">
                                <option value="Poetry">Poetry</option>
                                <option value="Life Lessons">Life Lessons</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-big">Update Fixtures</button>
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