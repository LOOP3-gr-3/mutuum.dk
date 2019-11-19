<!-- her henter jeg headeren ned -->
<?php
    $page = ('Forside');
    require_once('includes/header.php');
    require_once('includes/footer.php');
    if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>

<link href="includes/styles/forside.css" type="text/css" rel="stylesheet">

    <div id="site-highlights">
        <hr>
        <h2>Her skal vores motto være!</h2>
        <hr>
    </div>


<body>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with caption text -->
  <div class="mySlides fade">
    <img src="images/graf.png" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <img src="images/ICO.PNG" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <img src="images/MUTUUM.png" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Næste og forrige knapper -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- Cirklerne -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<!-- Her indsætter jeg javascript, for at få billederne til at køre -->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


<!-- Tilføjer javascript for at få den til at skifte slide efter nogle sekunder -->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000);
}
</script>
    
<br> <br>
    
<!-- Tilføjelse af tekst og figurer -->
<div style="text-align:center">
        <h2 class="w3-wide"> Simpelt og overskueligt </h2>
        <p class="w3-opacity"><i>Start din investering eller lån med kun ét klik. Det bliver kanon. Med Mutuum behøver du hverken være økonom eller millionær for at lave en professionel investering. Du behøver heller ikke at stå med lort til halsen - for vi står klar til at hjælpe :-D </i></p>
    
    <img src="images/MUTUUM.png">
    
<br> <br>

        <h2 class="w3-wide"> Det er nemt og hurtigt at ansøge om et lån </h2>
        <p class="w3-opacity"><i>Start din investering eller lån med kun ét klik. Det bliver kanon. Med Mutuum behøver du hverken være økonom eller millionær for at lave en professionel investering. Du behøver heller ikke at stå med lort til halsen - for vi står klar til at hjælpe :-D </i></p>

    <img src="images/netvaerk.png">
    <img src="images/match.png">
    
        <h2 class="w3-wide"> Simpelt og overskueligt </h2>
        <p class="w3-opacity"><i>Start din investering eller lån med kun ét klik. Det bliver kanon. Med Mutuum behøver du hverken være økonom eller millionær for at lave en professionel investering. Du behøver heller ikke at stå med lort til halsen - for vi står klar til at hjælpe :-D </i></p>
  
<br> <br>
    
        <h2 class="w3-wide"> HER SKAL DER VÆRE EN GRAF! </h2>
        <img src="images/graf.png">
    
<br> <br> <br>

        <h2 id="wtext-långiver"> LÅNGIVER </h2>
        <img src="images/profil.png">
        <p class="w3-opacity"><i>Start din investering eller lån med kun ét klik. Det bliver kanon. Med Mutuum behøver du hverken være økonom eller millionær for at lave en professionel investering. </i></p>
    
        <h2 id="wtext-långiver"> LÅNTAGER </h2>
        <img src="images/profil.png">
        <p class="w3-opacity"><i>Start din investering eller lån med kun ét klik. Det bliver kanon. Med Mutuum behøver du hverken være økonom eller millionær for at lave en professionel investering. Du behøver heller ikke at stå med lort til halsen - for vi står klar til at hjælpe :-D  </i></p>

</div>
</body>
