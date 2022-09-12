<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Opt-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script src="customer.js"></script>
    <title>Account Type</title>
</head>
<body>
    <?php include '../headerFooter/header.php'?>
    <div class = "heading">
        <h1>Register Options</h1>
    </div>

    <main>
        <div class="container">
            <a href="./register.php" class="button">Customer</a>    
            <a href="./Vendor.php" class="button">Vendor</a>    
            <a href="./Shipper.php" class="button">Shipper</a>
        </div>
    </main>
    <?php include '../headerFooter/footer.php'?>
</body>
</html>