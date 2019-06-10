<?php /*
	Plugin Name: Zapcom Technology
	Description:  Technology Detail Of Zapcom
	Version: 1.0
	Author:Nandini S
	Author URI: www.radicalnetwork.co.in
	License:  free
	*/
	@session_start();
	@include_once( ABSPATH.'/wp-load.php' );
	
	
	function test_technology()
		{
			//wp_register_style( 'my-style1', '/wp-content/themes/gridz/style.css' );
			//wp_enqueue_style('my-style1');
			//wp_register_style( 'ab-libvote12', '/wp-content/plugins/ZapcomPost/css/ab_library.css' );
			wp_register_style( 'test-style1', plugins_url( 'ZapcomPost/css/ab_library.css', __FILE__ ) );
			//wp_enqueue_style('ab-libvote12');
			wp_enqueue_style( 'test-style1' );
			//wp_register_style( 'my-stylevote', '/wp-content/plugins/votemanagement/css/custom.css' );
			//wp_enqueue_style('my-stylevote');
			wp_enqueue_script('myscriptvote11', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', array('scriptaculous') );
			wp_enqueue_script('myscriptvote111', 'http://code.jquery.com/jquery-1.8.3.min.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote', '/wp-content/plugins/product/js/custom_vote.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote3', '/wp-content/plugins/testmonial/js/ab_library.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote4', '/wp-content/plugins/testmonial/js/ajax-methord.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote4', '/wp-content/plugins/testmonial/js/validation.js', array('scriptaculous') );
			//wp_enqueue_script('myscriptvote4', '/wp-content/plugins/testmonial/js/cartrelated.js', array('scriptaculous') );
 			//wp_enqueue_script('myscriptvote5', '/wp-content/plugins/testmonial/js/jscolor.js', array('scriptaculous') );			
		}
	add_action('init', 'test_technology');
	
	function Technology_Management()
		{              // title,name,role,id,fucntion()
		
		add_menu_page('ZapcomTechnology','ZapcomTechnology','administrator','Zapcom_Technology','TechnologyManagement');
		add_submenu_page('Zapcom_Technology','Technology','Technology','administrator','technology','TechnologyPage');
		//add_submenu_page('Zapcom_Career','Edit Post','Edit Post ','administrator','edit_new','EditNew');
		//add_submenu_page('Form_Book','CareerUpdate','CareerUpdate','administrator','career_update','CareerUpdate');		
		//add_submenu_page('Form_Book','','','administrator','add_model','AddModel');
		//add_submenu_page('Form_Book','Manage Model','Manage Model','administrator','manage_model','ManageModel');
		//add_submenu_page('Form_Book','','','administrator','edit_model','EditModel');               
		//add_submenu_page('Form_Book','User Login','User Login','administrator','user_login','LoginForm');
		}
	add_action('admin_menu', 'Technology_Management');
	function TechnologyManagement()
	{
		
	}
	function TechnologyPage()
		{
		include(plugin_dir_path(__FILE__) ."includes/technology.php");
		}
	/*function EditNew()
		{
		include(plugin_dir_path(__FILE__) ."includes/edit_new.php");
		}
		
	function CareerUpdate()
		{
		include(plugin_dir_path(__FILE__) ."includes/career_update.php");
		}		
		
		/*function AddModel()
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