<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
  
        <meta charset="UTF-8">
        <title>Tech Gadgets</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>

    </head>
    <body style= "positon:absolute background: url(https://images.pexels.com/photos/325153/pexels-photo-325153.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)">
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner-image" >
           <div class="container">
               <center>
               <div id="banner_content">
                   <h1><b style= color:red>We Sell Top-Tier Tech Gadget.</b></h1>
                   <p><b style= color:red >Flat 40% OFF on every premium brands.</b></p>
                   <a href="products.php" target="_blank"> <button  class="btn btn-danger btn-lg active"><b >Shop Now</b> </button></a>
                   
               </div>
                </center>
           </div>
       
       </div><br><br>
        
     
         <div class="container">
             <div class="row text-center">               
                 <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
                <image src="img/real.jpg"/>
             <div class="caption">
                 <h2 style= color:red>Smartphones</h2>
                 <p style= color:red>Original products from the best brand.</p>
             </div>
            </a>
                         </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
             <image src="img/gaming.jfif"/>
             <div class="caption">
                 <h2 style= color:red>Gaming</h2>
                 <p style= color:red>Choose among the best available in the world.</p>
             </div>
            </a>
                     </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
            <image src="img/xbox.jfif"/>
             <div class="caption">
                 <h2 style= color:red>Gaming Console</h2>
                 <p style= color:red>Our exquisite collection of Gaming Player.</p>
             </div>
            </a>
                     </div>
        </div>
 
             </div>
         </div><br><br><br><br>
         
      
                
        
       <footer class="fo">
           
           <div class="container">
               <center>
                   <p style= color:red><b>Created By Kanza Khaleeq</p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
