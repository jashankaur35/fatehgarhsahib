<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Fatehgarh Sahib</title>
  <link rel="stylesheet" href="style.css">
  <script src="index.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.js"></script>-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


    
  <!-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> -->
  
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>

<body>
  <nav>
    <div class="navbar">
        <i class='bx bx-menu'></i> <!-- Menu icon -->
        <div class="logo"><a href="#"><img src="logo.png" class="logo_image" width="70px">FGS</a></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name">Logo</span>
                <i class='bx bx-x'></i> <!-- Close icon -->
            </div>
            <ul class="links">
                <li><a href="#">HOME</a></li>
                <li><a href="daswandh.php">ਦਸਵੰਧ</a></li>
                <li>
                    <a href="deg.php">ਦੇਗ</a>
                </li>
                <li>
                    <a href="#">ਅੰਮ੍ਰਿਤ ਸੰਚਾਰ</a>
                    <i class='bx bxs-chevron-down js-arrow arrow'></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="amritReg.php">Booking</a></li>
                        <li><a href="checkcertificate.php">Certificate</a></li>
                    </ul>
                </li>
                <li><a href="bhetan.html">ਭੇਟਾ</a></li>
                <li><a href="nitnem.html">ਨਿਤਨੇਮ</a></li>
            </ul>
        </div>
        <!--<div class="search-box">-->
            <!--<i class='bx bx-search'></i> &lt;!&ndash; Search icon &ndash;&gt;-->
            <!--<div class="input-box">-->
                <!--<input type="text" placeholder="Search...">-->
            <!--</div>-->
        <!--</div>-->
        <div class="btnDiv">
        <?php
            if (isset($_SESSION['phone'])) {
                echo '<a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>';
            } else {
                echo '<a href="register.php"><button type="button" class="btn btn-primary">Register</button></a>';
                echo '<a href="log.php"><button type="button" class="btn btn-primary">Login</button></a>';
            }
        ?>
        </div>
    </div>
</nav>

  <div class="container">
    <div class="h image1"></div>
    <div class="h image2"></div>
    <div class="h image3"></div>
    <div class="h image4"></div>
  </div>
<!--<center><h2>Amrit Vele Da Hukamnama Sri Fatehgrah Sahib, Date 22-02-2025 Ang 552</h2></center>-->
  <!--<div class="wrapper">-->
	<!--<p>Amrit Vele Da Hukamnama Sri Fatehgrah Sahib, Date 22-02-2025 Ang 552</p>-->
<!--</div>-->
  <!-- cards -->
  <div class="cards">
    <div class="card blue">
        <p class="date" style="position: absolute; top: 0; right: 0; padding: 10px; font-size: 16px">28.02.2025</p>
      <p class="mukhwaak-heading">ਮੁੱਖਵਾਕ</p>
      <p class="tip">ਸਲੋਕੁ ਮਃ ੪ ॥</p>
        <p class="mukhwaak">ਬਿਨੁ ਸਤਿਗੁਰ ਸੇਵੇ ਜੀਅ ਕੇ ਬੰਧਨਾ ਜੇਤੇ ਕਰਮ ਕਮਾਹਿ ॥
        ਬਿਨੁ ਸਤਿਗੁਰ ਸੇਵੇ ਠਵਰ ਨ ਪਾਵਹੀ ਮਰਿ ਜੰਮਹਿ ਆਵਹਿ ਜਾਹਿ ॥ ਬਿਨੁ ਸਤਿਗੁਰ ਸੇਵੇ ਫਿਕਾ ਬੋਲਣਾ ਨਾਮੁ ਨ ਵਸੈ ਮਨਿ ਆਇ
        ॥ ਨਾਨਕ ਬਿਨੁ ਸਤਿਗੁਰ ਸੇਵੇ ਜਮ ਪੁਰਿ ਬਧੇ ਮਾਰੀਅਹਿ ਮੁਹਿ ਕਾਲੈ ਉਠਿ ਜਾਹਿ ॥੧॥ ਮਃ ੩ ॥
        ਇਕਿ ਸਤਿਗੁਰ ਕੀ ਸੇਵਾ ਕਰਹਿ ਚਾਕਰੀ ਹਰਿ ਨਾਮੇ ਲਗੈ ਪਿਆਰੁ ॥ ਨਾਨਕ ਜਨਮੁ ਸਵਾਰਨਿ ਆਪਣਾ ਕੁਲ ਕਾ ਕਰਨਿ ਉਧਾਰੁ ॥੨॥
        ਪਉੜੀ ॥</p>
        <button type="button" class="btn btn-primary">Check Previous</button>
    </div>
  </div>

<!--head granthi-->

  <div class="wrappers">
      <figure class="car">
        <img class="image-card" src="head.png" alt=""/>
        <figcaption>
            <h2 class="head-heading">HEAD GRANTHI</h2>
          <blockquote class="head-name">
            ਗਿਆਨੀ ਹਰਪਾਲ ਸਿੰਘ (ਫਤਿਹਗੜ੍ਹ ਸਾਹਿਬ)
          </blockquote>
          <cite
            >Giani Harpal Singh Ji, the head granthi at Gurdwara Fatehgarh Sahib,is a renowned Katha Vachak (religious discourse giver) in the Sikh community.</cite
          >
          <p class="credit">
            <strong>Caju Gomes</strong>,
            <a href="https://unsplash.com/photos/Co8AlcOhIgE" class="anchor">Unsplash</a>
          </p>
        </figcaption>
      </figure>
  <!--<video src="https://youtu.be/1c-CDrfqgks?si=pFT_OEqfJsQ4lfl6" controls></video>-->
      <iframe class="youtube-video" width="560" height="315" src="https://www.youtube.com/embed/1c-CDrfqgks" frameborder="0" allowfullscreen></iframe>

    </div>


  <!--<div class="third">-->

    <!--<div class="profile">-->
      <!--<div class="our-team"><b>Head Granthi<br> Gurdwara Fatehgarh Sahib</b>-->
        <!--<div class="picture">-->
            <!--<img src="https://play.sikhnet.com/_next/image?url=https%3A%2F%2Fv1-images.sikhnet.io%2Fcdn-cgi%2Fimage%2Fwidth%3D500%2Cquality%3D75%2Fstyles%2Farticle-tile-featured-large%2Fpublic%2Fgurbani%2Fartists%2Fimages%2FGiani-Harpal-Singh.png&w=1080&q=75" alt="Michele Miller">-->
        <!--</div>-->
        <!--<h3>ਗਿਆਨੀ ਹਰਪਾਲ ਸਿੰਘ (ਫਤਿਹਗੜ੍ਹ ਸਾਹਿਬ)</h3>-->
        <!--<h4>Giani Harpal Singh Ji, the head granthi at Gurdwara Fatehgarh Sahib, -->
          <!--is a renowned Katha Vachak (religious discourse giver) in the Sikh community.-->
         <!--</h4>-->
          <!--<button>More..</button>-->
        <!--</div>-->
    <!--</div>-->

    <!--<div class="livekirtan">-->
      <!--<div class="liv"><h3>Gurdwara Sri Fatehgarh Sahib</h3> </div>-->
      <!--<iframe width="400vh" height="300"-->
      <!--src="https://www.youtube.com/embed/uEo5JNFePfM?si=Dti0qpEraIuGjS98" -->
      <!--frameborder="0" allowfullscreen></iframe>-->
        <!--<div class="liv">-->
            <!--<h2>Live Kirtan Sri Fatehgrah Sahib, Date 22-02-2025</h2> View the youtube channel..<a href="">link</a>-->
        <!--</div>-->
    <!--</div>-->
  
  <!--</div>-->


  <!--RAGI SINGH-->
  <div class="container-ragi team-section">
      <p class="date" style="padding: 10px; font-size: 17px; color: #3c3c72; font-weight: 800;">28.02.2025 11:00:00pm</p>
      <button class="btn btn-primary ragies"><a href="allRagi.html" class="allragi"> All Ragi </a></button>
    <h2 class="fw-bold">RAGI SINGH</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur.</p>

    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 team-member">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-G5R5VSN895xc1aXUNeWpZjtp5rfwOZDanw&s" alt="Parveen Anand">
            <h4 class="fw-bold mt-3">ਗਿਆਨੀ ਹਰਪਾਲ ਸਿੰਘ</h4>
            <p class="text-muted">RAGI</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 team-member">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7f99vqW2jqmwIloH0gAUxZ8TCQcBzHe2gPGO9tnDAjgF595ubJM6vrccAISe1yLk7llM&usqp=CAU" alt="Diana Petersen">
            <h4 class="fw-bold mt-3">ਗਿਆਨੀ ਹਰਪਾਲ ਸਿੰਘ</h4>
            <p class="text-muted">RAGI</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 team-member">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8coFJEgDEDTd6nR8uUgUoY-2uReZHYBYo5g&s" alt="Larry Parker">
            <h4 class="fw-bold mt-3">ਗਿਆਨੀ ਹਰਪਾਲ ਸਿੰਘ</h4>
            <p class="text-muted">RAGI</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
    <?php
        if(isset($_SESSION['role'])=='admin'){
             echo ' <a href="ragiadd.html"><button class="add-ragi-btn">
                <i class="bi bi-plus"></i>
            </button></a>';
        }
    ?>
      <!--<button type="button" class="btn btn-primary" class="addRagi"><i class="fa-solid fa-plus"></i> </button>-->

</div>


  <!-- kirtan -->
<!--<div class="ktime"><center><h2><u>Date:</u>13.02.25 <u>Time:</u>3:20 PM TO 4:20 PM </h2></center> </div>-->
   <!-- kirtan -->
   <!--<div class="kirtan">-->
    <!--<div class="card-client">-->
        <!--<div class="user-picture">-->
            <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">-->
                <!--<path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>-->
            <!--</svg>-->
        <!--</div>-->
        <!--<p class="name-client"> Bhai Gurdev Singh-->
            <!--<span>Bhai Jaspreet Singh hails from Fatehgarh Sahib and belongs to a family of very talented rababi musicians.-->
            <!--</span>-->
        <!--</p>-->
        <!--<div class="social-media">-->
            <!--<a href="#">-->
                <!--<a href="#">-->
                    <!--<button>more...</button>-->
                    <!--<span class="tooltip-social" style="color: #ffffff;background-color: #000000;">More About..</span>-->
                <!--</a>-->
            <!--</a>-->
            <!---->
        <!--</div>-->
    <!--</div>-->
    <!--<div class="card-client">-->
        <!--<div class="user-picture">-->
            <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">-->
                <!--<path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>-->
            <!--</svg>-->
        <!--</div>-->
        <!--<p class="name-client"> Bhai Gurdev Singh-->
            <!--<span>Bhai Jaspreet Singh hails from Fatehgarh Sahib and belongs to a family of very talented rababi musicians.-->
            <!--</span>-->
        <!--</p>-->
        <!--<div class="social-media">-->
            <!--<a href="#">-->
                <!--<button>more...</button>-->
                <!--<span class="tooltip-social" style="color: #ffffff;background-color: #000000;">More About..</span>-->
            <!--</a>-->
        <!--</div>-->
    <!--</div>-->
    <!--<div class="card-client">-->
        <!--<div class="user-picture">-->
            <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">-->
                <!--<path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>-->
            <!--</svg>-->
        <!--</div>-->
        <!--<p class="name-client"> Bhai Jalwinder Singh -->
            <!--<span>Bhai Jaspreet Singh hails from Fatehgarh Sahib and belongs to a family of very talented rababi musicians.-->
            <!--</span>-->
        <!--</p>-->
        <!--<div class="social-media">-->
            <!--<a href="#">-->
                <!--<a href="#">-->
                    <!--<button>more...</button>-->
                    <!--<span class="tooltip-social" style="color: #ffffff;background-color: #000000;">More About..</span>-->
                <!--</a>-->
            <!--</a>-->
        <!--</div>-->
    <!--</div>-->
    <!--</div>-->
  <!--</div>-->
  <!--<div class="duites">-->
    <!--<center><h2><a href="#">Kirtan Duties....</a></h2></center> -->
  <!--</div><br><br>-->
  <!-- maping -->
<div class="mploc">
  <div class="image-container">

    <img src="fgsmap.PNG" class="main-image" alt="Main Image" usemap="#image-map" />

    <!-- Hidden images that appear on hover -->
    <img src="https://www.holidify.com/images/cmsuploads/compressed/1024px-Gurdwarafatehgarhsahib_20190729162922.jpg" class="hover-image" id="hoverImage1" alt="Hover Image 1" />
    <img src="https://www.holidify.com/images/cmsuploads/compressed/3_20190327133248.jpg" class="hover-image" id="hoverImage2" alt="Hover Image 2" />
    <img src="https://i.ytimg.com/vi/OChwi7WBkeY/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGHIgOChVMA8=&rs=AOn4CLAop7Phuf1drftNZE5JZd9jC7MwUA" class="hover-image" id="hoverImage3" alt="Hover Image 3" />
    <img src="https://th.bing.com/th/id/OIP.zsGtiOx6VYkCuhh5nJzYnQAAAA?pid=ImgDet&w=192&h=143&c=7&dpr=1.2" class="hover-image" id="hoverImage4" alt="Hover Image 4" />
    <img src="https://wikiwandv2-19431.kxcdn.com/_next/image?url=https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Khanda_museum_Fatehgarh_Sahib.jpg/640px-Khanda_museum_Fatehgarh_Sahib.jpg&w=640&q=50" class="hover-image" id="hoverImage5" alt="Hover Image 5" />
    <img src="https://th.bing.com/th/id/OIP.icIfHjLvApzL2I19gYz5iQHaEN?w=291&h=180&c=7&r=0&o=5&dpr=1.2&pid=1.7" class="hover-image" id="hoverImage6" alt="Hover Image 6" />
    <img src="https://th.bing.com/th/id/OIP.iYALoDeM3pnI4h1u2O5AAQHaFP?rs=1&pid=ImgDetMain" class="hover-image" id="hoverImage7" alt="Hover Image 7" />
    <img src="https://www.discoversikhism.com/images/gurdwara/gurdwara_sri_fatehgarh_sahib/gurdwara_sri_fatehgarh_sahib12.jpg" class="hover-image" id="hoverImage8" alt="Hover Image 8" />
    <img src="https://th.bing.com/th/id/OIP.Q4sgT4rrFMUMkD8EOxOQ8gHaFj?w=253&h=190&c=7&r=0&o=5&dpr=1.2&pid=1.7" class="hover-image" id="hoverImage9" alt="Hover Image 9" />
    <div class="loc">
        <h1>Location:</h1><br>Fatehgarh  Sahib, Sirhind Morinda Road, Distt. Fatehgarh Sahib 147301<br><br>
        <b>Places near by Gurudwara Fatehgarh Sahib:</b>
        <ul><ul>
            <li>Aam  Khas Bagh </li>
            <li>Rauza Sharif</li>
            <li>Haveli Todar Mel</li>
        </ul></ul>
    </div>
</div>

<map name="image-map">
    <area target="" alt="darbar sahib" title="darbar sahib" coords="446,19,408,34,400,70,399,112,494,115,500,70,494,31,447,19" shape="poly" data-hover="hoverImage1">
    <area target="" alt="entry" title="entry" coords="487,395,490,344,490,324,465,312,419,294,381,321,356,351,351,394" shape="poly" data-hover="hoverImage2">
    <area target="" alt="thanda burj" title="thanda burj" coords="7,1,133,77" shape="rect" data-hover="hoverImage3">
    <area target="" alt="parking" title="parking" coords="144,383,200,263,269,115,200,117,138,112,90,191,14,301,13,373" shape="poly" data-hover="hoverImage4">
    <area target="" alt="khanda" title="khanda" coords="731,8,765,96,912,82,906,21" shape="poly" data-hover="hoverImage5">
    <area target="" alt="bathroom" title="bathroom" coords="524,310,587,307,595,348,529,355" shape="poly" data-hover="hoverImage6">
    <area target="" alt="srowar" title="srowar" coords="169,2,162,29,222,46,273,53,297,33,315,4" shape="poly" data-hover="hoverImage7">
    <area target="" alt="sitting area1" title="sitting area1" coords="322,113,310,132,304,159,307,168,356,173,337,258,411,279,430,124,353,111,389,115,341,112,333,113" shape="poly" data-hover="hoverImage8">
    <area target="" alt="sitting area2" title="sitting area2" coords="555,113,509,113,469,125,459,183,567,184,567,146,565,135" shape="poly" data-hover="hoverImage9">
</map>

<script>

    const hoverImages = {
        hoverImage1: document.getElementById('hoverImage1'),
        hoverImage2: document.getElementById('hoverImage2'),
        hoverImage3: document.getElementById('hoverImage3'),
        hoverImage4: document.getElementById('hoverImage4'),
        hoverImage5: document.getElementById('hoverImage5'),
        hoverImage6: document.getElementById('hoverImage6'),
        hoverImage7: document.getElementById('hoverImage7'),
        hoverImage8: document.getElementById('hoverImage8'),
        hoverImage9: document.getElementById('hoverImage9'),
    };

    const areas = document.querySelectorAll('area');

    areas.forEach(area => {
        area.addEventListener('mouseenter', () => {
            const hoverId = area.getAttribute('data-hover');
            const hoverImage = hoverImages[hoverId];

            // Get area coordinates
            const coords = area.coords.split(',').map(Number);
            const shape = area.shape;

            if (shape === 'rect') {
                hoverImage.style.left = `${coords[0]}px`;
                hoverImage.style.top = `${coords[1]}px`;
                hoverImage.style.width = `${coords[2] - coords[0]}px`;
                hoverImage.style.height = `${coords[3] - coords[1]}px`;
            } else if (shape === 'circle') {
                const x = coords[0] - coords[2]; // Adjust for circle
                const y = coords[1] - coords[2];
                hoverImage.style.left = `${x}px`;
                hoverImage.style.top = `${y}px`;
                hoverImage.style.width = `${coords[2] * 2}px`;
                hoverImage.style.height = `${coords[2] * 2}px`;
            }

            hoverImage.style.display = 'block'; // Show the hover image
        });

        area.addEventListener('mouseleave', () => {
            const hoverId = area.getAttribute('data-hover');
            const hoverImage = hoverImages[hoverId];
            hoverImage.style.display = 'none'; // Hide the hover image
        });
    });
    // navbar scroll
    document.addEventListener('DOMContentLoaded', () => {
        const navbar = document.querySelector('nav');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 0) {
                navbar.classList.add('scroll-active'); // Add class on scroll
            } else {
                navbar.classList.remove('scroll-active'); // Remove class
            }
        });
    });
</script>

</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- footer -->
<footer class="footer pt-5">
    <div class="containerr">
        <div class="row g-4">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6">
                <h3 class="footer-title">About Fatehgarh Sahib</h3>
                <p class="mb-4">Gurudwara Fatehgarh Sahib is a historic and spiritual center, dedicated to the teachings of Sikh Gurus.</p>
                <div class="social-links mb-4">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="col-lg-2 col-md-6">
                <h3 class="footer-title">Support</h3>
                <ul class="footer-links">
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-4 col-md-6">
                <h3 class="footer-title">Newsletter</h3>
                <p class= "mb-4">We are here to assist you with any inquiries or feedback regarding your visit to Gurudwara Shri Fatehgarh Sahib.</p>
                <form class="mb-4">
                    <div class="input-group">
                        <input type="email" class="form-control newsletter-input" placeholder="Enter your email">
                        <button class="btn btn-subscribe text-white" type="submit">Submit</button>
                    </div>
                </form>
                <p class="small"></p>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom mt-5">
        <div class="containerr">
            <div class="row py-3">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2024 Your Company. All rights reserved.</p>
                </div>
                
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>