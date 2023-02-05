<!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <title> Fidelino - Week 5</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/myworks_styles.css" >
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/8cbc507dd9.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include "navbar.php"; ?>


<div class="container-fluid bg-img">
    <div class="overlay"> </div>
        <div class="row justify-content-center"> 
            <div class="col-sm-3 mt-5 card-group">    
                <div class="card card-color" style="z-index: 2 !important;">
                    <img src="media/index-pic.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">WEBPROG Index</h5>
                        <p class="card-text">Contains a list of all my websites in APCWEBPROG server. It is not updated for now.</p>
                        <a href="http://apcwebprog.csf.ph/~acfidelino/" class="btn btn-primary" target="_blank">Go now</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-5 card-group">    
                <div class="card card-color" style="z-index: 2 !important;">
                    <img src="media/week-1.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">WEBPROG Week-1</h5>
                        <p class="card-text">It contains a copy-pasted lesson during our discussions.</p>
                        <a href="http://apcwebprog.csf.ph/~acfidelino/lab1" class="btn btn-primary" target="_blank">Go now</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-5 card-group">    
                <div class="card card-color" style="z-index: 2 !important;">
                    <img src="media/week-3.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">WEBPROG Week-3</h5>
                        <p class="card-text">Contains my website for week 3. The CSS lessons were updated by overwriting so only the last lesson was reflected. 
                        click this link if you want to see the <a href="https://github.com/acfidelino/lab2/commits/main">commits</a> I did.
                        </p>
                        <a href="http://apcwebprog.csf.ph/~acfidelino/lab2/week3/" class="btn btn-primary" target="_blank">Go now</a>
                    </div>
                </div>
            </div>

          
        </div>
        </div>
    </div>

    <?php include "references.php"; ?>
</body>
</html>