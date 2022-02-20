<?php

include 'path.php'; 
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
  <h2>INPUT DATA</h2>
  <form action="manage.php" method="POST">
    <div class="form-group">
      <label for="email">Ticket ID </label>
      <input type="text" class="form-control" name="iddata">
    </div>  
    <div class="form-group">
      <label for="email">Ticket Number </label>
      <input type="text" class="form-control" name="name">
    </div>    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>
