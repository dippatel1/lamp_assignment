<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">



<!-- -------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css" />
    <!---bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- google fornts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Mitr:wght@300;500&family=Mulish:wght@700&family=Sacramento&display=swap" rel="stylesheet">

    <!-- google fornts2--------------------- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allerta&family=Dancing+Script:wght@700&family=Merriweather+Sans:wght@300&family=Mitr:wght@300;500&family=Ms+Madi&family=Mulish:wght@700&family=Sacramento&family=Yesteryear&display=swap" rel="stylesheet">

    <!-- --------------------------- -->
    <!-- 
font-family: 'Dancing Script', cursive;
font-family: 'Mitr', sans-serif;
font-family: 'Mulish', sans-serif;
font-family: 'Sacramento', cursive;

font-family: 'Allerta', sans-serif;
font-family: 'Dancing Script', cursive;
font-family: 'Merriweather Sans', sans-serif;
font-family: 'Mitr', sans-serif;
font-family: 'Ms Madi', cursive;
font-family: 'Mulish', sans-serif;
font-family: 'Sacramento', cursive;
font-family: 'Yesteryear', cursive;
     -->
</head>

<body>



    <!-- --------------------- -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class=" brand" src="logo1.jpeg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">products</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="http://localhost:9372/project1/login.php">login</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['username']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            <li><a class="dropdown-item" href="reset-password.php">Reset Password</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ------------------------------------- -->

    <div class="container-fluid front_page_container">

        <div class="row">
            <div class="col-lg-6 front_page_child1">

                <div class="front_page_cont1">
                    <p class="front_page_p1"> MED CENTER</p>
                    <p class="front_page_p2">Changing Lives Right Here</p>
                    <p class="front_page_p3">
                        Med Center Health offers more access to innovative healthcare. More locations. More lives made
                        better. Right here. Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, quidem
                        aperiam et sint itaque commodi non nam illum eius reprehenderit?
                        Molestias, nihil dolor ex consequatur est accusamus suscipit voluptatibus harum. Fuga sapiente
                        omnis esse qui! Facere, sit officiis aliquam explicabo est repudiandae provident aspernatur
                        necessitatibus debitis qui possimus beatae
                        magnam.
                    </p>
                </div>

            </div>
            <div class="col-lg-6 front_page_child2"> <img class="front_image" src="2e69aabe-c496-6658-d688-2612508a6b44.jpg" alt=""></div>
        </div>
    </div>
    <!-- ----------------------------------------------------------------------->




    <!--   --------------------------------------------------------->
    <section id="features">
        <div class="container-fluid front_page_features">
            <div class="row">
                <div class="col-sm-4 co">
                    <i class="fas fa-check-circle icon_color"></i>
                    <h3>Easy to use.</h3>
                    <p>So easy to use, even your dog could do it.</p>
                </div>
                <div class="col-sm-4 co">
                    <i class="fas fa-bullseye icon_color"></i>
                    <h3>Elite Clientele</h3>
                    <p>We have all the dogs, the greatest dogs.</p>
                </div>
                <div class="col-sm-4 co">
                    <i class="fas fa-heart icon_color"></i>
                    <h3>Guaranteed to work.</h3>
                    <p>Find the love of your dog's life or your money back.</p>
                </div>
            </div>
        </div>
    </section>
    <!--   --------------------------------------------------------->
    <!-- Testimonials -->

    <section id="testimonials">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-div">
                        <p class="testimonial-text">
                            <i> I no longer have to sniff other dogs for love. I've found the hottest Corgi on TinDog.
                                Woof.</i>

                        </p>
                        <img src="img/user-1.jpg" alt="dog-profile" class="testimonial-img" />
                        <em>Pebbles, New York</em>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-div">
                        <p class="testimonial-text">
                            <i> My dog used to be so lonely, but with TinDog's help, they've found the love of their
                                life. I think.</i>

                        </p>
                        <img src="img/user-2.jpg" alt="lady-profile" class="testimonial-img" />
                        <em>Beverly, Illinois</em>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-div">
                        <p class="testimonial-text">
                            <i> I no longer have to sniff other dogs for love. I've found the hottest Corgi on TinDog.
                                Woof.</i>

                        </p>
                        <img src="img/user-3.jpg" alt="dog-profile" class="testimonial-img" />
                        <em>Pebbles, New York</em>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!--  -->
    </section>
    <!-- ----------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>