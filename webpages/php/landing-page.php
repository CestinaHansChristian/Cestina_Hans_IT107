<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/favicon/devicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/design.css">
    <script src="../script/JavaS.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login page</title>
</head>
<body class="container mx-auto col-10 col-md-8 col-lg-6 d-md-flex">
    <div class="m-3">
        <div class="border border-light rounded m-5">
            <div class="row p-3">
                <?php 
                    include("../html/header.html");
                ?>
                <form method=post onsubmit="loadData()" class="form-group" action="connection.php">
                    <label for="userfield-landing">USERNAME:</label>
                    <input type="text" class="form-control userfield-landing" placeholder="Username goes here..." id="userField">
                    <label for="passfield-landing">PASSWORD:</label>
                    <input type="password" class="form-control passfield-landing" placeholder="Password goes here..." id="passField"><br>
                    <button class="btn btn-dark" id="login-btn">Login</button>
                </form>
                <?php 
                    include("../html/footer.html");
                ?>
        </div>
        </div>
    </div>
</body>
</html>