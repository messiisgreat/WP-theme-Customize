<?php




   $wp_customize->add_panel( 'yourseobook_main_land_panel',
    array(
      'priority' => 2,
      'title' => __( 'Landing Page Settings', 'yourseobook' ),
    )
  );

   $wp_customize->add_panel( 'yourseobook_main_land_above_the_fold_styles_panel',
    array(
      'priority' => 3,
      'title' => __( 'Above the Fold Styles Settings', 'yourseobook' ),
    )
  );


  $wp_customize->add_panel( 'yourseobook_main_land_below_the_fold_styles_panel',
   array(
     'priority' => 4,
     'title' => __( 'Below the Fold Styles Settings', 'yourseobook' ),
   )
 );
