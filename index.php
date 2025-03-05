<?php
//  this tempalet is for displaying the header
?>



<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' )?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head();?>
</head>
<body>
   <div id="header_area">
     <div class="container">
        <div class="row">
           <div class="col-md-3">
              <a href="#"><img src="<?php echo  get_theme_mod('ali_logo'); ?>" alt=""></a>
           </div>
           <div class="col-md-9"> 
             <ul id="nav">
               <li><a href="#">Home</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Services</a>
                  <ul>
                     <li><a href="#">Dropdown menu</a></li>
                     <li><a href="#">Dropdown menu</a></li>
                     <li><a href="#">Dropdown menu</a>
                        <ul>
                           <li><a href="#">sub Dropdown menu</a></li>
                           <li><a href="#">sub Dropdown menu</a></li>
                           <li><a href="#">sub Dropdown menu</a></li>
                           <li><a href="#">sub Dropdown menu</a></li>
                        </ul>
                     </li>
                     <li><a href="#">Dropdown menu</a></li>
                  </ul>
               </li>
               <li><a href="#">FAQ</a></li>
               <li><a href="#">project</a></li>
               <li><a href="#">Contact</a></li>
             </ul>
           </div>
        </div>
     </div>
   </div>

<?php wp_footer();?>
</body>
</html>