<?php /*
	Plugin Name: Zapcom Detail
	Description:  Form Management
	Version: 1.0
	Author:Tanvi Priya
	Author URI: www.radicalnetwork.co.in
	License:  free
	*/
	@session_start();
	@include_once( ABSPATH.'/wp-load.php' );
	
	
	function registerfile()
		{
			//wp_register_style( 'my-style1', '/wp-content/themes/gridz/style.css' );
			//wp_enqueue_style('my-style1');
			wp_register_style( 'ab-libvote', '/wp-content/plugins/Form/css/ab_library.css' );
			wp_enqueue_style('ab-libvote');
			//wp_register_style( 'my-stylevote', '/wp-content/plugins/votemanagement/css/custom.css' );
			//wp_enqueue_style('my-stylevote');
			wp_enqueue_script('myscriptvote11', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', array('scriptaculous') );
			wp_enqueue_script('myscriptvote11', 'http://code.jquery.com/jquery-1.8.3.min.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote', '/wp-content/plugins/product/js/custom_vote.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote3', '/wp-content/plugins/testmonial/js/ab_library.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote4', '/wp-content/plugins/testmonial/js/ajax-methord.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote4', '/wp-content/plugins/testmonial/js/validation.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote4', '/wp-content/plugins/testmonial/js/cartrelated.js', array('scriptaculous') );
 			//wp_enqueue_script('myscriptvote5', '/wp-content/plugins/testmonial/js/jscolor.js', array('scriptaculous') );			
		}
	add_action('init', 'registerfile');
	
	function Form_Management()
		{              // title,name,role,id,fucntion()
		
		add_menu_page('ZapcomPages','ZapcomPages','administrator','Form_Book','FormManagement');
		add_submenu_page('Form_Book','Home Page','Home Page','administrator','front_home','HomePage');
		//add_submenu_page('Form_Book','Home Banner','Home Banner','administrator','solution_banner','HomeSolutionBanner'); 
		add_submenu_page('Form_Book','Who We Are','Who We Are ','administrator','who_we_are','WhoWeAre');
		add_submenu_page('Form_Book','Meet Member','Meet Member','administrator','meet_member','MeetTeam');		
		add_submenu_page('Form_Book','What We Do Section1','What We Do Section1','administrator','what_we_do_section1','Whatwedosection1');
		add_submenu_page('Form_Book','What We Do Section2','What We Do Section2','administrator','what_we_do_section2','Whatwedosection2');
		add_submenu_page('Form_Book','Solution','Solution','administrator','solution','Solution');
		//add_submenu_page('Form_Book','Test','Test','administrator','solution_home','Test');               
	//add_submenu_page('Form_Book','Banner','Banner','administrator','solution_home','BannerForm');
		}
	add_action('admin_menu', 'Form_Management');
	function FormManagement()
	{
		
		}
	function HomePage()
		{
		include(plugin_dir_path(__FILE__) ."includes/front_home.php");
		}
	function WhoWeAre()
		{
		include(plugin_dir_path(__FILE__) ."includes/who_we_are.php");
		}
		
	function WhatWeDo()
		{
		include(plugin_dir_path(__FILE__) ."includes/what_we_do.php");
		}		
		
		function MeetTeam()
		{
		include(plugin_dir_path(__FILE__) ."includes/meet_member.php");

		}
		function Whatwedosection1()
		{
		include(plugin_dir_path(__FILE__) ."includes/what_we_do_section1.php");


		}
		function Whatwedosection2()
		{
		include(plugin_dir_path(__FILE__) ."includes/what_we_do_section2.php");


		}
		function Solution()
		{
		include(plugin_dir_path(__FILE__) ."includes/solution.php");


		}
		/*function BannerForm()
		{
		include(plugin_dir_path(__FILE__) ."includes/solution_home.php");


		}*/
		//function LoginForm()
		//{
		//include(plugin_dir_path(__FILE__) ."includes/user_login.php");


		//}
		add_shortcode('WhoWeAre', 'WhoWeAre');
		add_shortcode('AddModel', 'AddModel');
		//add_shortcode('EditModel', 'EditModel');
		//add_shortcode('LoginForm', 'LoginForm');
	
?>