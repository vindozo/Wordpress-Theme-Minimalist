<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Minimalist
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="<?=get_template_directory_uri();?>/style.css">
    <?php wp_head(); ?>    
</head>
<body <?php body_class(); ?>>
    <header id="head">
        <h1 class="blog-title">
            <a href="<?php echo esc_url(home_url()); ?>">
                <?php echo get_bloginfo('name'); ?>
            </a>
        </h1>
        <p class="site-description">
            <?php echo esc_html(get_bloginfo('description')); ?>
        </p>
        <div class="header-menu">
            <ul class="navbar-items nav pull-right navigation-section">
                <div class="mobile-menu-wrapper">
                    <span class="mobile-menu-icon"><i class="icon-menu"></i></span>
                </div>
                <li id="site-navigation" class="main-navigation nav-item" role="navigation">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'main',
                            'menu_id' => 'main-menu',
                            'menu_class' => 'main-menu nav',
                        ));
                    ?>
                </li>
            </ul>
        </div>
    </header>
	<div class="site-content-contain">
		<div id="content" class="site-content">
