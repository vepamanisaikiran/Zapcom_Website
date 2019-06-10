<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function display_sel()
{
    var sel_val=document.getElementById('main').value;
    if(sel_val=='Product and IP Building')
    {
        document.getElementById('Product and IP Building').style.display='block';
        document.getElementById('Standing up Start-up Ideas').style.display='none';
		document.getElementById('Product Engineering Services').style.display='none';
    }
    if(sel_val=='Standing up Start-up Ideas')
    {
        document.getElementById('Product and IP Building').style.display='none';
        document.getElementById('Standing up Start-up Ideas').style.display='block';
		document.getElementById('Product Engineering Services').style.display='none';
    }
	if(sel_val=='Product Engineering Services')
    {
        document.getElementById('Product and IP Building').style.display='none';
        document.getElementById('Product Engineering Services').style.display='block';
		document.getElementById('Standing up Start-up Ideas').style.display='none';
    }
}

</script>
</head>
<body>
<!--------Fetch Data --------->
<div>
<table width="100%" border="2">
  <tr>
    
    <th scope="col">Name of Group&nbsp;</th>
    <th scope="col">Detail Of Group&nbsp;</th>
    <th scope="col">Client Image&nbsp;</th>
    <th scope="col">Client Name&nbsp;</th>
    <th scope="col">Client Position&nbsp;</th>
    <th scope="col">Client Testimonial&nbsp;</th>

  </tr>
  
<?php 
global $wpdb;
$sql="select * from wp_whatwedo_section2";
$sqll=$wpdb->get_results($sql);
  //echo $sqll;
  foreach($sqll as $loc_info){
  ?>
    <tr>
    
    <td class="post-title page-title column-title"><?php echo $loc_info->group_name ?></td>
    <td class="post-title page-title column-title"><?php echo $loc_info->group_detail ?></td>
     <td class="post-title page-title column-title"><img src="<?php echo $loc_info->client_image ?>" height="150px" width="150px" ></td>
    <td class="post-title page-title column-title"><?php echo $loc_info->client_name ?></td>
     <td class="post-title page-title column-title"><?php echo $loc_info->client_position ?></td>
    <td class="post-title page-title column-title"><?php echo $loc_info->testimonial ?></td>
        <!--<td class="post-title page-title column-title"><?php echo $loc_info->option4 ?></td>-->

  </tr>
  <?php 
  }
  ?>
  </table>
</div>
<div>
<?php

if(isset($_POST['submit']))
{
		/*$path='http://wpdemo.superbcart.com/magnum-honda/wp-content/themes/esteem/images/';*/
         $imagename=basename($_FILES['image']['name']);
         $imag_tmp=$_FILES['image']['tmp_name'];
         $dir='Leader_speak';
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
       $imagepath="$path\Leader_speak".'\\\\'.time().$imagename;
	   
	/*   $path='http://wpdemo.superbcart.com/magnum-honda/wp-content/themes/esteem/images/';
            $filename = $_FILES['trans_file']['name'];
            $fn=explode('.',$filename);
            $source = $_FILES['trans_file']['tmp_name'];
            
            if(is_dir($path)==false)
            {
                mkdir($path, 0777,true);
            }
            $ext=pathinfo($filename, PATHINFO_EXTENSION);
            $filename=time().'_'.$fn[0].'.'.$ext;
            $target = $path . $filename;
            
            if(move_uploaded_file($source, $target))
            {
                $field=array('OrderID','FileName');
                $value=array($oid,$filename);
                insertQRY('order_translated_attachments',$field,$value);
                $errmsg="Files uploaded successfully";
            }
            else{
                 $errmsg="Sorry! Something went wrong.Cannot upload the files";
            }*/
       
	   
	$grp_name=$_POST['grp_name'];
	$grp_details=$_POST['grp_details'];
	$cname=$_POST['cname'];
	$cpos=$_POST['cpos'];
	$ctest=$_POST['ctest'];
$sql="UPDATE wp_whatwedo_section2 SET client_image='$imagepath',client_name='$cname',client_position='$cpos',testimonial='$ctest' WHERE group_name = '$grp_name' And group_detail='$grp_details'";
/*echo $sql;	*/
$wpdb->query($sql);
move_uploaded_file($tmp_name1,$path.$name1);
	echo'<script type="text/javascript">
				window.location="?page=what_we_do_section2";
					</script>';    
	}
?>		
<form action="" method="post" enctype="multipart/form-data" >
<table>
<tr>
<td>Name of the group:</td>
<td>
<select id="main" name="grp_name" onChange="display_sel()">
<option value="">--select one--</option>	
		<option value="Product and IP Building">Product and IP Building</option>
        <option value="Standing up Start-up Ideas">Standing up Start-up Ideas</option>
		<option value="Product Engineering Services">Product Engineering Services</option>
    </select>
</td>
<!--<td><input type="text" name="grp_name" id="grp_name" value=""/></td>-->
</tr>
<tr>
<td>Details of group:</td>
<td><select id="Product and IP Building" name="grp_details"  style="display: none;">				 
		<option selected='true' disabled='disabled' >tab1 list </option>
        <!--<option value="BUSINESS CHALLENGES">BUSINESS CHALLENGES</option>
		<option value="HOW WE HELP"> HOW WE HELP</option>-->
		<option value="LEADERSHIP SPEAK"> LEADERSHIP SPEAK</option>
		
    </select>
    <select id="Standing up Start-up Ideas" name="grp_details"  style="display: none;">				 
		<option selected='true' disabled='disabled'>tab 2 list</option>
        <!--<option value="STARTUP ENTREPRENEUR CHALLENGES"> STARTUP ENTREPRENEUR CHALLENGES</option>
		<option value="HOW WE HELP"> HOW WE HELP</option>-->
		<option value="LEADERSHIP SPEAK"> LEADERSHIP SPEAK</option>
		
		
    </select>
	<select id="Product Engineering Services" name="grp_details"  style="display: none;">				 
		<option selected='true' disabled='disabled'>tab3 list</option>
        <!--<option value="CONTINUE EXPLORING"> CONTINUE EXPLORING</option>
		<option value="HOW WE HELP"> HOW WE HELP</option>-->
		<option value="LEADERSHIP SPEAK"> LEADERSHIP SPEAK</option>
		
    </select>
</td>
</tr>
<tr>
<td>Client Image</td>
<td><input type="file" id="image" name="image"></td>
</tr>
<tr>
<td>Client name</td>
<td><input type="text" name="cname" id="cname" /></td>
</tr>
<tr>
<td>Client Position</td>
<td><input type="text" name="cpos" id="cpos" /></td>
</tr>
<tr>
<td>client Testimonial</td>
<td><input type="text" name="ctest" id="ctest" /></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit" /></td>
</tr>
</table>
</form>
<?php

?>
</div>
</body>
</html>