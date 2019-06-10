<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
div#wpfooter {
  display: none !important;
}
</style>
</head>
<body>
<div>
<h1>SNAPSHOTS</h1>
<table width="100%" border="2">
  <tr>
    
    <th scope="col">Name of Group&nbsp;</th>
    <th scope="col">IMAGE1&nbsp;</th>
    <th scope="col">IMAGE2&nbsp;</th>
    <th scope="col">IMAGE3&nbsp;</th>
    <th scope="col">IMAGE4&nbsp;</th>
    <th scope="col">IMAGE5&nbsp;</th>
  

  </tr>
  
<?php 
global $wpdb;
$sql="select * from wp_whoweare_snapshot";
$sqll=$wpdb->get_results($sql);
  //echo $sqll;
  foreach($sqll as $loc_info){
  ?>
    <tr>
    
    <td class="post-title page-title column-title"><?php echo $loc_info->group_name ?></td>
    <td class="post-title page-title column-title"><img src="<?php echo $loc_info->image1 ?>" height="150px" width="150px" ></td>
     <td class="post-title page-title column-title"><img src="<?php echo $loc_info->image2 ?>" height="150px" width="150px" ></td>
    <td class="post-title page-title column-title"><img src="<?php echo $loc_info->image3 ?>" height="150px" width="150px" ></td>
     <td class="post-title page-title column-title"><img src="<?php echo $loc_info->image4 ?>" height="150px" width="150px" ></td>
    <td class="post-title page-title column-title"><img src="<?php echo $loc_info->image5 ?>" height="150px" width="150px" ></td>
	</tr>
  <?php 
  }
  ?>
  </table>
  </div>
  <form enctype="multipart/form-data" action="" method="post" id="modelform" name="modelform">
<table>
<tr><td>GROUP NAME:<input type="text" name="grp_name" value="<?php echo $loc_info->group_name ?>"></td></tr>
<tr><td><label>Upload Image<br/>(jpg/png/gif) </label><br/>
IMAGE1:<input type="file" id="image1" name="image" /><br/>
IMAGE2:<input type="file" id="image2" name="image1" /><br/>
IMAGE3:<input type="file" id="image3" name="image2" /><br/>
IMAGE4:<input type="file" id="image4" name="image3" /><br/>
IMAGE5:<input type="file" id="image5" name="image4" />
</td>
</tr></table>
<input type="submit" name="submit1" id="submit1" value="Upload Image"/>
<input type='hidden' name='id' value="$id">
</form> 
  
<?php
global $wpdb;
if(isset($_FILES['image']))
{
	$id=$_GET['id'];
		$grp_name=$_POST['grp_name'];
         $imagename=basename($_FILES['image']['name']);
         $imag_tmp=$_FILES['image']['tmp_name'];
         $dir='image';
         if(move_uploaded_file($imag_tmp,$dir."/".time().$imagename))
         {
             echo "file uploaded succesfully";
         }
 else {
     echo "file not uploaded succesfully";
 }
 if(is_dir($path)==false)
       {
         mkdir("$path", 0777);
       }
      $ext = pathinfo(time().$imagename, PATHINFO_EXTENSION);
       move_uploaded_file($imag_tmp,"$path/"."Main.".$ext);
       //here Main is name i am giving for image to store in db 
       $imagepath="$path\image".'\\\\'.time().$imagename;
	   
	   
	   //Image1--ending
	   
	   $imagename=basename($_FILES['image1']['name']);
         $imag_tmp=$_FILES['image1']['tmp_name'];
         $dir='image';
         if(move_uploaded_file($imag_tmp,$dir."/".time().$imagename))
         {
             echo "file uploaded succesfully";
         }
 else {
     echo "file not uploaded succesfully";
 }
 if(is_dir($path)==false)
       {
         mkdir("$path", 0777);
       }
      $ext = pathinfo(time().$imagename, PATHINFO_EXTENSION);
       move_uploaded_file($imag_tmp,"$path/"."Main.".$ext);
       //here Main is name i am giving for image to store in db 
       $imagepath1="$path\image".'\\\\'.time().$imagename;
	   
	   
	   //Image2--ending
	   
	   
	   $imagename=basename($_FILES['image2']['name']);
         $imag_tmp=$_FILES['image2']['tmp_name'];
         $dir='image';
         if(move_uploaded_file($imag_tmp,$dir."/".time().$imagename))
         {
             echo "file uploaded succesfully";
         }
 else {
     echo "file not uploaded succesfully";
 }
 if(is_dir($path)==false)
       {
         mkdir("$path", 0777);
       }
      $ext = pathinfo(time().$imagename, PATHINFO_EXTENSION);
       move_uploaded_file($imag_tmp,"$path/"."Main.".$ext);
       //here Main is name i am giving for image to store in db 
       $imagepath2="$path\image".'\\\\'.time().$imagename;
	   
	   
	   //Image3--ending
	   
	   $imagename=basename($_FILES['image3']['name']);
         $imag_tmp=$_FILES['image3']['tmp_name'];
         $dir='image';
         if(move_uploaded_file($imag_tmp,$dir."/".time().$imagename))
         {
             echo "file uploaded succesfully";
         }
 else {
     echo "file not uploaded succesfully";
 }
 if(is_dir($path)==false)
       {
         mkdir("$path", 0777);
       }
      $ext = pathinfo(time().$imagename, PATHINFO_EXTENSION);
       move_uploaded_file($imag_tmp,"$path/"."Main.".$ext);
       //here Main is name i am giving for image to store in db 
       $imagepath3="$path\image".'\\\\'.time().$imagename;
	   
	   
	   //Image4--ending
	   
	   $imagename=basename($_FILES['image4']['name']);
         $imag_tmp=$_FILES['image4']['tmp_name'];
         $dir='image';
         if(move_uploaded_file($imag_tmp,$dir."/".time().$imagename))
         {
             echo "file uploaded succesfully";
         }
 else {
     echo "file not uploaded succesfully";
 }
 if(is_dir($path)==false)
       {
         mkdir("$path", 0777);
       }
      $ext = pathinfo(time().$imagename, PATHINFO_EXTENSION);
       move_uploaded_file($imag_tmp,"$path/"."Main.".$ext);
       //here Main is name i am giving for image to store in db 
       $imagepath4="$path\image".'\\\\'.time().$imagename;
	   
	   
	   //Image5--ending
	   $ids=trim($_POST['id']);
	if(isset($_POST['submit1']))
	{  
$sql="UPDATE wp_whoweare_snapshot SET image1='$imagepath',image2='$imagepath1',image3='$imagepath2',image4='$imagepath3',image5='$imagepath4' WHERE group_name = '$grp_name'";
  $wpdb->query($sql);
  echo'<script type="text/javascript">
				window.location="?page=solution_home";
					</script>';
}
}
?>	
<br><br>

<h1>TEAM MEMBERS</h1>
<h2>ADD NEW MEMBER</h2>
<table width="100%" border="2">
  <tr>
    
    <th scope="col">Name of Group&nbsp;</th>
    <th scope="col">PROFILE PHOTO&nbsp;</th>
	<th scope="col">MEMBER NAME&nbsp;</th>
	<th scope="col">DESIGNATION&nbsp;</th>
	<th scope="col">FACEBOOK&nbsp;</th>
	<th scope="col">TWITTER&nbsp;</th>
	<th scope="col">GOOGLE +&nbsp;</th>
	<th scope="col">LINKED IN&nbsp;</th>
  </tr>
  
<?php 
global $wpdb;
$sql="select * from wp_whoweare_team";
$sqll=$wpdb->get_results($sql);
  //echo $sqll;
  foreach($sqll as $loc_info){
  ?>
    <tr>
    
    <td class="post-title page-title column-title"><?php echo $loc_info->group_name ?></td>
    <td class="post-title page-title column-title"><img src="<?php echo $loc_info->image ?>" height="150px" width="150px" ></td>
     <td class="post-title page-title column-title"><?php echo $loc_info->member_name ?> </td>
    <td class="post-title page-title column-title"><?php echo $loc_info->member_designation ?> </td>
	<td class="post-title page-title column-title"><?php echo $loc_info->facebook ?> </td>
	<td class="post-title page-title column-title"><?php echo $loc_info->twitter ?> </td>
	<td class="post-title page-title column-title"><?php echo $loc_info->google ?> </td>
	<td class="post-title page-title column-title"><?php echo $loc_info->linkedin ?> </td>
	
	</tr>
  <?php 
  }
  ?>
  </table>
  </div>
  <form enctype="multipart/form-data" action="" method="post" id="modelform" name="modelform">
<table>
<tr><td>GROUP NAME:<input type="text" name="grp_name" value="<?php echo $loc_info->group_name ?>" readonly></td></tr>
<tr><td>MEMBER NAME:<input type="text" name="name"/></td></tr>
<tr><td><label>Image<br/>(jpg/png/gif) </label><br/>
PROFILE PHOTO:<input type="file" id="image" name="image" /><br/></tr></td>
<tr><td>MEMBER DESIGNATION:<input type="text" name="designation" /></td></tr>
<tr><td>FACEBOOK ID:<input type="text" name="facebook"/></td></tr>
<tr><td>TWITTER ID:<input type="text" name="twitter" /></td></tr>
<tr><td>GOOGLE ID:<input type="text" name="google" /></td></tr>
<tr><td>LINKEDIN:<input type="text" name="linkedin" /></td></tr>
</table>
<input type="submit" name="submit" id="submit" value="Upload Data"/>
<input type='hidden' name='id' value="$id">
</form> 
  
<?php
global $wpdb;
if(isset($_FILES['image']))
{
	$id=$_GET['id'];
		$grp_name=$_POST['grp_name'];
		$name=$_POST['name'];
		$designation=$_POST['designation'];
		$facebook=$_POST['facebook'];
		$twitter=$_POST['twitter'];
		$google=$_POST['google'];
		$linkedin=$_POST['linkedin'];
		
         $imagename=basename($_FILES['image']['name']);
         $imag_tmp=$_FILES['image']['tmp_name'];
         $dir='image';
         if(move_uploaded_file($imag_tmp,$dir."/".time().$imagename))
         {
             echo "file uploaded succesfully";
         }
 else {
     echo "file not uploaded succesfully";
 }
 if(is_dir($path)==false)
       {
         mkdir("$path", 0777);
       }
      $ext = pathinfo(time().$imagename, PATHINFO_EXTENSION);
       move_uploaded_file($imag_tmp,"$path/"."Main.".$ext);
       //here Main is name i am giving for image to store in db 
       $imagepath="$path\image".'\\\\'.time().$imagename;
	   
	   
	   //Image1--ending
	if(isset($_POST['submit']))
	{  
$sql="INSERT into wp_whoweare_team (`group_name`,`image`,`member_name`,`member_designation`,`facebook`,`twitter`,`google`,`linkedin`) VALUES ('$grp_name','$imagepath','$name','$designation','$facebook','$twitter','$google','$linkedin')";
//$sql="UPDATE wp_whoweare_team SET image1='$imagepath',image2='$imagepath1',image3='$imagepath2',image4='$imagepath3',image5='$imagepath4' WHERE group_name = '$grp_name'";
  $wpdb->query($sql);
  echo'<script type="text/javascript">
				window.location="?page=solution_home";
					</script>';
}
}
?>	
<h2>UPDATE MEMBER</h2>
<form enctype="multipart/form-data" action="" method="post" id="modelform" name="modelform">
<table>
<tr><td>GROUP NAME:<input type="text" name="grp_name" value="<?php echo $loc_info->group_name ?> " readonly></td></tr>
<tr>
							<td><b>Select customer name</b></td>
							<td>
					<select id="id1" name="query">
				 
				<?php 
				global $wpdb;
				$sql = "SELECT member_name FROM wp_whoweare_team";
				$wpdb->query($sql);
				foreach($sqll as $loc_info) {
				$id1=$loc_info->member_name;
				echo "<option>
				$id1
				</option>";

				}

				?> 


				</select>
							</td>
						</tr>
                        <tr><td><label>Image<br/>(jpg/png/gif) </label><br/>
PROFILE PHOTO:<input type="file" id="image" name="image" /><br/></tr></td>
<tr><td>MEMBER DESIGNATION:<input type="text" name="designation" /></td></tr>
<tr><td>FACEBOOK ID:<input type="text" name="facebook"/></td></tr>
<tr><td>TWITTER ID:<input type="text" name="twitter" /></td></tr>
<tr><td>GOOGLE ID:<input type="text" name="google" /></td></tr>
<tr><td>LINKEDIN:<input type="text" name="linkedin" /></td></tr>
<tr><td><input type="hidden" name="sid" value="<?php $loc_info->id ?>"/></td></tr>
</table>
<input type="submit" name="submit1" id="submit1" value="Update Data"/>
</form>

<?php
global $wpdb;
if(isset($_FILES['image']))
{
	$sid=$_POST['sid'];
		$grp_name=$_POST['grp_name'];
		$query = $_POST['query'];
		$query = htmlspecialchars($query);
$query = mysql_real_escape_string($query);
		$designation=$_POST['designation'];
		$facebook=$_POST['facebook'];
		$twitter=$_POST['twitter'];
		$google=$_POST['google'];
		$linkedin=$_POST['linkedin'];
		
         $imagename=basename($_FILES['image']['name']);
         $imag_tmp=$_FILES['image']['tmp_name'];
         $dir='image';
         if(move_uploaded_file($imag_tmp,$dir."/".time().$imagename))
         {
             echo "file uploaded succesfully";
         }
 else {
     echo "file not uploaded succesfully";
 }
 if(is_dir($path)==false)
       {
         mkdir("$path", 0777);
       }
      $ext = pathinfo(time().$imagename, PATHINFO_EXTENSION);
       move_uploaded_file($imag_tmp,"$path/"."Main.".$ext);
       //here Main is name i am giving for image to store in db 
       $imagepath="$path\image".'\\\\'.time().$imagename;
	   
	   
	   //Image1--ending
	if(isset($_POST['submit1']))
	{  
//$sql="INSERT into wp_whoweare_team (`group_name`,`image`,`member_name`,`member_designation`,`facebook`,`twitter`,`google`,`linkedin`) VALUES ('$grp_name','$imagepath','$name','$designation','$facebook','$twitter','$google','$linkedin')";
$sql="UPDATE wp_whoweare_team SET image='$imagepath',member_designation='$designation',facebook='$facebook',twitter='$twitter',google='$google',linkedin='$linkedin' WHERE group_name = '$grp_name' AND member_name='$query'";
  $wpdb->query($sql);
  echo'<script type="text/javascript">
				window.location="?page=meet_member";
					</script>';
}
}
?>	

</body>
</html>