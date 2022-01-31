<?php get_header() ?>

<body>
    <div class="titulo">
  
    
    <?php
    while (have_posts()) {
        the_post();
    }
    ?>
   
  <h1>
        <?php
        the_title();
        ?>
    </h1>
    <p> <?php the_content() ?></p>

  

    </div>
    <?php get_footer() ?>