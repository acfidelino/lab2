<!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <title>A.F. Portfolio</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/styles.css" >
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/8cbc507dd9.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid" id="Home">
    <?php include "navbar.php"?>
    <section>
        <div class="container-lg bordered-cont">
            <div class="row gx-5 p-4">
            <div class="col"> 
                <img src="media/me.png" style="min-width: 380px;" class="img-fluid">
            </div> 
            <div class="col d-flex align-items flex-column">
                <div> <h1 class="heading mt-5"> Akira C. Fidelino </h1> </div>
                <div class="fs-5 mt-3 mb-2 caption">I'm a 2nd-Year BSCS Student from Asia Pacific College. Nice to meet you!</div>
                <div class="mt-auto caption">You can contact me at: </div>
                <div class="d-flex justify-content-start mt-4 mb-3 heading">
                    <div class="pe-3"><a href="#" class="link-caption"> <i class="fa-brands fa-facebook-f fa-xl"></i></a></div> 
                    <div class="pe-3"><a href="#" class="link-caption"> <i class="fa-brands fa-linkedin-in fa-xl"></i></a></div> 
                    <div class="pe-3"><a href="#" class="link-caption"> <i class="fa-regular fa-envelope fa-xl"></i></a></div> 
                    <div class="pe-3"><a href="#" class="link-caption"> <i class="fa-brands fa-github fa-xl"></i></a></div> 
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="Profile">
        <div class="container mt-5 mb-5">
            <div class="row gx-5">
                <div class="col d-flex align-items flex-column">
                    <div><h1 class="heading mt-4">Bio:</h1> </div>
                    <div> 
                        <p class="caption lh-lg ms-3 caption">Hi! I am Akira Fidelino. I graduated at APC for my Senior High under the course of 
                        STEM-IT, and then pursued Bachelor of Science in Computer Sciences in the same school, so I can say
                        that I have a bit of experience in the different facets of information technology, especially 
                        programming (Python and Java), web development (HTML, CSS, JavaScript, and PHP), database management 
                        (MySQL). I also have a bit of background in game development and cyber security thanks to the school 
                        organizations I belong to. Feel free to click the button below to get to know me more.
                    </p>
                </div>
                <div class="ms-auto mt-3">
                    <a class="btn btn-custom fw-bold" role="button" href="#" style="letter-spacing: 3px; width:15rem">GET TO KNOW ME</a>
                </div>
            </div>
            <div class="col mt-5 d-flex justify-content-center mb-5">
                <img src="media/formalpic.png" class="img-fluid img-fit">    
            </div>
            </div>
    </section>
    
    <section id="MyWorks">
    <div class="container mt-2 mb-5">
        <h1 style="text-align: center;" class="display-5" >Projects Portfolio:</h1>
        <hr>
        <div id="carouselExampleFade" class="carousel slide carousel-fade ms-auto me-auto" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#"><img src="media/caro_1.png" class="d-block w-100" alt="..."></a>
                </div>
                <div class="carousel-item">
                <a href="#"> <img src="media/caro_2.png" class="d-block w-100" alt="..."> </a>
                </div>
                <div class="carousel-item">
                <a href="#"><img src="media/caro_3.png" class="d-block w-100" alt="..."></a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>        
    </div>
</section>
</div>

<?php include "references.php"; ?>
   
</body>
</html>