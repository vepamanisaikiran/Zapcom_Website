<?php require_once( ABSPATH . 'wp-config.php' );?>
<?php
global $wpdb;
/**
* Crucial Functions for Application
*
* @package tpc_tutorials
* @file    /includes/functions.inc.php
*
* Redirects to specified page
*
* @param string $page Page to redirect user to
* @return void
*/

function redirect($url) {  

        header("Location: $url"); // Rewrite the header
        exit();
}

/**
* Check login status
*
* @return boolean Login status
*/

function check_login_status() {
// If $_SESSION['logged_in'] is set, return the status
if (isset($_SESSION['logged_in'])) {
    return $_SESSION['logged_in'];
}
    return false;
}






//$query = "SELECT * FROM wp_become_model WHERE id='8'";
//$result=mysql_query($query); 
//print_r($result);
//$row=mysql_fetch_array($result);
//print_r($row);
//function modelProfile(){
//global $wpdb;
//$query = "SELECT * FROM wp_become_model";
//$result=mysql_query($query); 
//$row=mysql_fetch_array($result);
//print_r($row);
  //}
  
//function modelProfile($result){
//global $wpdb;
//$result=mysql_query($query); 
//$row=mysql_fetch_array($result);
  //print_r($result);
   //return $row;
   //}
  
  
  
  
/*
   $row = mysql_fetch_row($result);
//$row = mysql_fetch_row($result);
//$res=$wpdb->query($sql1);
//$results= $wpdb->get_results($sqlres);
print_r ($result);
	if($_FILES['organization_logo']['name']="")
	{
		for($i=0;$i<count($_FILES['organization_logo']['name']);$i++)
		{
			$name=$_FILES['organization_logo']['name'];
			$_FILES['organization_logo']['type'];
			$_FILES['organization_logo']['tmp_name'];
			$_FILES['organization_logo']['size'];
			$path=WP_CONTENT_DIR.'/plugins/Tlcmodeling/images/tlcmodlingimage/thumb/';
			$tmp_name=$_FILES['organization_logo']['tmp_name'];
			echo move_uploaded_file($tmp_name, $path.$name);
		}
	}
	}*/
?>