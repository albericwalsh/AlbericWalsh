<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Albéric Walsh</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animations.css">
    <!--    scripts-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/animations.js"></script>
</head>
<body>
<!-- background -->
<div class="gradient-dark"></div>
<!-- menu -->
<div class="menu">
    <a href="#top" type="button" class="btn btn-primary btn-floating" data-mdb-ripple-init
       style="align-content: center; align-self: center; margin: 1vh; height: 7vh; width: 7vh">
        <i class="fas fa-4x fa-angle-double-up"></i>
    </a>
    <a href="#apropos" class="btn btn-primary btn-rounded menu-btn">A PROPOS</a>
    <a href="#contact" class="btn btn-primary btn-rounded menu-btn">CONTACT</a>
    <a href="#articles" class="btn btn-primary btn-rounded menu-btn">ARTICLES</a>
</div>
<section id="top">
    <div class="section-div">
        <div data-animated-onScroll data-animated-onLoad class="profile-pic zoom-in">
            <img src="res/profile.jpg" class="img-fluid hover-shadow" alt="icon">
        </div>
        <!--            slide appear and dissapear-->
        <h1 data-animated-onScroll data-animated-onLoad class="slide-in-left">
            Albéric
        </h1>
        <h2 data-animated-onScroll data-animated-onLoad class="slide-in-left">
            WALSH DE SERRANT
        </h2>
        <h3 data-animated-onScroll data-animated-onLoad class="slide-in-left">
            21 ans
        </h3>
        <h4 data-animated-onScroll data-animated-onLoad class="slide-in-left">
            06 17 84 51 96
        </h4>
        <br>
        <div style="display: flex">
            <h4>
                Curriculum vitæ
            </h4>
            <a href="Files/CV.pdf" download="CV.pdf" type="button" class="btn btn-primary btn-floating"
               style="margin-left: 1vw" data-mdb-ripple-init>
                <i class="fas fa-download"></i>
            </a>
        </div>
    </div>
</section>
<section id="apropos">
    <div class="section-div" style="gap: 5vh">
        <a href="parcours.php" type="button" class="btn btn-custom btn-transparent slide-in-right"
           style="align-content: center; width: 50%" data-animated-onScroll
           data-animated-onLoad data-mdb-ripple-init>Parcours</a>
        <a href="passions.php" type="button" class="btn btn-custom btn-transparent slide-in-right"
           style="align-content: center; width: 50%" data-animated-onScroll
           data-animated-onLoad data-mdb-ripple-init>Passions</a>
        <a href="projets.php" type="button" class="btn btn-custom btn-transparent slide-in-right"
           style="align-content: center; width: 50%" data-animated-onScroll
           data-animated-onLoad data-mdb-ripple-init>Projets</a>
    </div>
</section>
<section id="contact">
    <div class="section-div">
        <h1 data-animated-onLoad data-animated-onScroll class="slide-in-left">
            Contact
        </h1>
        <h2 data-animated-onLoad data-animated-onScroll class="slide-in-left">
            <a href="mailto:albericwdsrt@gmail.com">mail</a>
        </h2>
        <h2 data-animated-onLoad data-animated-onScroll class="slide-in-left">
            <a href="https://www.linkedin.com/in/alb%C3%A9ric-walsh-de-serrant-820a211ab/">linkedin</a>
        </h2>
        <div data-animated-onScroll data-animated-onLoad class="fade-in" style="display: flex; gap: 1vh">
            <!-- Facebook -->
            <a class="btn text-white" data-mdb-ripple-init style="background-color: #3b5998;" target="_blank"
               href="https://www.facebook.com/profile.php?id=61564927389209" role="button">
                <i class="fab fa-facebook-f"></i>
            </a>
            <!-- Twitter -->
            <a class="btn text-white" data-mdb-ripple-init style="background-color: #55acee;" target="_blank"
               href="https://x.com/BroawzN" role="button">
                <i class="fab fa-twitter"></i>
            </a>
            <!-- Github -->
            <a class="btn text-white" data-mdb-ripple-init style="background-color: #333333;" target="_blank"
               href="https://github.com/albericwalsh" role="button">
                <i class="fab fa-github"></i>
            </a>
            <!-- Linkedin -->
            <a class="btn text-white" data-mdb-ripple-init style="background-color: #0082ca;" target="_blank"
               href="https://www.linkedin.com/in/alb%C3%A9ric-walsh-de-serrant-820a211ab/" role="button">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
</section>
<section id="articles">
    <div class="section-div" style="justify-content: start; gap: 2vh">
        <div class="row">
            <!--            CEWEB_Agency.php-->
            <div class="col-4">
                <div class="card zoom-in" data-animated-onLoad data-animated-onScroll>
                    <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipM0vtZQnjgvWuUsnX6kjSPaYqmczRjsgVLqyCbm=s680-w680-h510"
                             class="img-fluid thumbnail" alt="thumbnail"/>
                        <a href="articles/CEWEB_Agency.php">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">CEWEB Agency</h5>
                        <p class="card-text">Pour mon stage de bachelor 2, j'ai eu l'honneur de travailler chez CEWEB
                            Agnecy, Une agence web...</p>
                        <a href="articles/CEWEB_Agency.php" type="button" class="btn btn-secondary" style="position: absolute; bottom: 4vh" data-mdb-ripple-init>
                            Voir plus
                        </a>
                    </div>
                </div>
            </div>
            <!--            organisation_chez_CEWEB_Agency.php-->
            <div class="col-4">
                <div class="card zoom-in" data-animated-onLoad data-animated-onScroll>
                    <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                        <img src="https://images.pexels.com/photos/416405/pexels-photo-416405.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                             class="img-fluid thumbnail" alt="thumbnail"/>
                        <a href="articles/organisation_chez_CEWEB_Agency.php">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">L'oragnisation Chez CEWEB Agency</h5>
                        <p class="card-text">Durant tout mon stage, j'ai eu l'occasion de me plonger completement dans l'organisation de cette entreprise...</p>
                        <a href="articles/organisation_chez_CEWEB_Agency.php" type="button" class=" btn btn-secondary" style="position: absolute; bottom: 4vh" data-mdb-ripple-init>
                            Voir plus
                        </a>
                    </div>
                </div>
            </div>
            <!--            CEWEB Agency-->
            <div class="col-4">
                <div class="card zoom-in" data-animated-onLoad data-animated-onScroll>
                    <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipM0vtZQnjgvWuUsnX6kjSPaYqmczRjsgVLqyCbm=s680-w680-h510"
                             class="img-fluid thumbnail" alt="thumbnail"/>
                        <a href="articles/CEWEB_Agency.php">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">CEWEB Agency</h5>
                        <p class="card-text">Pour mon stage de bachelor 2, j'ai eu l'honneur de travailler chez CEWEB
                            Agnecy, Une agence web...</p>
                        <a href="articles/CEWEB_Agency.php" type="button" class="btn btn-secondary" style="position: absolute; bottom: 4vh" data-mdb-ripple-init>
                            Voir plus
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!--            CEWEB Agency-->
            <div class="col-4">
                <div class="card zoom-in" data-animated-onLoad data-animated-onScroll>
                    <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipM0vtZQnjgvWuUsnX6kjSPaYqmczRjsgVLqyCbm=s680-w680-h510"
                             class="img-fluid thumbnail" alt="thumbnail"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">CEWEB Agency</h5>
                        <p class="card-text">Pour mon stage de bachelor 2, j'ai eu l'honneur de travailler chez CEWEB
                            Agnecy, Une agence web...</p>
                        <a type="button" class="btn btn-secondary" style="position: absolute; bottom: 4vh" data-mdb-ripple-init>
                            Voir plus
                        </a>
                    </div>
                </div>
            </div>
            <!--            CEWEB Agency-->
            <div class="col-4">
                <div class="card zoom-in" data-animated-onLoad data-animated-onScroll>
                    <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipM0vtZQnjgvWuUsnX6kjSPaYqmczRjsgVLqyCbm=s680-w680-h510"
                             class="img-fluid thumbnail" alt="thumbnail"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">CEWEB Agency</h5>
                        <p class="card-text">Pour mon stage de bachelor 2, j'ai eu l'honneur de travailler chez CEWEB
                            Agnecy, Une agence web...</p>
                        <a type="button" class="btn btn-secondary" style="position: absolute; bottom: 4vh" data-mdb-ripple-init>
                            Voir plus
                        </a>
                    </div>
                </div>
            </div>
            <!--            CEWEB Agency-->
            <div class="col-4">
                <div class="card zoom-in" data-animated-onLoad data-animated-onScroll>
                    <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipM0vtZQnjgvWuUsnX6kjSPaYqmczRjsgVLqyCbm=s680-w680-h510"
                             class="img-fluid thumbnail" alt="thumbnail"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">CEWEB Agency</h5>
                        <p class="card-text">Pour mon stage de bachelor 2, j'ai eu l'honneur de travailler chez CEWEB
                            Agnecy, Une agence web...</p>
                        <a type="button" class="btn btn-secondary" style="position: absolute; bottom: 4vh" data-mdb-ripple-init>
                            Voir plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/active.js"></script>
<script>
    // Initialization for ES Users
    import {Ripple, initMDB} from "mdb-ui-kit";

    initMDB({Ripple});</script>
</body>

</html>