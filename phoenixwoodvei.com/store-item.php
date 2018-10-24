<?php
  include 'header.php';
?>
<main>

  <link href="css/store-item.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  <div class="container">
    <div class="section">
      <a href="#">Store</a> <i class="material-icons tiny">chevron_right</i> <a href="#">Product Name</a>
      <div class="row top-container">
        <div class="col center" id="images">
          <div class="row pic" id="selected">
            <img src="images/furniture_1.png">
          </div>
          <!--<div class="row pic">
            <img src="images/PW-logo.png">
          </div>
          <div class="row pic">
            <img src="images/PW-logo.png">
          </div>
          <div class="row pic">
            <img src="images/PW-logo.png">
          </div>-->
          <div class="row">
            <div class="col s12">
              <a class="btn-floating black"></a>
              <a class="btn-floating red"></a>
            </div>
            <a class="btn-floating blue"></a>
            <a class="btn-floating green"></a>
          </div>
        </div>
        <div class="col s6 center" id="main-image">
          <img src="images/furniture_1.png">
        </div>
        <div class="col s4" id="main-info">
          <h5>Desk</h5>
          <div class="row">
            <div class="col s12">
              <i class="material-icons tiny amber-text">star</i>
              <i class="material-icons tiny amber-text">star</i>
              <i class="material-icons tiny amber-text">star</i>
              <i class="material-icons tiny amber-text">star</i>
              <i class="material-icons tiny amber-text">star_border</i>
              (4.0)
              <a class="right" href="#">FAQ</a>
            </div>
          </div>
          <div class="row">
            <div class="col" id="desc">
              Solid Wood, non-toxic and smooth, it's comfortable to touch and lay on the desk. Premium quality wooden board make it easy to clean. Glossy finish board
            </div>
          </div>
          <div class="row" id="main-price">
            <div class="col s12" id="price">
              <div class="row">
                <div class="col s6">Cost</div>
                <div class="col s4 right green-text">$120.00</div>
              </div>
              <div class="row">
                <div class="col s6">Shipping</div>
                <div class="col s4 right green-text">$15.00</div>
              </div>
              <div class="row">
                <div class="col s6">7% (CA) Tax</div>
                <div class="col s4 right green-text">$9.45</div>
              </div>
              <div class="row">
                <div class="col s6">Total Cost</div>
                <div class="col s4 right green-text">$144.45</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s4">
              <label class="active">Quantity</label>
              <select class="browser-default">
                <option value="1" selected>1</option>
              </select>
            </div>
            <div class="col s6">
              <i class="material-icons tiny">check</i> in stock
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <button class="btn"><i class="material-icons tiny">add_shopping_cart</i> ADD TO CART</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="row mid-container">
        <div class="col s8" id="mid-info">
          <h5>Product Info</h5>
          <div class="row">
            <div class="col s3">Product ID</div>
            <div class="col s8">PHX-F-0001</div>
          </div>
          <div class="row">
            <div class="col s3">Dimensions</div>
            <div class="col s8">?x?x?</div>
          </div>
          <div class="row">
            <div class="col s3">Weight</div>
            <div class="col s8">?? oz</div>
          </div>
        </div>
        
        <div class="col s3" id="right-info">
          <div class="row">
            <h5><i class="material-icons">star_border</i> Rating</h5>
            <p class="grey-text">Leave a rating for this product!</p>
            <form action="#">
              <div class="col s12 center">
                <i class="material-icons tiny amber-text">star_border</i>
                <i class="material-icons tiny amber-text">star_border</i>
                <i class="material-icons tiny amber-text">star_border</i>
                <i class="material-icons tiny amber-text">star_border</i>
                <i class="material-icons tiny amber-text">star_border</i>
              </div>
              <p class="center">
                <button class="btn-flat">Rate</button>
              </p>
            </form>
            <h5><i class="material-icons">share</i>Share</h5>
            <div class="col s12 center" id="share">
              <a class="btn-floating" id="facebook"></a>
              <a class="btn-floating" id="instagram"></a>
              <a class="btn-floating" id="twitter"></a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  <div id="last"></div>
  <script src="js/store-item.js"></script>
</main>
<?php
  include 'footer.php';
?>