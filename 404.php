<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
 

?>


<?php get_header(); ?>  
<div class="row">
      <div class="medium-3 columns">
          <h1 class="menu-name text-right"><span class="firstletter">W</span>ir <span class="firstletter">F</span>ur <span class="firstletter">S</span>ie</h1>
          <?php wp_nav_menu(); ?>
      </div>
      <div class="medium-6 columns">
        <div class="row">
          
              <div class="slickslider">
                  <div>
                      
                          <img src="<?php bloginfo('template_url') ?>/image/zahnteam_blankenese_detail_2.png" alt="">
                      
                  </div> 
                
                  <div>
                     
                          <img src="<?php bloginfo('template_url') ?>/image/Zahnteam1.png" alt="">
                      
                  </div> 
                  <div>
                     
                          <img src="<?php bloginfo('template_url') ?>/image/zahnteam_blankenese_flur.png" alt="">
                      
                  </div> 
                  <div>
                     
                          <img src="<?php bloginfo('template_url') ?>/image/zahnteam_blankenese_empfang_2.png" alt="">
                     </div>
                    <div>
                     
                          <img src="<?php bloginfo('template_url') ?>/image/zahnteam_blankenese_warteraum.png" alt="">
                     </div>
                  </div> 
              </div>
            <div class="content">
              <div class="row">
                <div class="medium-12 columns">
                  <h1><span class="firstletter">D</span>ie <span class="firstletter">P</span>raxis</h1>

                    <h2>Unser Credo: Behandle Deine Patienten stets so, 
                    wie Du selbst behandelt werden möchtest.</h2>
                    <p>
                        Liebe Patienten,</p>
                    <p>
                        herzlich willkommen auf der Homepage unserer 
                        Praxis. Hier haben Sie die Möglichkeit, etwas über 
                        die Ansprüche und Qualitatsmerkmale, sowie das Leistungsspektrum der Praxis zu erfahren.

                        Nehmen Sie sich einen Augenblick Zeit, um einen Eindruck zu gewinnen. 

                        Wir freuen uns darauf, Sie persönlich empfangen zu dürfen und möchten, dass Sie sich bei uns wohlfühlen. </p>
                    <p>
                        Ihr ZahnteamBlankenese
                    </p>
                </div>
              </div>
            </div>
            
          </div>
        
      
      <div class="medium-3 columns">
         <h1 class="menu-name text-left"><span class="firstletter">S</span>ervice <span class="firstletter">F</span>ur <span class="firstletter">S</span>ie</h1>
         <?php
            $args = array(
             'menu' => 'menu-contact'
            );
            wp_nav_menu($args);
          ?>
      </div>
    </div>
  <?php get_footer(); ?>