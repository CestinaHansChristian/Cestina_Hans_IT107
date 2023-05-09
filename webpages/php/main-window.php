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
<body class="container mx-auto col-10 col-md-8 col-lg-6 d-md-flex">
    <div class="m-3">
        <div class="border border-light rounded m-5">
            <div class="row p-3">
                <?php 
                    include("../html/header.html");
                ?>
                <div class="card-body">
                <nav class="navbar justify-content-end p-2">
                    <button class="navbar-toggler btn btn-outline-danger" type="button" id="logout-btn" onclick="Signout_btn()">Sign-out</button>
                </nav>
                    <h1>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias suscipit, fuga voluptatibus cupiditate neque accusantium quam quos maxime mollitia libero odio eaque consequatur, iste cum ipsum possimus ut in eveniet.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio ducimus tempora nisi deserunt deleniti velit quisquam magnam distinctio autem odit. Nulla cum ad iste quos neque asperiores, similique dolorem voluptatem.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, reprehenderit est. Eum dolorum soluta facere architecto nisi. Blanditiis enim, natus rem at iusto nulla cum exercitationem illo dolorum? Temporibus, sunt.
                    </h1>
                </div>
                <?php 
                    include("../html/footer.html");
                ?>
            </div>
        </div>
    </div>
</body>
</html>