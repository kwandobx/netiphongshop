<?php

$author_writer_tp_theme_css = '';

//theme-color
$author_writer_tp_color_option = get_theme_mod('author_writer_tp_color_option');

if($author_writer_tp_color_option != false){
$author_writer_tp_theme_css .='button[type="submit"],.top-header,.main-navigation .menu > ul > li.highlight,.readmore-btn a,.more-btn a,.box:before,.box:after,a.added_to_cart.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,a.added_to_cart.wc-forward,.page-numbers,.prev.page-numbers,.next.page-numbers,span.meta-nav,#theme-sidebar button[type="submit"],#footer button[type="submit"],#comments input[type="submit"],.site-info,.book-tkt-btn a.register-btn,.top-header, .woocommerce ul.products li.product .onsale, .woocommerce span.onsale,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,#slider .carousel-control-prev-icon, #slider .carousel-control-next-icon {';
$author_writer_tp_theme_css .='background-color: '.esc_attr($author_writer_tp_color_option).';';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_color_option != false){
$author_writer_tp_theme_css .='a,#theme-sidebar .textwidget a,#footer .textwidget a,.comment-body a,.entry-content a,.entry-summary a,.page-template-front-page .media-links a:hover,.topbar-home i.fas.fa-phone-volume,#theme-sidebar h3,.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation a:hover, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading, #theme-sidebar h3, #theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading, #theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading, #theme-sidebar h3 {';
$author_writer_tp_theme_css .='color: '.esc_attr($author_writer_tp_color_option).';';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_color_option != false){
$author_writer_tp_theme_css .='@media screen and (max-width:1000px) {';
$author_writer_tp_theme_css .='.toggle-nav i {';
	$author_writer_tp_theme_css .='background: '.esc_attr($author_writer_tp_color_option).';';
$author_writer_tp_theme_css .='} }';
}

//hover color
$author_writer_tp_color_option_link = get_theme_mod('author_writer_tp_color_option_link');

if($author_writer_tp_color_option_link != false){
$author_writer_tp_theme_css .='.prev.page-numbers:focus, .prev.page-numbers:hover, .next.page-numbers:focus, .next.page-numbers:hover, .readmore-btn a:hover,span.meta-nav:hover, #comments input[type="submit"]:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #footer button[type="submit"]:hover,#theme-sidebar .tagcloud a:hover, #theme-sidebar button[type="submit"]:hover,.book-tkt-btn a.register-btn:hover,.more-btn a:hover,.book-tkt-btn a.bar-btn i:hover,.book-tkt-btn a.register-btn:hover, .more-btn a:hover{';
	$author_writer_tp_theme_css .='background: '.esc_attr($author_writer_tp_color_option_link).';';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_color_option_link != false){
$author_writer_tp_theme_css .='a:hover,#theme-sidebar a:hover,.media-links i:hover, #footer a:hover {';
	$author_writer_tp_theme_css .='color: '.esc_attr($author_writer_tp_color_option_link).';';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_color_option_link != false){
$author_writer_tp_theme_css .='#footer .tagcloud a:hover, #footer .wp-block-tag-cloud a:hover, #theme-sidebar .wp-block-tag-cloud a:hover {';
	$author_writer_tp_theme_css .='border-color: '.esc_attr($author_writer_tp_color_option_link).';';
$author_writer_tp_theme_css .='}';
}

//preloader//

$author_writer_tp_preloader_color1_option = get_theme_mod('author_writer_tp_preloader_color1_option');
$author_writer_tp_preloader_color2_option = get_theme_mod('author_writer_tp_preloader_color2_option');
$author_writer_tp_preloader_bg_option = get_theme_mod('author_writer_tp_preloader_bg_option');


if($author_writer_tp_preloader_color1_option != false){
$author_writer_tp_theme_css .='.center1{';
	$author_writer_tp_theme_css .='border-color: '.esc_attr($author_writer_tp_preloader_color1_option).' !important;';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_preloader_color1_option != false){
$author_writer_tp_theme_css .='.center1 .ring::before{';
	$author_writer_tp_theme_css .='background: '.esc_attr($author_writer_tp_preloader_color1_option).' !important;';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_preloader_color2_option != false){
$author_writer_tp_theme_css .='.center2{';
	$author_writer_tp_theme_css .='border-color: '.esc_attr($author_writer_tp_preloader_color2_option).' !important;';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_preloader_color2_option != false){
$author_writer_tp_theme_css .='.center2 .ring::before{';
	$author_writer_tp_theme_css .='background: '.esc_attr($author_writer_tp_preloader_color2_option).' !important;';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_preloader_bg_option != false){
$author_writer_tp_theme_css .='.loader{';
	$author_writer_tp_theme_css .='background: '.esc_attr($author_writer_tp_preloader_bg_option).';';
$author_writer_tp_theme_css .='}';
}

// footer-bg-color
$author_writer_tp_footer_bg_color_option = get_theme_mod('author_writer_tp_footer_bg_color_option');

if($author_writer_tp_footer_bg_color_option != false){
$author_writer_tp_theme_css .='#footer{';
	$author_writer_tp_theme_css .='background: '.esc_attr($author_writer_tp_footer_bg_color_option).' !important;';
$author_writer_tp_theme_css .='}';
}
