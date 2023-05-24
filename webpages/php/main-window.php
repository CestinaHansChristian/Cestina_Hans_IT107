<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/favicon/devicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spectral&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/design.css">
    <script src="../script/JavaS.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Developers Information</title>
</head>
<body class="container mx-auto col-xxl-12 col-sm-8 col-md-8 ">
    <div class="border border-light rounded m-5 pb-5">
    <a id="goToTop"></a>
            <div class="text-center pt-4">
                <?php 
                include("../html/header.html");
                ?>    
            </div>
            <nav class="navbar p-2 m-3 navbar-light bg-light " id="navbar-main">
                <p></p>
                <ul class="nav nav-pills">
                    <li>
                        <a class="nav-link" href="#list-personal-info">PERSONAL INFORMATION</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#list-education">EDUCATION</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#list-hobbies">HOBBIES</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#list-Skills">SKILLS</a>
                    </li>
                    <li>
                        <div class="btn-logout">
                            <button class="mt-1 navbar-toggler btn btn-outline-danger logout-btn" type="button" onclick="Signout_btn()">Sign-out</button>
                        </div>
                    </li>
                </ul>
            </nav>
            
            <div data-bs-spy="scroll" data-bs-target="#navbar-main" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                <div id="list-personal-info">
                    <div class="personal-info-top">
                        <ul>
                            <h1>
                                Personal Information
                            </h1>
                            <ul>
                                <strong>Name:</strong> Hans Christian C. Cestina
                            </ul>
                            <ul>
                                <strong>Age:</strong> 21
                            </ul>
                            <ul>
                                <strong>Address:</strong> Tanawan, Malinao, Albay
                            </ul>
                            <ul>
                                <strong>Blood type:</strong> AB+
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="list-education-info">
                    <ul id="list-education">
                        <h1>
                            Educational Background
                        </h1>
                        <ul>
                            <strong>Nursery:</strong> Tabaco Creative Learning Center
                        </ul>
                        <ul>
                            <strong>Kinder:</strong> Tabaco Creative Learning Center
                        </ul>
                        <ul>
                            <strong>Elemetary:</strong> Malinao Central Elementary School (MCES) 
                        </ul>
                        <ul>
                            <strong>High School:</strong> Tabaco National High School (TNHS)
                        </ul>
                        <ul>
                            <strong>Senior High School:</strong> Tabaco National High School (TNHS)
                        </ul>
                        <ul>
                            <strong>College:</strong> Bicol University (Current)
                        </ul>
                    </ul>
                </div>
                <div class="list-hobbies-info">
                    <ul id="list-hobbies">
                        <h1>
                            Hobbies
                        </h1>
                        <ul>
                            <br>
                            <strong>My love for Technology:</strong> Me as 11 years old kid, technology was like a magical realm that I couldn't resist exploring. The sleek devices and futuristic gadgets fascinated me beyond measure. 
                            I would spend hours mesmerized by the screens, imagining all the incredible things they could do. The endless possibilities and the way technology made everything easier and more exciting filled me in wonder.
                            It felt like being a superhero, with the power to create, connect, and discover in ways I never thought possible.
                            I'm facinated on new trends in technologies where it gives me motivation 'we are so far for what we call future.'
                        </ul>
                        <ul>
                            <br>
                            <strong>Music:</strong> On my high school, senior year music piqued my interest and i started to learn instruments such as trumpet, guitar, piano but only instrument got my attention.
                            Besides from playing instruments i also love listening to music, both gives me serenity when doing school works also relieve stress that i'm currently experiencing.
                        </ul>
                        <ul>
                            <br>
                            <strong>Sports:</strong> If i got free time to spare, i swim or bike cause it helps not only to unwind but to relieve stress and anxiety.
                        </ul>
                    </ul>
                </div>
                <div id="list-Skills">
                    <ul>
                        <h1>
                            Skills
                        </h1>
                        <ul>
                            <li class="list-unstyled">
                            <strong>HTML:</strong>
                            </li>
                            <div class="skills">
                                <div class="html-mastery">70%</div>
                            </div>
                        </ul>
                        <br>
                        <ul>
                            <li class="list-unstyled">
                            <strong>CSS:</strong>
                            </li>
                            <div class="skills">
                                <div class="CSS-mastery">65%</div>
                            </div>
                        </ul>
                        <br>
                        <ul>
                        <li class="list-unstyled">
                            <strong>C:</strong>
                            </li>
                            <div class="skills">
                                <div class="C-mastery">70%</div>
                            </div>
                        </ul>
                        <br>
                        <ul>
                            <li class="list-unstyled">
                            <strong>JAVA:</strong>
                            </li>
                            <div class="skills">
                                <div class="JAVA-mastery">92%</div>
                            </div>
                        </ul>
                        <br>
                        <ul>
                            <li class="list-unstyled">
                            <strong>SQL:</strong>
                            </li>
                            <div class="skills">
                                <div class="SQL-mastery">95%</div>
                            </div>
                        </ul>
                        <br>
                        <ul>
                            <li class="list-unstyled">
                            <Strong> PHP:</Strong>
                            </li>
                            <div class="skills">
                                <div class="PHP-mastery">30%</div>
                            </div>
                        </ul>
                        <br>
                        <ul>
                            <li class="list-unstyled">
                            <strong>VB.NET:</strong>
                            </li>
                            <div class="skills">
                                <div class="VBNET-mastery">70%</div>
                            </div>
                        </ul>
                        <br>
                        <ul>
                            <li class="list-unstyled">
                            <strong>JAVASCRIPT:</strong>
                            </li>    
                            <div class="skills">
                                <div class="JAVASCRIPT-mastery">40%</div>
                            </div>
                        </ul>
                    </ul>
                    <div class="btn-gotop text-center">
                        <a class="btn btn-outline-light" href="#goToTop">Go Top</a>
                    </div>
                </div>
            </div>
            <?php 
                include("../html/footer.html");
            ?>
    </div>
</body>
</html>