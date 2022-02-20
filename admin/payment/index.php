<?php include("../../path.php");
 include(ROOT_PATH . "/app/controllers/settlePayment.php"); 


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

        <title>Admin Section - Manage Payments</title>
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
                    <a href="create.php" class="btn btn-big">Add Payments</a>
                    <a href="index.php" class="btn btn-big">Manage Payments</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage Clubs</h2>
                    

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Payment Code</th>
                            <th>Bank Name</th>
                            <th>Account Number</th>
                            <th>Payment Type</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($payments as $key => $payment): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $payment['paymentCode'] ?></td>  
                                <td><?php echo $payment['bankName'] ?></td>  
                                <td><?php echo $payment['accountNo'] ?></td>  
                                <td><?php echo $payment['paymentType'] ?></td>  

                                 
                                <td><a href="edit.php?id=<?php echo $payment['id']; ?>" class="edit">edit</a></td>
                                <td><a href="edit.php?del_id=<?php echo $payment['id']; ?>" class="delete">delete</a></td>
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