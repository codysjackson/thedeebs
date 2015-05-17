<?php
/**
 * Home page template
 *
   Template Name:  Home Page
 *
 */
   ?>
   <?php get_header(); ?>

   <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
   	<ol class="carousel-indicators">
   		<li data-target="#slider" data-slide-to="0" class="active"></li>
   		<li data-target="#slider" data-slide-to="1" class=""></li>
   		<li data-target="#slider" data-slide-to="2" class=""></li>
   		<li data-target="#slider" data-slide-to="3" class=""></li>
   		<li data-target="#slider" data-slide-to="4" class=""></li>
   	</ol>
   	<div class="carousel-inner">
   		<div class="item active slide1">
   			<div class="container">
   				
   			</div>
   		</div>
   		<div class="item slide2">
   			<div class="container">
   				
   			</div>
   		</div>
   		<div class="item slide3">
   			<div class="container">
   				
   			</div>
   		</div>
   		<div class="item slide4">
   			<div class="container">
   				
   			</div>
   		</div>
   		<div class="item slide5">
   			<div class="container">
   				
   			</div>
   		</div>
   	</div>
   	<a class="left carousel-control" href="#slider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
   	<a class="right carousel-control" href="#slider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
   </div>

	<script>
		jQuery(document).ready(function($){
			$('#slider').carousel({
				interval: false
			});
		});
	</script>

   <?php get_footer(); ?>

