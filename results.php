<?php
include "path.php";
include( ROOT_PATH . "/app/database/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h3>  "Your Ticket Details are:   </h3>   


  <table class="table"> 
     <thead>
      <tr>
        <th>ID DATA</th>
        <th>NAME</th>
        <th>QR Code</th>
      </tr>
    </thead>
    <tbody>
        
  
    <?php
        $sql = $conn->query("SELECT * FROM tbqrcode ORDER BY ID DESC LIMIT 1 ");
        

        while ($result = $sql->fetch_array()) { ?>
      <tr>
        <td><?= $result['idqrcode'] ?></td>
        <td><?= $result['iddata'] ?></td>
        <td><img src ="gbrqrcode/<?= $result[
                    'gbrqrcode'
                ] ?>" alt = "" width="100"> </td>
      </tr>
      <?php
        }
        ?>
      
    </tbody>
  </table>

  <!-- echo "<center> QR Code:<img src ="gbrqrcode/<?= $result[
                    'gbrqrcode'
                ] ?>" alt = "" width="100"><center>"; -->
</div>

</body>
</html>
