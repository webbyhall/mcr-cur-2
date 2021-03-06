<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tour Name</title>
      <link rel="stylesheet" href="css/vendor/owl.carousel.min.css"> 
      <link rel="stylesheet" href="css/app.css">
   </head>
   <body id="tour-detail">
      <?php include ('partials/header.php'); ?>
      <div class="full-width-header">
         <div class="info-container">
            <div class="slider-container">
               <div class="owl-carousel">
                  <div class="item"><img src="http://placehold.it/600x347" alt=""></div>
                  <div class="item"><img src="http://placehold.it/600x347" alt=""></div>
                  <div class="item"><img src="http://placehold.it/600x347" alt=""></div>                  
               </div>               
            </div> 
            <div class="text-container">
               <h1>Northern Quarter And Ancoats Guided Walk With Ken Moth</h1>
               <p class="venue">Brooks Building, Faculty of Education, Manchester Metropolitan University</p>
            </div>  
         </div>
      </div> <!--/.full-width-header-->  
      <div class="full-width-body"> 
      <div class="container">
         <div class="booking-container">
            <div class="tour-summary-container">
               <div class="tour-summary">
                  <ul>
                     <li><strong>Venue: </strong>Brooks Building, Faculty of Education, Manchester Metropolitan University</li>
                     <li><strong>Cost:</strong> &pound;3</li>
                     <li><strong>Duration:</strong> 1hr</li>
                     <li><strong>Tour Type:</strong> Walking tour</li>
                  </ul>   
               </div>
               <div class="type">
                  <ul>
                     <li><div class="tour-type walking"></div></li>
                     <li>Walking Tour</li>
                  </ul>                  
               </div>
            </div> 
            <table>
               <thead>
                  <tr>
                     <th>Date</th>
                     <th>Start Time</th>
                     <th>&nbsp;</th>                     
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td valign="top"><span><strong>Date:</strong></span> Thu 6th Oct 2016</td>
                     <td valign="top"><span><strong>Start Time:</strong></span> 1pm</td>
                     <td><a href="#" class="button button-expanded">Book</a></td>
                  </tr>
                  <tr>
                     <td valign="top"><span><strong>Date:</strong></span> Thu 6th Oct 2016</td>
                     <td valign="top"><span><strong>Start Time:</strong></span> 1pm</td>
                     <td><a href="#" class="button button-expanded">Book</a></td>
                  </tr>
               </tbody>
            </table>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dicta dolor libero, repudiandae, nulla quae neque minima fugiat provident voluptate deserunt odit temporibus veniam, aliquid rerum illo, eos ipsam quidem!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dicta dolor libero, repudiandae, nulla quae neque minima fugiat provident voluptate deserunt odit temporibus veniam, aliquid rerum illo, eos ipsam quidem!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dicta dolor libero, repudiandae, nulla quae neque minima fugiat provident voluptate deserunt odit temporibus veniam, aliquid rerum illo, eos ipsam quidem!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dicta dolor libero, repudiandae, nulla quae neque minima fugiat provident voluptate deserunt odit temporibus veniam, aliquid rerum illo, eos ipsam quidem!</p>
         </div> <!--/.booking-container-->
         <div class="more-info-container">
            <div class="map"><img src="http://placehold.it/600?text=map+goes+here" alt=""></div>
            <h2>Address/Meeting Point</h2>
            <p><strong>Address 1, Address 2, Address 3, Postcode</strong></p> 
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam illum perferendis animi odio consequatur adipisci ex repellat debitis, dolorem. Eaque eos veniam, velit dolorum eius nemo ipsam impedit possimus alias?</p> 
            <h2>Accessability</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam illum perferendis animi odio consequatur adipisci ex repellat debitis, dolorem. Eaque eos veniam, velit dolorum eius nemo ipsam impedit possimus alias?</p>
            <h2>Additional Info</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam illum perferendis animi odio consequatur adipisci ex repellat debitis, dolorem. Eaque eos veniam, velit dolorum eius nemo ipsam impedit possimus alias?</p>
         </div>
      </div> <!--/.container--> 
      </div> <!--/.full-width-body-->   
      <div class="promo-box-bg">
         <div class="promo-box-container">
            <div class="heading">
               <h2>Recommended Tours</h2>
            </div>
            <?php include ('partials/module-tours.php'); ?>
            <?php include ('partials/module-tours.php'); ?> 
            <?php include ('partials/module-tours.php'); ?> 
            <?php include ('partials/module-tours.php'); ?>  
         </div> <!--/.promo-box-container--> 
      </div> <!--/.promo-box-bg-->
       
      <?php include ('partials/footer.php'); ?> 
      <?php include ('partials/js.php'); ?>
      <script src="js/vendor/owl.carousel.min.js"></script>
      <script>
         $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
               loop:true,
               items:1,
               autoplay: true,
               autoplayTimeout: 6000,
               autoplaySpeed: 1000
            })
         });
      </script>
   </body>
</html>