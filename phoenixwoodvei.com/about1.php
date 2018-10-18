<?php 
    include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.85;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("../images/newpheromone.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("../images/timber-trees.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("../images/wooden-slate.jpg");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #015249;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
</head>
<body>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">ABOUT US</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Who We Are</h3>
  <p>Phoenix Wood is a company focused on the preservation of the forests through the process of recycling wood killed by bark beetles into natural products. We are dedicated making our forest and the community a healthier 
     and more efficient place through the use of nature's resources by clearing the forests of infested and dead wood.</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">What We Envision</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus tristique purus et porttitor. Morbi ac nisl velit. Praesent pellentesque, est sed pellentesque laoreet, mi dolor finibus magna, eget bibendum leo ipsum quis ligula. Donec aliquet enim urna, sed rutrum neque efficitur non. Curabitur suscipit lacus malesuada volutpat maximus. Duis lectus risus, dictum vitae consectetur quis, facilisis eget libero. Aliquam consequat bibendum enim, at rhoncus arcu eleifend a. Fusce sapien risus, ultricies imperdiet condimentum vitae, molestie quis augue. Nunc sit amet malesuada elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas imperdiet vitae orci sit amet euismod.</p>
</div>
    
<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">What Makes Our Product Unique</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus tristique purus et porttitor. Morbi ac nisl velit. Praesent pellentesque, est sed pellentesque laoreet, mi dolor finibus magna, eget bibendum leo ipsum quis ligula. Donec aliquet enim urna, sed rutrum neque efficitur non. Curabitur suscipit lacus malesuada volutpat maximus. Duis lectus risus, dictum vitae consectetur quis, facilisis eget libero. Aliquam consequat bibendum enim, at rhoncus arcu eleifend a. Fusce sapien risus, ultricies imperdiet condimentum vitae, molestie quis augue. Nunc sit amet malesuada elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas imperdiet vitae orci sit amet euismod.</p>
</div>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">STORE</span>
  </div>
</div>

</body>
</html>

<?php
    include 'footer.php';
?>
