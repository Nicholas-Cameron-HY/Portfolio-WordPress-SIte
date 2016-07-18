<header class="mainNav">
       <div class="headerName">
          <h2>
            <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
              <?php bloginfo( 'name' ); ?>
            </a>
          </h2>

          <div class="navRelative"> 
            <button class="navburger">
                <i> </i>
                <i> </i>
                <i> </i>
            </button>
          </div>
          
      </div>        

     <div class="headerDirectory">  
           <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>  
       </div>  

</header>

