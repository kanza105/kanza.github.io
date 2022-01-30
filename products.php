<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
               
        <meta charset="UTF-8">
        <title>Tech Gadgets| Products</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br><br>
        <div class="container">
            
            <div style=background-color:black class="jumbotron">
                <h1 style=color:red >Welcome to Tech Gadgets Store!</h1>
                <p style=color:red>We have the best smartphones,gaming stuff and headphones for you. No need to hunt around, we have all in one place.</p>
                
            </div>
             
        </div>
        
                
                 <div class="container">
              <div class="row text-center">
                  <div class="col-md-3 col-sm-6">
                      <div style=backgroud-color:red class="thumbnail">
                          <img src="img/iphone.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Iphone PRO Max 13</h3>
                              <p>Price:Rs.36000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(1)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a style= background-color:red href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/sam.jfif" alt="Responsive image">
                          <div class="caption">
                              <h3>Samsung Galaxy Z Fold 3</h3>
                              <p>Price:Rs.40000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(2)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a style= background-color:red  href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/3.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Sony DSLR</h3>
                              <p>Price:Rs.50000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(3)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a style=background-color:red  href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/one.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>OnePlus8 Pro 12GB</h3>
                              <p>Price:Rs.80000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(4)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a style= background-color:red  href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/kk.jfif" alt="Responsive image">
                          <div class="caption">
                              <h3>Xiaomi Mi 10</h3>
                              <p>Price:Rs.13000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(5)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a style= background-color:red  href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/headk.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>A4Tech MK-690</h3>
                              <p>Price:Rs.3000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(6)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a style=background-color:red  href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/smartwatch-02.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Apple Watch</h3>
                              <p>Price:Rs.8000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(7)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a style=background-color:red  href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/real.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>RealmeGT Master</h3>
                              <p>Price:Rs.18000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(8)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a style=background-color:red href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/gaming.jfif" alt="Responsive image" id="imgs">
                          <div class="caption">
                              <h3>H&W Keyboard</h3>
                              <p>Price:Rs.800.00</p>
                              <?php 
					
					if (check_if_added_to_cart(9)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a style=background-color:red  href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/wp2513513.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>ASUS Laptop</h3>
                              <p>Price:Rs.1000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(10)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a style=background-color:red  href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/xbox.jfif" alt="Responsive image">
                          <div class="caption">
                              <h3>XBOX 360</h3>
                              <p>Price:Rs.1500.00</p>
                              <?php 
					
					if (check_if_added_to_cart(11)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a style=background-color:red  href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/vir.jfif" alt="Responsive image">
                          <div class="caption">
                              <h3>Virtual Reality</h3>
                              <p>Price:Rs.1300.00</p>
                              <?php 
					
					if (check_if_added_to_cart(12)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a style=background-color:red   href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                      
                      
                      
                  </div>
                  
              </div>
             
          </div><br>
       <footer class="fo">
           <div class="container">
               <center>
               <p style= color:red >Created By Kanza Khaleeq</p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
