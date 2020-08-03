<?php
  include_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
</head>
<body>
    <!--**START OF HEADER**-->
    <header>
        <h2 id="vetri">VETRISELVAN'S PROJECT</h2>
        <div class="my-nav">
          <ul>
              <li><a href="#heading" style="text-decoration: none;">Home</a></li>
              <li><a href="#content" style="text-decoration: none;">Content</a></li>
              <li><a href="#help" style="text-decoration: none;">Help</a></li>
          </ul>
        </div>
    </header>
    <!--**END OF HEADER**-->

    <div id="carouselExampleIndicators" data-interval="3000" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img id="size" class="d-block w-100" src="images/vb1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img id="size" class="d-block w-100" src="images/cr2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img id="size" class="d-block w-100" src="images/vb2.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img id="size" class="d-block w-100" src="images/vb3.jpg" alt="Fourth slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--**END OF CAROSEL**-->

    <!--**START OF JUMBOTRON-->
    <?php
        if(isset($_GET['register'])){
          if($_GET['register'] == "success"){
            echo "<h3 id='green'>**You Are Successfully Registered**</h3>";
          }else{
            echo "<h3 id='red'>**Unsuccessful, Please go back and check for the error***</h3>";
          }
        }
    ?>
    <?php
        if(isset($_GET['describe'])){
          if($_GET['describe'] == "success"){
            echo "<h3 id='green'>**Thanks For Sharing**</h3>";
          }else{
            echo "<h3 id='red'>**Unsuccessful, Please go back and check for the error***</h3>";
          }
        }
    ?>
    <div class="container-fluid">
      <div class="jumbotron">
        <h1 id="heading">WELOME TO THE WEB PAGE</h1>
        <hr class="my-4">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa facilis magni quibusdam quas nulla laudantium expedita ratione quam repudiandae laborum obcaecati error velit alias reprehenderit animi reiciendis quia architecto libero, deleniti nobis quo, ea voluptas. Officia itaque quam dolorum sunt ratione inventore animi, minus odio cupiditate iste eveniet rerum saepe ducimus in tenetur voluptatum et unde officiis mollitia eos facilis provident nulla. Nobis nulla atque ipsam animi asperiores, eius perspiciatis eos debitis quo aut quas omnis provident iure officiis, repellat distinctio illo dolore dignissimos deserunt doloremque molestias. Ex, fuga placeat odit hic at totam soluta non repudiandae quas maxime. Architecto obcaecati modi, ex molestiae quas, incidunt, at iure ipsam eligendi sint eius sunt! Beatae, consequatur ipsam soluta adipisci impedit officiis commodi voluptates veniam laboriosam assumenda accusamus provident dolorem eveniet, architecto facilis magnam. Laboriosam et vitae alias nam iste similique tenetur facilis, dolorem voluptatem soluta eligendi distinctio consequatur a quia officia.</p>
      </div>
    </div>
    <!--**END OF JUMBOTRON**-->

    <!--**START OF FIRST SEGMENT**-->
    <div id="content" class="container-fluid">
      <div class="row one">
        <div class="col-lg-4">
          <model-viewer id="model1" class="left" src="images/RobotExpressive.glb" alt="A 3D model of a bot" auto-rotate camera-controls 
          animation-name="Wave" autoplay ar></model-viewer>
        </div>
        <div id="firstline" class="col-lg-8">
          <h3>summa</h3>
          <hr>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea voluptatem quis, laborum, vero cum harum quidem error eos, asperiores ullam aliquid veritatis necessitatibus dolorem veniam nemo iste dicta molestias temporibus cumque corrupti. Repudiandae et eum sequi omnis labore commodi amet necessitatibus, id deserunt quam voluptatibus vel quibusdam sapiente debitis? Soluta qui necessitatibus adipisci delectus quisquam sint iure dicta ut corrupti, itaque ex fugit quidem illum, ipsa commodi? Possimus cupiditate harum culpa facere ipsum accusamus voluptatum delectus totam, doloribus vitae reprehenderit porro inventore quod suscipit vero. Tempore, aspernatur distinctio! Est debitis ex maxime. Eius architecto porro quisquam pariatur ipsa expedita?
        </div>
      </div>
    </div>
    <!--**END OF FIRST SEGMENT**-->

    <!--**START OF SECOND SEGMENT**-->
    <div class="container-fluid">
      <div class="row two">
        <div id="firstline" class="col-lg-8">
          <h3>summa</h3>
          <hr>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea voluptatem quis, laborum, vero cum harum quidem error eos, asperiores ullam aliquid veritatis necessitatibus dolorem veniam nemo iste dicta molestias temporibus cumque corrupti. Repudiandae et eum sequi omnis labore commodi amet necessitatibus, id deserunt quam voluptatibus vel quibusdam sapiente debitis? Soluta qui necessitatibus adipisci delectus quisquam sint iure dicta ut corrupti, itaque ex fugit quidem illum, ipsa commodi? Possimus cupiditate harum culpa facere ipsum accusamus voluptatum delectus totam, doloribus vitae reprehenderit porro inventore quod suscipit vero. Tempore, aspernatur distinctio! Est debitis ex maxime. Eius architecto porro quisquam pariatur ipsa expedita?
        </div>
        <div class="col-lg-4">
          <model-viewer id="model2" class="rigth" src="images/RobotExpressive.glb" alt="A 3D model of a bot" auto-rotate camera-controls 
          animation-name="Running" autoplay ar></model-viewer>
        </div>
      </div>
    </div>
    <!--**END OF SECOND SEGMENT**-->

    <!--**START OF THIRD SEGMENT**-->
    <div class="container-fluid">
      <div class="row three">
        <div class="col-lg-4">
          <model-viewer id="model3" class="left" src="images/RobotExpressive.glb" alt="A 3D model of a bot" auto-rotate camera-controls 
          animation-name="Jump" autoplay ar></model-viewer>
        </div>
        <div id="firstline" class="col-lg-8">
          <h3>summa</h3>
          <hr>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea voluptatem quis, laborum, vero cum harum quidem error eos, asperiores ullam aliquid veritatis necessitatibus dolorem veniam nemo iste dicta molestias temporibus cumque corrupti. Repudiandae et eum sequi omnis labore commodi amet necessitatibus, id deserunt quam voluptatibus vel quibusdam sapiente debitis? Soluta qui necessitatibus adipisci delectus quisquam sint iure dicta ut corrupti, itaque ex fugit quidem illum, ipsa commodi? Possimus cupiditate harum culpa facere ipsum accusamus voluptatum delectus totam, doloribus vitae reprehenderit porro inventore quod suscipit vero. Tempore, aspernatur distinctio! Est debitis ex maxime. Eius architecto porro quisquam pariatur ipsa expedita?
        </div>
      </div>
    </div>
    <!--**END OF THIRD SEGMENT**-->
    
    <!--**START OF FOURTH SEGMENT**-->
    <div class="container-fluid">
      <div class="row four">
        <div id="firstline" class="col-lg-8">
          <h3>summa</h3>
          <hr>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea voluptatem quis, laborum, vero cum harum quidem error eos, asperiores ullam aliquid veritatis necessitatibus dolorem veniam nemo iste dicta molestias temporibus cumque corrupti. Repudiandae et eum sequi omnis labore commodi amet necessitatibus, id deserunt quam voluptatibus vel quibusdam sapiente debitis? Soluta qui necessitatibus adipisci delectus quisquam sint iure dicta ut corrupti, itaque ex fugit quidem illum, ipsa commodi? Possimus cupiditate harum culpa facere ipsum accusamus voluptatum delectus totam, doloribus vitae reprehenderit porro inventore quod suscipit vero. Tempore, aspernatur distinctio! Est debitis ex maxime. Eius architecto porro quisquam pariatur ipsa expedita?
        </div>
        <div class="col-lg-4">
          <model-viewer id="model4" class="rigth" src="images/RobotExpressive.glb" alt="A 3D model of a bot" auto-rotate camera-controls 
          animation-name="Wave" autoplay ar></model-viewer>
        </div>
      </div>
    </div>
    <!--**END OF FOURTH SEGMENT**-->

    <!--**STARTING OF REGISTERATION FORM**-->
    <form id="register"  action="register.php" method="POST">
      <h2>REGISTERATION</h2>
      <h2>FORM</h2>
      <hr>
      <p>
        NAME<br>
        <input type="text" name="name1" value="<?php if(isset($_GET['name1'])) echo $_GET['name1']; ?>" placeholder="Enter your name">
      </p>
      <?php
        if(isset($_GET['register'])){
          if($_GET['register'] == "charwrong"){
            echo "<div style='color: red; font-size: 20px;'>**Only alphabets are allowed**</div>";
          }
        }
      ?>
      <p>
        EMAIL <br>
        <input type="email" name="email1" value="<?php if(isset($_GET['email1'])) echo $_GET['email1']; ?>" placeholder="Enter your Email ID">
      </p>
      <?php
        if(isset($_GET['register'])){
          if($_GET['register'] == "emailerror"){
            echo "<div style='color: red; font-size: 20px;'>**Provide a correct Email format**</div>";
          }
        }
      ?>
      <p>
        DOB <br>
        <input type="date" name="dob" value="<?php if(isset($_GET['dob'])) echo $_GET['dob']; ?>">
      </p>
      <?php
        if(isset($_GET['register'])){
          if($_GET['register'] == "empty"){
            echo "<div style='color: red; font-size: 20px;'>**Fill all the boxes**</div>";
          }
        }
      ?>
      <?php
        if(isset($_GET['register'])){
          if($_GET['register'] == "sqlerror"){
            echo "<div style='color: red; font-size: 20px;'>**SQL error**</div>";
          }
        }
      ?>
      <?php
        if(isset($_GET['register'])){
          if($_GET['register'] == "success"){
            echo "<div style='color: green; font-size: 20px;'>**Successfully Registered**</div>";
          }
        }
      ?>
      <?php
        if(isset($_GET['register'])){
          if($_GET['register'] == "exists"){
            echo "<div style='color: red; font-size: 20px;'>**Email already exists**</div>";
          }
        }
      ?>
      <button type="submit" id="button1" name="submit1" value="submit">SUBMIT!</button>
      <p id="note">**Note : Register to get notifications**</p>
    </form>
    <!--**ENDING OF REGISTERATION FORM**-->

    <!--**STARTING OF DESCRIPTION**-->
    <form action="describe.php" id="described" enctype="multipart/form-data"  method="POST">
      <h2>SHARE YOUR FAVOURITE MOMENT IN SPORTS</h2>
      <hr>
      <p>
        NAME<br>
        <input type="text" name="name2" value="<?php if(isset($_GET['name2'])) echo $_GET['name2']; ?>" placeholder="Enter your name">
      </p>
      <?php
        if(isset($_GET['describe'])){
          if($_GET['describe'] == "charwrong"){
            echo "<div style='color: red; font-size: 20px;'>**Only alphabets are allowed**</div>";
          }
        }
      ?>
      <p>
        EMAIL <br>
        <input type="email" name="email2" value="<?php if(isset($_GET['email2'])) echo $_GET['email2']; ?>" placeholder="Enter your Email ID">
      </p>
      <?php
        if(isset($_GET['describe'])){
          if($_GET['describe'] == "emailerror"){
            echo "<div style='color: red; font-size: 20px;'>**Provide a correct Email format**</div>";
          }
        }
      ?>
      <p>
        FAVOURITE MOMENT <br>
        <input type="text" class="favo" name="comment" value="<?php if(isset($_GET['comment2'])) echo $_GET['comment2']; ?>" placeholder="Start Describing">
        </input>
      </p>
      <?php
        if(isset($_GET['describe'])){
          if($_GET['describe'] == "empty"){
            echo "<div style='color: red; font-size: 20px;'>**Fill all the boxes**</div>";
          }
        }
      ?>
      <?php
        if(isset($_GET['describe'])){
          if($_GET['describe'] == "sqlerror"){
            echo "<div style='color: red; font-size: 20px;'>**SQL error**</div>";
          }
        }
      ?>
      <?php
        if(isset($_GET['describe'])){
          if($_GET['describe'] == "success"){
            echo "<div style='color: green; font-size: 20px;'>**Successfull!**</div>";
          }
        }
      ?>
      <button type="submit" name="submit2" id="button2" value="submit">SUBMIT!</button>
    </form>
    <!--**ENDING OF DESCRIPTION**-->

    <!--**START OF FOOTER**-->
    <div id="help" class="footer">
      <div class="row">
        <div class="col-sm">
          <h3>Contact us on : </h3>
          <ul>
            <li><img src="images/em.png"><a href="mailto:vetriselvan1818@gmail.com" class="email" style="text-decoration: none;">EMAIL</a></li>
            <li><img src="images/mobile2.png"><a href="tel:+916383696950" class="phone" style="text-decoration: none;">CALL</a></li>
            <li><img src="images/sms2.png"><a href="sms:+916383696950" class="sms" style="text-decoration: none;">SMS</a></li>
          </ul>
          <hr>
        </div>
        <div class="col-sm">
          <address>
            <h3>Address : </h3>
            <p>
              <b>No:6, Vivekanandhar theru,</b><br>
              Dubai main road,<br>
              Dubai kuruku santhu,<br>
              Dubai. 
            </p>
          </address>
          <hr>
        </div>
        <div class="col-sm">
          <h3>Follow us on : </h3>
          <ul>
            <li><img src="images/ig.png"><a class="ig" href="https://www.instagram.com/vetri_mandhana18/?hl=en" target="_blank" style="text-decoration: none;">Instagram</a></li>
            <li><img src="images/fb.png"><a class="fb" href="https://www.facebook.com/vetriselvan.vs.1/" target="_blank" style="text-decoration: none;">Facebook</a></li>
            <li><img src="images/tw2.png"><a class="tw" href="https://twitter.com/VetriselvanVS18" target="_blank" style="text-decoration: none;">Twitter</a></li>
          </ul>
          <hr>
        </div>
      </div>
    </div>
    <div class="map">
      <h3>Location : </h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.271496490307!2d76.93382291415185!3d11.018245192157721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba858dc68b80bbf%3A0x24bab8d60d2bc693!2sGovernment%20College%20of%20Technology!5e0!3m2!1sen!2sin!4v1596359142490!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      <a href="#vetri" style="text-decoration: none;"><h6>^Back To Top^</h6></a>
    </div>
    <!--**END OF FOOTER**-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>