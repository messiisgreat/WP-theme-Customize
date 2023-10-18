<?php



$wp_customize->add_section( 'yourseobook_general_seo_sections',
 array(
   'priority' => 9,
   'title' => __( 'General SEO Section', 'yourseobook' ),
   'panel' => 'yourseobook_general_seo_panel'
 )
);

$wp_customize->add_section( 'yourseobook_general_seo_clean_metadata_sections',
 array(
   'priority' => 10,
   'title' => __( 'Clean Head Metadata', 'yourseobook' ),
   'panel' => 'yourseobook_general_seo_panel'
 )
);


$wp_customize->add_section( 'yourseobook_general_seo_book_pro_sections',
 array(
   'priority' => 11,
   'title' => __( 'SEO BOOK PRO™', 'yourseobook' ),
   'panel' => 'yourseobook_general_seo_panel'
 )
);

