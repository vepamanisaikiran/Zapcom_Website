<?php 
global $wpdb;
include (WP_CONTENT_DIR. '/plugins/Tlcmodeling/classes/function.php');
$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);
session_start();
if ($_SESSION['login'] == true) {
wp_redirect( 'http://camarasymas.es/tlcmodeling/', 301 ); exit;
}
else {       
if ( (!isset($_POST['username'])) || (!isset($_POST['password'])) ) {
wp_redirect( 'http://camarasymas.es/tlcmodeling/login', 301 ); exit;
//redirect("http://camarasymas.es/tlcmodeling/login/");
						}
    //$sql = mysql_query("SELECT * FROM wp_become_model WHERE preferred_username ='$username1' AND password = '$password1'");
    //	$numrow = mysql_num_rows($sql);
	$sql=mysql_query("SELECT * FROM wp_become_model WHERE preferred_username ='{$username}' AND password = '{$password}'");
	$numrow = mysql_num_rows($sql);
	//$alls= $wpdb->get_results($sql);
print_r($numrow);	
    if ($numrow != 0) {
        // LOGIN code
       		while ($row = mysql_fetch_assoc($sql)) {
            echo $dbusername = $row['preferred_username'];
            echo $dbpassword = $row['password'];
        }

        // Check to see if username and password match
        if ($username==$dbusername && $password==$dbpassword) {
            echo "You are in";
			wp_redirect( 'http://camarasymas.es/tlcmodeling/login', 301 ); exit;
			//redirect("http://camarasymas.es/tlcmodeling/login/");
        }
        else {
            echo "Sorry $username. Incorrect password!";
			wp_redirect( 'http://camarasymas.es/tlcmodeling/login', 301 ); exit;
			//redirect("http://camarasymas.es/tlcmodeling/login/");
        }
    }
	}?>
<div class="container">
<form action="" id="" method="post">
Username: <input type="text" name="username"/><br>
Password: <input type="password" name="password"/><br/>
<input type="submit" id="submit" name="login" value="Login"/>
</form> 
</div>
