<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="headerFooter/headerFooter.css">
</head>
<body>
  <?php include 'headerFooter/header.php'?>  
    <main>
      <div style="margin-top: 50vh;text-align: center" class="welcome">
        <h1>WELCOME TO OUR PAGE</h1>
        <h5> you will be direct to the login page shortly.... </h5>
      </div>
      <script>
         setTimeout(function(){
            window.location.href = '../login/login.php';
         }, 1000);
      </script>
    </main>
    <?php include 'headerFooter/footer.php'?>  
</body>
</html>