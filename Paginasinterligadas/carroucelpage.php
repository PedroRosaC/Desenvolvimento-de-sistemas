
    <?php
        require_once './shared/header.php'
    ?>
    <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/flatten.jpg" alt=""/>
    </div>
    <div class="carousel-item">
     <img src="img/images.jpg" alt=""/>
    </div>
    <div class="carousel-item">
      <img src="img/56041e4a17061f435096e636fc4068d4.jpg" alt="Foda"/>
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
    <?php
        require_once './shared/footer.php'
    ?>



