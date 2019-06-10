<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<link rel="stylesheet" href="http://wpdemo.superbcart.com/magnum-honda/wp-content/plugins/ZapcomPost/css/inside.css">
   <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>				 			
<?php
global $wpdb;
?>

				
<div style="text-align:center;"><h1>Add New Post</h1></div>
<hr/>
<div>

		<form action="" method="post" name="frm" enctype="multipart/form-data"><table width="100%" border="0">
  <tr>
    <td><strong>POST NAME</strong>&nbsp;</td></tr>
   <tr> <td><select name="grp_name" class="inp_box">
     <option value="--Select One--" >--Select One--</option>
     <?php 
 global $wpdb;
 $zid=$_POST['cid'];
 $sql = "SELECT * FROM `wp_zapcom_post_edit` where status='Enable' ";
 $sql2=$wpdb->get_results($sql);
 ?>
 <?php
foreach($sql2 as $post_name){
?><option value="<?php echo $post_name ->post_name ?>"><?php echo $post_name ->post_name ?></option><?php } ?>
   </select><?php echo $zid; ?><!--<input name="post_name" id="post_name" type="text" class="inp_box"/>-->&nbsp;</td></tr>
   <tr> <td><strong>POST DETAIL</strong>&nbsp;</td></tr>
    <tr><td><textarea name="post_detail" cols="100" rows="18"></textarea>&nbsp;</td></tr>
    <tr> <td><strong>FEATURE IMAGE</strong>&nbsp;</td></tr>
    <tr><td><input name="image" type="file"></td></tr>
    <tr><td><input name="post_date" id="post_date" type="text" value="<?php $month_first_locales = array("de_DE", "fr_CA"); //add locales where date is formatted like 5 February 2009
$locale = "de_DE";
setlocale(LC_TIME, $locale);
if(in_array($locale, $month_first_locales)){
    echo strftime("%d %B %Y");
}else{
    echo strftime("%B %d, %Y");
} ?>" class="inp_box" readonly="true"/></td></tr>
    <tr><td><input name="submit" type="submit" value="Submit" />&nbsp;</td></tr>
  
</table></form>
<?php
global $wpdb;
if(isset($_POST['submit']))
{
		/*$path='http://wpdemo.superbcart.com/magnum-honda/wp-content/themes/esteem/images/';*/
         $imagename=basename($_FILES['image']['name']);
         $imag_tmp=$_FILES['image']['tmp_name'];
         $dir='post_image';
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
       $imagepath="$path\post_image".'\\\\'.time().$imagename;
/*if(isset($_POST['submit'])){*/
	$post_name=$_POST['grp_name'];
	$post_detail=$_POST['post_detail'];
	$post_date=$_POST['post_date'];
	$zid=$_POST['cid'];
	
	/*echo $post_name;
	echo $post_detail;
	echo $post_date;
	echo $imagepath;
	echo $zid;*/
	//$sql="INSERT INTO `wp_zapcom_post`(`zid`, `post_name`, `post_detail`, `post_image`) VALUES ('','$post_name','$post_detail','$post_date')";
    $sql="UPDATE wp_zapcom_post SET post_detail='$post_detail',post_image='$imagepath',	post_date='$post_date' WHERE post_name='$post_name'";

	$wpdb->query($sql);
	move_uploaded_file($tmp_name1,$path.$name1);
	/*echo'<script type="text/javascript">
				window.location="?page=add_new";
					</script>';*/
 }
?>
</div>
<br/>
<hr/>
<div>
<!--<form action="" method="post" name="frm21">
<table width="100%" border="0">
  <tr>
    <th scope="row">POST NAME</th>
    <td>STATUS</td>
    <td colspan="2"><input name="add" type="submit" value="Add"></td>
    
  </tr>
  <tr>
    <th scope="row"><select name="grp_name" class="inp_box">
     <option value="--Select One--" >--Select One--</option>
     <?php 
 /*global $wpdb;
 $zid=$_POST['cid'];
 $sql = "SELECT * FROM `wp_zapcom_post_edit` where status='Enable' ";
 $sql2=$wpdb->get_results($sql);*/
 ?>
 <?php
/*foreach($sql2 as $post_name){*/
?><option value="<?php /*echo $post_name ->post_name*/ ?>"><?php //echo $post_name ->post_name ?></option><?php //} ?>
   </select>&nbsp;</th>
    <td><select name="status">
      <option value="Enable">Enable</option>
      <option value="Disable">Disable</option>
    </select>&nbsp;</td>
    
  </tr>
</table>

</form>
<?php 

/*if(isset($_POST['submit']))
{
global $wpdb;
$grp_name=$_POST['grp_name'];
$status=$_POST['status'];
$sql="UPDATE wp_whatwedo_section1 SET post_name = '$grp_name' WHERE group_name = '$grp_name' And group_detail='$grp_details'";

}*/
?>-->
</div>
</body></html>