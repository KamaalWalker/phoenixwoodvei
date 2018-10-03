<?php
  include 'header.php';
?>

<link href="css/store.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<div class="section temp1 center" id="top">
  <h5>Gallery</h5>
</div>

<div class="section search">
  <div class="input-field browser-default" id="search">
    <input type="text" id="searchfield" placeholder="Search Items, Categories, Price..." onkeyup="">
    <i class="material-icons right" id="searchicon">search</i>
  </div>
</div>

<div class="section temp2">
  
  <div class="row">
    <div class="col s2 category center" id="furniture">
      Furniture
    </div>
    <div class="carousel">
      <a class="carousel-item" href="#one!"><img src="images/furniture_1.png"></a>
      <a class="carousel-item" href="#two!"><img src="images/furniture_2.png"></a>
      <a class="carousel-item" href="#three!"><img src="images/furniture_3.png"></a>
    </div>
  </div>
  
  <div class="row">
    <div class="col s2 category center" id="furniture">
      Accessories
    </div>
    <div class="carousel">
      <a class="carousel-item" href="#one!"><img src="images/accessory_1.png"></a>
      <a class="carousel-item" href="#two!"><img src="images/accessory_2.png"></a>
      <a class="carousel-item" href="#three!"><img src="images/accessory_3.png"></a>
    </div>
  </div>
  
</div>

<!--<div class="section temp3">
  <h5>Featured ? On Sale? Staff picks?</h5>
</div>

<div class="section temp3">
  <h5>Statistics?</h5>
</div>

<div class="section temp3">
  <h5>Live pictures with products</h5>
</div>

<a class="center" href="#top">Top</a>-->

<script src="js/store.js"></script>

<?php
  include 'footer.php';
?>