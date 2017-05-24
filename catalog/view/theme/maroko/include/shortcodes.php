<?php
//Shortcodes for Visual Composer

add_action( 'vc_before_init', 'road_vc_shortcodes' );
function road_vc_shortcodes() {
	
	//Brand logos
	vc_map( array(
		"name" => __( "Brand Logos", "roadthemes" ),
		"base" => "ourbrands",
		"class" => "",
		"category" => __( "RoadThemes", "roadthemes"),
		"params" => array()
	) );
	
	//Categories carousel
	vc_map( array(
		"name" => __( "Categories Carousel", "roadthemes" ),
		"base" => "categories_carousel",
		"class" => "",
		"category" => __( "RoadThemes", "roadthemes"),
		"params" => array()
	) );
	
	//Latest posts
	vc_map( array(
		"name" => __( "Latest posts", "roadthemes" ),
		"base" => "latestposts",
		"class" => "",
		"category" => __( "RoadThemes", "roadthemes"),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __( "Number of posts", "roadthemes" ),
				"param_name" => "posts_per_page",
				"value" => __( "5", "roadthemes" ),
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __( "Image scale", "roadthemes" ),
				"param_name" => "image",
				"value" => array(
						'Wide'	=> 'wide',
						'Square'	=> 'square',
					),
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __( "Excerpt length", "roadthemes" ),
				"param_name" => "length",
				"value" => __( "20", "roadthemes" ),
			),
		)
	) );
	
	//Testimonials
	vc_map( array(
		"name" => __( "Testimonials", "roadthemes" ),
		"base" => "woothemes_testimonials",
		"class" => "",
		"category" => __( "RoadThemes", "roadthemes"),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __( "Number of testimonial", "roadthemes" ),
				"param_name" => "limit",
				"value" => __( "10", "roadthemes" ),
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __( "Image size", "roadthemes" ),
				"param_name" => "size",
				"value" => __( "120", "roadthemes" ),
			),
		)
	) );
	
	//Rotating tweets
	vc_map( array(
		"name" => __( "Rotating tweets", "roadthemes" ),
		"base" => "rotatingtweets",
		"class" => "",
		"category" => __( "RoadThemes", "roadthemes"),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __( "Twitter user name", "roadthemes" ),
				"param_name" => "screen_name",
				"value" => __( "RoadThemes", "roadthemes" ),
			),
		)
	) );
	
	//Mail Poet form
	vc_map( array(
		"name" => __( "Newsletter", "roadthemes" ),
		"base" => "wysija_form",
		"class" => "",
		"category" => __( "RoadThemes", "roadthemes"),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __( "Newsletter Form ID", "roadthemes" ),
				"param_name" => "id",
				"value" => __( "", "roadthemes" ),
			),
		)
	) ); 
}
?>