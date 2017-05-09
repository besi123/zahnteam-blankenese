<?php
/**
 * Template Name: Online-Termin
  **/
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
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
  <body><div class="off-canvas-wrapper">
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
            <div class="title-bar-right">
              <button class="menu-icon" type="button" data-open="offCanvasRight"></button>
                   <a href="<?php bloginfo('url'); ?>"><span class="title-bar-title"> </span></a>
            </div>
          </div>
        </div>
    <div class="online-termine">
    <div class="row">
      <div class="medium-12 columns text-center">
        <div class="logo">
          <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url') ?>/image/header.png" alt=""></a>
          </div>
      </div>

    </div>
    <div class="row">
    	<div class="medium-12 columns text-center">
    		<!-- iFrame ZAHNTEAM BLANKENESE:  Praxis-Terminkalender -->
			<p class="center_text">Buchen Sie Ihren Termin bei <a href="http://www.doxter.de/zahnarzt-hamburg/dr-andreas-zander?aid=c634c0fbd92ef9fb" alt="" >Dr. Andreas Zander</a> in 4 Schritten bequem online. </p>
			<ul class="center_text">
			<li>1.W&auml;hlen Sie Ihren Besuchsgrund und Ihre Versicherungsart.
			<li>2.Suchen Sie sich einen passenden Termin. (Auf Uhrzeit klicken)
			<li>3.Tragen Sie Ihre pers&ouml;nlichen Daten ein und w&auml;hlen Sie, ob Sie Neu- oder Bestandspatient sind.
			<li>4.Best&auml;tigen Sie Ihre Terminanfrage mit der zugesandten SMS-TAN.
			</ul>
			<iframe src="http://www.doxter.de/zahnarztpraxis-hamburg-zahnteam-blankenese?aid=c634c0fbd92ef9fb&amp;w=1&amp;problem_id=4d7dfc412696e7790f00002d" width="100%" height="800" allowtransparency="true" scrolling="no" frameborder="no" title="WÃ¤hlen Sie hier Ihren Wunschtermin"> Ihr Browser kann leider keine eingebetteten Frames anzeigen. Bitte nutzen Sie folgenden Link, um einen Termin zu vereinbaren: <a href="http://www.doxter.de/zahnarztpraxis-hamburg-zahnteam-blankenese?aid=c634c0fbd92ef9fb">Online Terminvereinbarung</a> </iframe>

    	</div>
    </div>
</div>

<?php get_footer(); ?>