<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/fixture.php");

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
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="index.php" class="btn btn-big">Manage Posts</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Edit Posts</h2>
                    <?php include(ROOT_PATH. "/app/helpers/formErrors.php");?>

                    <form action="edit.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>" class="text-input">
                   

                    <div>
                            <label>Fixture Type</label>
                            <input type="text" name="fixtureType" value="<?php echo $fixtureType ?>" class="text-input">
                        </div>
                        <div>
                            <label>Fixture Location</label>
                           
                            <input type="text" name="fixtureLocation" value="<?php echo $fixtureLocation ?>" class="text-input">
                        </div>

                        <div>
                            <label>Fixture Date</label>
                            <input type="date" id="fixturedate"  name="fixtureDate" value=" <?php echo $fixtureDate ?>">
                        </div>
                        <div>
                            <label>Fixture Time</label>
                            <input type="time" id="fixturetime"  name="fixtureTime" value=" <?php echo $fixtureTime ?>">
                        </div>

                        <!-- <input type="time" id="appt" name="appt" min="09:00" max="18:00" required> -->

                                            
                        <div>
                            <label>Club Name</label>
                                                                                  
                            <input type="text" name="clubName" value="<?php echo $clubName ?>" class="text-input">
                        </div>
                            
                        <div>
                            <label>Club Image</label>
                            <input type="file" name="clubImage" value="<?php echo $clubImage ?>" class="text-input">
                        </div>
                        <div>
                            <label>Opponenet Club Name</label>                                                   
                                                      
                            <input type="text" name="opponenetClubName" value="<?php echo $opponenetClubName ?>" class="text-input">
                        </div>
                        <div>
                            <label>Opponent Club Image</label>
                            <input type="file" name="opponentClubImage" value="<?php echo $opponentClubImage ?>"class="text-input">
                        </div>
                        
                        <div>
                        <?php if (empty($published && $published == 0)): ?>
                        <label>                            
                                <input type="checkbox" name="published">
                                Post
                            </label>
                        <?php else :?>
                            <label>                            
                                <input type="checkbox" name="published" checked>
                               Post
                            </label>
                            <?php endif?>
                            </div>
                        <div>
                            <button type="submit"name="update-fixtures" class="btn btn-big">Update Post</button>
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