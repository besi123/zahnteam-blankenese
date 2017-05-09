<!doctype html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html class="no-js" lang="en">
  <head>
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title() ?></title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Neuton:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    
  </head>
  <body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    ?> <div id="startpage-cover">
  <h1 class="text-center"><span>Z</span>ahnteam<span>B</span>lankenese</h1>
  <h2 class="text-center"><span class="firstletter">D</span>r. <span class="firstletter">A</span>ndreas <span class="firstletter">Z</span>ander <span class="firstletter">D</span>r. <span class="firstletter">H</span>ans-<span class="firstletter">U</span>lrich <span class="firstletter">P</span>ackheiser</h2>
    <ul class="class text-center">
      <li>Ästhetik</li>
      <li>Cerec</li>
      <li>Implantologie</li>
      <li>Kiefergelenksbehandlung</li>
      <li>Lasertherapie</li>
      <li>Parodontologie</li>
      <li>Prophylaxe</li>
    </ul>
    <h3 class="text-center"><a id="close-welcome" href="#">Skip intro ></a> </h3>
    
  </div><?php 
} 
?>


  


  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>

        <!-- Close button -->
        <button class="close-button" aria-label="Close menu" type="button" data-close>
          <span aria-hidden="true">&times;</span>
        </button>

        <!-- Menu -->
            
      
          <nav class="vertical menu">
              
              <?php wp_nav_menu(); ?>
          </nav>
            
      </div>
      <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">

        <!-- Close button -->
        <button class="close-button" aria-label="Close menu" type="button" data-close>
          <span aria-hidden="true">&times;</span>
        </button>

        <!-- Menu -->
            
      
          <nav class="vertical menu">
          <h1 class="menu-name text-left"><span class="firstletter">S</span>ervice <span class="firstletter">F</span>ür <span class="firstletter">S</span>ie</h1>
            <?php
                $args = array(
                 'menu' => 'menu-contact'
                );
                wp_nav_menu($args);
                ?>
          </nav>
            
      </div>
            
        <div class="off-canvas-content" data-off-canvas-content>
          <div class="title-bar">
            <div class="title-bar-left">
              <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
             <a href="<?php bloginfo('url'); ?>"><span class="title-bar-title"> <?php bloginfo('name'); ?></span></a>
            </div>
            
          </div>
        </div>
            
        



    <div class="row">
      <div class="medium-12 columns text-right">
        <a href="http://blankenese.manoolia.com/?page_id=257" class="button">Online-Termin</a>
      </div>
    </div>
    <div class="row">
      <div class="medium-12 columns text-center">
        <div class="logo">
          <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url') ?>/image/ZTB_logo_zanderrot.png" alt=""></a>
          </div>
          <h2 class="doctorheader"><span class="firstletter">D</span>r. <span class="firstletter">A</span>ndreas <span class="firstletter">Z</span>ander <span class="firstletter">D</span>r. <span class="firstletter">H</span>ans-<span class="firstletter">U</span>lrich <span class="firstletter">P</span>ackheiser</h2>
      </div>
    </div>