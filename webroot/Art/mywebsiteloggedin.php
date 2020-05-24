<!DOCTYPE html>
<?php session_start(); ?>
<html>

<head>
  <title>Rae's Showcase</title>
  <meta charset="utf-8">
  <meta name="viewport">
  <link rel="stylesheet" type="text/css" href="css/mywebsitestyle.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
  <script src="javascript/lightbox-plus-jquery.min.js"></script>
</head>

<body>
  <header>
    <hgroup>
    <h1 class="navigation main">RAE'S ART</h1>
    <?php
        $link_name1 = "";
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          echo "<a>WELCOME BACK</a><br><br>";
          $link_name1 = "LOGOUT";
        }
     ?>
     <a href="logout.php"><?php echo $link_name1; ?></a>
    <img class="nonrotate center gallery" src="images/me.jpg">
  </hgroup>
  </header>

  <nav class="navigation">
    <a href="#about">ABOUT</a>
    &emsp;&emsp;&emsp;&emsp;
    <a href="./contact.html">CONTACT</a>
    &emsp;&emsp;&emsp;&emsp;
    <a href="./more.html">MORE</a>
    &emsp;&emsp;&emsp;&emsp;
    <br><br>
  </nav>

  <nav class="navigation">
    <ul>
      <a href="#Buildings">FRAMEWORK</a>
        &emsp;&emsp;&emsp;&emsp;&emsp;
      <a href="#Perspective">PERSPECTIVE</a>
        &emsp;&emsp;&emsp;&emsp;&emsp;
      <a href="#People">HUMANS</a>
        &emsp;&emsp;
      </ul>
  </nav>

  <div id="container">
    <article>
      <section id="about" class="navigation border">
      <br>
      <p><h3>About me, Rae....</h3></p>
      <h4><p>I am an 18 year old girl from London studying computer science but also who enjoys drawing.</p>
      <p>I am self taught, and everyday I'm learning from myself and others in order to improve my craft.
      What made me take up art? Seeing the complexity of the creations around us in intricate detail all around us fascinates me and there is always something new and beautiful to see. I would say in my day to day life the nature of life never fails to engage me .. from the man made structures to the natural environment, it really just immerses you in your connection with the environment, and puts you in a different perspective from navigating through the day to day human tasks. Capturing it in artistry and photography is just a way for me to feel peace a lot of the time where in such a busy world we stress the mind and struggle to find time to properly to relax the mind</p>
      <br>
      <h3>Click to view pictures</h3>
    </h4>
  </section>

  <section id="People" class="gallery">
    <h2>H U M A N S</h2>
    <br>
      <a href="images/ppl1copy.jpg"data-lightbox="gallery"><img src="images/ppl1.jpg"></a>
      <a href="images/ppl2copy.jpg"data-lightbox="gallery"><img src="images/ppl2.jpg"></a>
      <a href="images/ppl3copy.jpg"data-lightbox="gallery"><img src="images/ppl3.jpg"></a>
      <a href="images/ppl4copy.jpg"data-lightbox="gallery"><img src="images/ppl4.jpg"></a>
      <a href="images/ppl5copy.jpg"data-lightbox="gallery"></a><img class="nonrotate" src="images/ppl5.jpg"/>
      <a href="images/ppl6copy.jpg"data-lightbox="gallery"><img src="images/ppl6.jpg"></a>
      <a href="images/ppl7copy.jpg"data-lightbox="gallery"><img src="images/ppl7.jpg"></a>
      <a href="images/ppl8copy.jpg"data-lightbox="gallery"><img src="images/ppl8.jpg"></a>
      <a href="images/ppl9copy.jpg"data-lightbox="gallery"><img src="images/ppl9.jpg"></a>
      <br><br><br>
      <a href="./login.html">BUY</a>
  </section>
  <br>

  <section id="Perspective" class="gallery">
    <h2>P E R S P E C T I V E</h2>
      <br>
        <a href="images/per1small.jpg"data-lightbox="gallery"><img src="images/per1.jpg"></a>
        <a href="images/per2small.jpg"data-lightbox="gallery"><img src="images/per2.jpg"></a>
        <br>
    </section>

  <section id="Buildings" class="gallery">
    <h2>A R C H I T E C T U R E</h2>
    <br>
        <a href="images/arc1small.jpg"data-lightbox="gallery" data-title="The sketched view of outside my flat on the 1st floor. Normally busy, but it was a rainy afternoon. 30/07/2019"><img src="images/arc1.jpg"></a>
        <a href="images/arc2copy.jpg" data-lightbox="gallery" data-title="The view of my flat living room. Not too large, but I still like this room the best. 31/07/2019</p>"></a><img class="nonrotate" src="images/arc2.jpg">
    </section>

  </article>

</div>

</body>

</html>
