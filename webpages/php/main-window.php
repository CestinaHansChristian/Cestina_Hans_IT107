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
    <title>Developers Information</title>
</head>
<body class="container mx-auto col-xxl-12 col-sm-8 col-md-8 ">
    <div class="border border-light rounded m-5">
            <?php 
                include("../html/header.html");
            ?>
            <nav class="navbar justify-content-end p-2">
                    <button class="navbar-toggler btn btn-outline-danger" type="button" id="logout-btn" onclick="Signout_btn()">Sign-out</button>
            </nav>
            <div class="row first-row">
                    <div class="col text-center personal-col">
                        Personal details
                    </div>
                    <div class="col text-center education-col">
                        Educational background
                    </div>
                    <div class="col text-center hobbies-col">
                        Hobbies
                    </div>
                </div>
            <?php 
                include("../html/footer.html");
            ?>
    </div>
</body>
</html>