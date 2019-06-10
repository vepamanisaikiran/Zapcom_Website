<?php /*
	Plugin Name: Zapcom Post
	Description:  Post All Detail Of Zapcom
	Version: 1.0
	Author:Tanvi Priya
	Author URI: www.radicalnetwork.co.in
	License:  free
	*/
	@session_start();
	@include_once( ABSPATH.'/wp-load.php' );
	
	
	function test_add_my_stylesheet()
		{
			//wp_register_style( 'my-style1', '/wp-content/themes/gridz/style.css' );
			//wp_enqueue_style('my-style1');
			//wp_register_style( 'ab-libvote12', '/wp-content/plugins/ZapcomPost/css/ab_library.css' );
			wp_register_style( 'test-admin-style', plugins_url( 'ZapcomPost/css/ab_library.css', __FILE__ ) );
			//wp_enqueue_style('ab-libvote12');
			wp_enqueue_style( 'test-admin-style' );
			//wp_register_style( 'my-stylevote', '/wp-content/plugins/votemanagement/css/custom.css' );
			//wp_enqueue_style('my-stylevote');
			wp_enqueue_script('myscriptvote1', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', array('scriptaculous') );
			wp_enqueue_script('myscriptvote11', 'http://code.jquery.com/jquery-1.8.3.min.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote', '/wp-content/plugins/product/js/custom_vote.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote3', '/wp-content/plugins/testmonial/js/ab_library.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote4', '/wp-content/plugins/testmonial/js/ajax-methord.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote4', '/wp-content/plugins/testmonial/js/validation.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote4', '/wp-content/plugins/testmonial/js/cartrelated.js', array('scriptaculous') );
 			//wp_enqueue_script('myscriptvote5', '/wp-content/plugins/testmonial/js/jscolor.js', array('scriptaculous') );			
		}
	add_action('init', 'test_add_my_stylesheet');
	
	function Post_Management()
		{              // title,name,role,id,fucntion()
		
		add_menu_page('ZapcomPost','ZapcomPost','administrator','Zapcom_Post','PostManagement');
		add_submenu_page('Zapcom_Post','Post Page','Post Page','administrator','Zapcom','PostPage');
		add_submenu_page('Zapcom_Post','Add New','Add New ','administrator','add_new','AddNew');
		//add_submenu_page('Form_Book','','What we do','administrator','what_we_do','WhatWeDo');		
		//add_submenu_page('Form_Book','','','administrator','add_model','AddModel');
		//add_submenu_page('Form_Book','Manage Model','Manage Model','administrator','manage_model','ManageModel');
		//add_submenu_page('Form_Book','','','administrator','edit_model','EditModel');               
		//add_submenu_page('Form_Book','User Login','User Login','administrator','user_login','LoginForm');
		}
	add_action('admin_menu', 'Post_Management');
	function PostManagement()
	{
		
	}
	function PostPage()
		{
		include(plugin_dir_path(__FILE__) ."includes/Zapcom.php");
		}
	function AddNew()
		{
		include(plugin_dir_path(__FILE__) ."includes/add_new.php");
		}
		
	/*function WhatWeDo()
		{
		include(plugin_dir_path(__FILE__) ."includes/what_we_do.php");
		}		
		
		function AddModel()
		{
		include(plugin_dir_path(__FILE__) ."includes/add_model.php");

		}*/
		//function ManageModel()
		//{
		//include(plugin_dir_path(__FILE__) ."includes/manage_model.php");


		//}
		//function EditModel()
		//{
		//include(plugin_dir_path(__FILE__) ."includes/edit_model.php");


		//}
		//function LoginForm()
		//{
		//include(plugin_dir_path(__FILE__) ."includes/user_login.php");


		//}
		add_shortcode('WhoWeAre', 'WhoWeAre');
		add_shortcode('AddModel', 'AddModel');
		//add_shortcode('EditModel', 'EditModel');
		//add_shortcode('LoginForm', 'LoginForm');
		
?>