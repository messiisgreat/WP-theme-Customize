<?php

function yourseobook_widgets_init() {

                  register_sidebar( array(
                                        'name' => 'Footer Widget Area One',
                                        'id' => 'yourseobook_footer_widget_one',
                                        'before_widget' => '<div id="fwaone" class="col col-md-3 col-sm-6">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="footer-heading-titles">',
                                        'after_title' => '</h3>',
                  ));
                  register_sidebar( array(
                                        'name' => 'Footer Widget Area Two',
                                        'id' => 'yourseobook_footer_widget_two',
                                        'before_widget' => '<div id="fwatwo" class="col col-md-3 col-sm-6">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="footer-heading-titles">',
                                        'after_title' => '</h3>',
                  ));

                  register_sidebar( array(
                                        'name' => 'Footer Widget Area Three',
                                        'id' => 'yourseobook_footer_widget_three',
                                        'before_widget' => '<div id="fwathree" class="col col-md-3 col-sm-6">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="footer-heading-titles">',
                                        'after_title' => '</h3>',
                  ));

                  register_sidebar( array(
                                        'name' => 'Footer Widget Area Four',
                                        'id' => 'yourseobook_footer_widget_four',
                                        'before_widget' => '<div id="fwafour" class="col col-md-3 col-sm-6">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="footer-heading-titles">',
                                        'after_title' => '</h3>',
                  ));

                  register_sidebar( array(
                                        'name' => 'Footer Widget Area Five',
                                        'id' => 'yourseobook_footer_widget_five',
                                        'before_widget' => '<div id="fwafive" class="col col-md-3 col-sm-6">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="footer-heading-titles">',
                                        'after_title' => '</h3>',
                  ));

// Register Single Page, Single Posts, Archive Page, Category Archives, Single Category, Single Tag, Author Pages Aside Sidebar Widgets

//  Start Register Single Page Sidebars
                  register_sidebar( array(
                                        'name' => 'Single Page Right Sidebar',
                                        'id' => 'yourseobook_single_page_right_sidebar',
                                        'before_widget' => '<div id="spras" class="col-sm col-md">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="single-page-sidebar-heading-title">',
                                        'after_title' => '</h3>',
                  ));
                  register_sidebar( array(
                                        'name' => 'Single Page Left Sidebar',
                                        'id' => 'yourseobook_single_page_left_sidebar',
                                        'before_widget' => '<div id="splas" class="col-sm col-md">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="single-page-sidebar-heading-title">',
                                        'after_title' => '</h3>',
                  ));
//  End Register Single Page Sidebars

//  Start Register Single Post Sidebars

                  register_sidebar( array(
                                        'name' => 'Single Post Right Sidebar',
                                        'id' => 'yourseobook_single_post_right_sidebar',
                                        'before_widget' => '<div id="spostras" class="col-sm col-md">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="single-post-sidebar-heading-title">',
                                        'after_title' => '</h3>',
                  ));
                  register_sidebar( array(
                                        'name' => 'Single Post Left Sidebar',
                                        'id' => 'yourseobook_single_post_left_sidebar',
                                        'before_widget' => '<div id="spostlas" class="col-sm col-md">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="single-post-sidebar-heading-title">',
                                        'after_title' => '</h3>',
                  ));
//  End Register Single Post Sidebars

//  Start Register Archives Page Sidebars

                  register_sidebar( array(
                                        'name' => 'Archives Page Right Sidebar',
                                        'id' => 'yourseobook_archive_page_right_sidebar',
                                        'before_widget' => '<div id="archive-page-ars" class="col-sm-3">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="archive-page-sidebar-heading-title">',
                                        'after_title' => '</h3>',
                  ));
                  register_sidebar( array(
                                        'name' => 'Archives Page Left Sidebar',
                                        'id' => 'yourseobook_archive_page_left_sidebar',
                                        'before_widget' => '<div id="archive-page-als" class="col-sm-3">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="archive-page-sidebar-heading-title">',
                                        'after_title' => '</h3>',
                  ));
//  End Register Archives Page Sidebars

//  Start Register Single Category Page Sidebars
                  register_sidebar( array(
                                        'name' => 'Single Category Right Sidebar',
                                        'id' => 'yourseobook_single_category_page_right_sidebar',
                                        'before_widget' => '<div id="single-category-page-ars" class="col-sm-3">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="single-category-sidebar-heading-title">',
                                        'after_title' => '</h3>',
                  ));
                  register_sidebar( array(
                                        'name' => 'Single Category Left Sidebar',
                                        'id' => 'yourseobook_single_category_page_left_sidebar',
                                        'before_widget' => '<div id="single-category-page-als" class="col-sm-3">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="single-category-sidebar-heading-title">',
                                        'after_title' => '</h3>',
                  ));
//  End Register Single Category Page Sidebars


//  Start Register Single Tag Page Sidebars
                  register_sidebar( array(
                                        'name' => 'Single Tags Page Right Sidebar',
                                        'id' => 'yourseobook_single_tag_page_right_sidebar',
                                        'before_widget' => '<div id="single-tag-page-ars" class="col-sm-3">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="single-tag-page-sidebar-heading-title">',
                                        'after_title' => '</h3>',
                  ));
                  register_sidebar( array(
                                        'name' => 'Single Tag  Page Left Sidebar',
                                        'id' => 'yourseobook_single_tag_page_left_sidebar',
                                        'before_widget' => '<div id="single-tag-page-als" class="col-sm-3">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="single-tag-page-sidebar-heading-title">',
                                        'after_title' => '</h3>',
                  ));
//  End Register Single Tag Page Sidebars


//  Start Register Single Author Page Sidebars
                  register_sidebar( array(
                                        'name' => 'Single Author Page Right Sidebar',
                                        'id' => 'yourseobook_single_author_page_right_sidebar',
                                        'before_widget' => '<div id="single-author-page-ars" class="col-sm-3">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="single-author-page-sidebar-heading-title">',
                                        'after_title' => '</h3>',
                  ));
                  register_sidebar( array(
                                        'name' => 'Single Author Page Left Sidebar',
                                        'id' => 'yourseobook_single_author_page_left_sidebar',
                                        'before_widget' => '<div id="single-author-page-als" class="col-sm-3">',
                                        'after_widget' => '</div>',
                                        'before_title' => '<h3 class="single-author-page-sidebar-heading-title">',
                                        'after_title' => '</h3>',
                  ));
// col-sm-3 col-md-3
//  End Register Single Author Page Sidebars
}
add_action( 'widgets_init', 'yourseobook_widgets_init' );
