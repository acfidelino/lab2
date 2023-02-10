<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title> A.F. Porfolio | Profile </title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/profile_styles.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/8cbc507dd9.js" crossorigin="anonymous"></script>
    <style>
    .error {color: #FF0000;}
    </style>
</head>
<body>
<?php include "navbar.php"; ?>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="w3-content" style="max-width:1400px">
    <header class="w3-container w3-center w3-padding-32">
    <h1><b>Akira's Space</b></h1>
    <p>Welcome to<span class="w3-tag highlight">my world</span></p>
</header>

<div class="w3-row">
    <div class="w3-col l8 s12">
        <div class="w3-card-4 w3-margin w3-white">
            <img src="media/easetitik.png" alt="Me" style="width:100%">
            <div class="w3-container">
                <h3 class="mt-3"><b>Self-Introduction</b></h3>
                <h6>Date: <span class="w3-opacity">January 9, 2023</span></h6>
            </div>
            
            <div class="w3-container">
                <p>Hi! I am Akira Fidelino. I live in Taguig City, so if you're wondering why
                you rarely see me onsite, its due to the severe traffic going home from APC, despite the cities
                being close enough. I graduated at APC for my Senior High under the course of STEM-IT, so I can say
                that I have a bit of experience in designing websites. In terms of my interests, I really like reading
                visual works like Mangas and Webtoons. I also like listening to a certain type of Japanese Music called
                Utaites - artists who cover songs sung by AI.
                </p>
            </div>
        </div>
        <hr>


        <div class="w3-card-4 w3-margin w3-white">
            <img src="media/org.png" alt="Blog-Pic" style="width:100%">
            <div class="w3-container">
                <h3 class="mt-3"><b>Me as a BS-ORG</b></h3>
                <h6>Date: <span class="w3-opacity">January 9, 2023</span></h6>
            </div>

            <div class="w3-container">
                <p>Ever since this school year started, I have been joining more and more organizations due to a multitude 
                    of reasons: better foundations, connections, peers' influence, etc., which led to me having a total of
                    me being under 6 organizations as of the present. I am an executive at JPCS and JISSA, while I am only a
                    member at the others -- MSC, GG, Rotaract, and RFS. I also am a part of the Student Ambassadors under the
                    Admissions Office. Although handling both academic and organizational responsibilities are hard, the products
                    of your efforts are just as satisfying, along with the skills you learn along the way such as proper
                    time management, commitment, and teamwork.
                </p>
             
            </div>
        </div>
    </div>

    <div class="w3-col l4">
        <div class="w3-card w3-margin w3-margin-top">
            <img src="media/candid.png" style="width:100%">
            <div class="w3-container w3-white">
              <h2>Contact Me (WIP):</h2>
              <p><span class="error">* required field</span></p>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
              <div class="mb-2">
                <label for="Name"> <span class="error">*<?php echo $nameErr;?></span> 
                  Name: 
                </label>
                <input type="text" class="form-control" name="name" id="Name" value="<?php echo $email;?>">
              </div>
              <div class="mb-2">
                <label for="Email"> <span class="error">*<?php echo $emailErr;?></span> 
                  Email: 
                </label>
                <input type="text" class="form-control" name="email" id="Email" value="<?php echo $email;?>">
              </div>
              <div class="mb-2">
                <label for="Website"> <span class="error">*<?php echo $websiteErr;?></span> 
                  Website: 
                </label>
                <input type="text" class="form-control" name="website" id="Website" value="<?php echo $website;?>">
              </div>
              <div class="form-floating mb-2">
                <textarea class="form-control" name="comment" placeholder = "Leave a comment here" id="floatingTextarea"><?php echo $comment?></textarea> 
                <label for="floatingTextarea">Comments:</label>
              </div>
              Gender:
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" 
                <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
                <label class="form-check-label" for="flexRadioDefault1">
                  Female
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2"
                <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
                <label class="form-check-label" for="flexRadioDefault2">
                  Male
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault3"
                <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">
                <label class="form-check-label" for="flexRadioDefault3">
                  Other
                </label>
              </div>
              <span class="error mb-2">* <?php echo $genderErr;?></span>
              <br>
              <input type="submit" name="submit" value="Submit">  
            </form>
            <hr>
            <?php
            echo "<h2>Your Input:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
            echo "<br>";

            if($_SERVER["REQUEST_METHOD"]=="POST"){
              include "mysql_insert.php";
            }
            ?>
            <br>
            <a href="guest.php">Click here to view the guest lists</a>
            </div>
        </div>
        <hr>

        <div class="w3-card w3-margin">
            <div class="w3-container w3-padding">
                <h4>My Favorite Utaites</h4>
            </div>
            <ul class="w3-ul w3-hoverable w3-white">
                <li class="w3-padding-16">
                    <img src="media/mafu.jpg" alt="Image" class="w3-left w3-margin-right"
                    style="width:50px">
                    <span class="w3-large">Mafumafu</span><br>
                    <span>Very high vocal range</span>
                </li>
                <li class="w3-padding-16">
                    <img src="media/Chogakusei.jpg" alt="Image" class="w3-left w3-margin-right"
                    style="width:50px">
                    <span class="w3-large">Chogakusei</span><br>
                    <span>Raspy voice</span>
                </li>
                <li class="w3-padding-16">
                    <img src="media/sou.jpg" alt="Image" class="w3-left w3-margin-right"
                        style="width:50px">
                        <span class="w3-large">Sou</span><br>
                    <span>Sweet, "young boy" type of voice</span>
                </li>
                <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                    <img src="media/soraru.jpg" alt="Image" class="w3-left w3-margin-right"
                    style="width:50px">
                    <span class="w3-large">Soraru</span><br>
                    <span>Mellow voice</span>
                </li>
            </ul>
        </div>
        <hr>

        <div class="w3-card w3-margin">
            <div class="w3-container w3-padding">
                <h4>Hobbies & Interests:</h4>
            </div>
            <div class="w3-container w3-white">
                <br>
                <p> 
                    <span class="w3-tag highlight w3-small w3-margin-bottom">Reading:</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Manhwas</span> 
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Mangas</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Webtoons</span> 
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Webnovels</span> 
                    <span class="separator">|</span>
                    <span class="w3-tag highlight w3-small w3-margin-bottom">People:</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Utaites</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Alec Benjamin</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ed Sheeran</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Taylor Swift</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Yuzuru Hanyu</span>
                    <span class="separator">|</span>
                    <span class="w3-tag highlight w3-small w3-margin-bottom">Others:</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Mobile Gaming</span>
                    </p>
            </div>
        </div>
        <div class="w3-card w3-margin">
            <div class="w3-container w3-padding">
                <h4>Technical Skills:</h4>
            </div>
            <div class="w3-container w3-white">
                <br>
                <p>
                    <span class="w3-tag highlight w3-small w3-margin-bottom">Web Design & Development:</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">HTML</span> 
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">CSS</span> 
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">PHP</span> 
                    <span class="separator">|</span>
                    <span class="w3-tag highlight w3-small w3-margin-bottom">Programming:</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Python Programming</span> 
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Java Programming</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">MySQL</span>
                    <span class="separator">|</span>
                    <span class="w3-tag highlight w3-small w3-margin-bottom">Others:</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">SCRUM & Agile Methodology</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Game Development - Basics</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Design Thinking</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">UI/UX</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Quantitative Research</span>
                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Qualitative Research</span>
                    </p>
            </div>
        </div>
    </div>

</div><br>

</div>
<?php include "references.php"; ?>

</div>
</div>
</div>
</body>


</html>


</body>
</html>