<html>
<head><script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<link rel="stylesheet" href="http://wpdemo.superbcart.com/magnum-honda/wp-content/plugins/ZapcomCareer/css/inside.css">
   <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script></head>
<body>
<div>
<table width="100%" border="2">
  <tr>
  <th scope="col"><strong>Banner Image</strong>&nbsp;</th>
    <th scope="col"><strong>Group Name</strong>&nbsp;</th>
    <th scope="col" width="60%"><strong>Group Detail</strong>&nbsp;</th>
    
 
  </tr>
  <?php 
 global $wpdb;
 $sql = "SELECT * FROM `wp_career_career_banner`";
 $sqll=$wpdb->get_results($sql);
 ?>
 
 <?php 
foreach($sqll as $post_name){

?><tr>
    <td><img src="<?php echo $post_name ->career_banner ?>" height="150px" width="150px" >&nbsp;</td>

    <td><?php echo $post_name ->group_detail ?>&nbsp;</td>
    <td><?php echo $post_name ->group_paragraph ?>&nbsp;</td>
    
  </tr>


<?php }?>
</table>
</div>
<hr/>
<div>
<form action="" method="post" enctype="multipart/form-data" name="frm"><table width="100%" border="0">
  <tr>
    <th scope="row">Banner Image&nbsp;</th>
    <td><input name="image" type="file" />&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Group Detail&nbsp;</th>
    <td><input name="group_detail" type="text" />&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Group Paragraph&nbsp;</th>
    <td><textarea name="group_paragraph" cols="45" rows="5"></textarea>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><input name="cid" type="hidden" value=" <?php echo $cbid;?>" /><input name="submit" type="submit" value="Update" />&nbsp;</td>
  </tr>
</table></form>
<?php
global $wpdb;
if(isset($_POST['submit']))
{
		/*$path='http://wpdemo.superbcart.com/magnum-honda/wp-content/themes/esteem/images/';*/
         $imagename=basename($_FILES['image']['name']);
         $imag_tmp=$_FILES['image']['tmp_name'];
         $dir='career_banner';
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
       $imagepath="$path\career_banner".'\\\\'.time().$imagename;
/*if(isset($_POST['submit'])){*/
	$post_name=$_POST['group_detail'];
	$post_detail=$_POST['group_paragraph'];
	//$post_date=$_POST['post_date'];
	$zid=$_POST['cid'];
	
	/*echo $post_name;
	echo $post_detail;
	//echo $post_date;
	echo $imagepath;*/
	//echo $zid;
	//$sql="INSERT INTO `wp_career_career_banner`(`cbid`, `career_banner`, `group_detail`, `group_paragraph`) VALUES ('','$imagepath','$post_name','$post_detail')";
    $sql="UPDATE wp_career_career_banner SET career_banner='$imagepath',group_detail='$post_name',group_paragraph='$post_detail' WHERE cbid='1'";
//echo $sql;
	$wpdb->query($sql);
	move_uploaded_file($tmp_name1,$path.$name1);
	echo'<script type="text/javascript">
				window.location="?page=edit_new";
					</script>';
 }
?>
</div>


</body>
</html>