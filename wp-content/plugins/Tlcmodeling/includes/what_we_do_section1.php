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
    <th scope="col">Group Description&nbsp;</th>
    <th scope="col">Option 1&nbsp;</th>
    <th scope="col">Option 2&nbsp;</th>
    <th scope="col">Option 3&nbsp;</th>
        <th scope="col">Option 4&nbsp;</th>

  </tr>
  
<?php 
global $wpdb;
$sql="select * from wp_whatwedo_section1";
$sqll=$wpdb->get_results($sql);
  //echo $sqll;
  foreach($sqll as $loc_info){
  ?>
    <tr>
    
    <td class="post-title page-title column-title"><?php echo $loc_info->group_name ?></td>
    <td class="post-title page-title column-title"><?php echo $loc_info->group_detail ?></td>
     <td class="post-title page-title column-title"><?php echo $loc_info->group_paragraph ?></td>
    <td class="post-title page-title column-title"><?php echo $loc_info->option1 ?></td>
     <td class="post-title page-title column-title"><?php echo $loc_info->option2 ?></td>
    <td class="post-title page-title column-title"><?php echo $loc_info->option3 ?></td>
        <td class="post-title page-title column-title"><?php echo $loc_info->option4 ?></td>
 <td class="post-title page-title column-title"><?php echo $loc_info->option5 ?></td>
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
global $wpdb;
	$grp_name=$_POST['grp_name'];
	$grp_details=$_POST['grp_details'];
	$grp_descr=$_POST['grp_descr'];
	$opt1=$_POST['opt1'];
	$opt2=$_POST['opt2'];
	$opt3=$_POST['opt3'];
	$opt4=$_POST['opt4'];
	$opt5=$_POST['opt5'];
	$opt6=$_POST['opt6'];
	//$group_detail=$_POST['group_detail'];
	$group_paragraph=$_POST['group_paragraph'];
	echo $grp_name;
	echo $grp_details;
	echo $grp_descr;
$sql="UPDATE wp_whatwedo_section1 SET group_paragraph = '$grp_descr',option1='$opt1',option2='$opt2',option3='$opt3',option4='$opt4',option5='$opt5',option6='$opt6' WHERE group_name = '$grp_name' And group_detail='$grp_details'";
/*echo $sql;	*/
$wpdb->query($sql);
	echo'<script type="text/javascript">
				window.location="?page=what_we_do_section1";
					</script>';    
						}
?>		
<form action="" method="post">
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
        <option value="BUSINESS NEED">BUSINESS NEED</option>
		<option value="HOW WE HELP"> HOW WE HELP</option>
		<!--<option value="LEADERSHIP SPEAK"> LEADERSHIP SPEAK</option>-->
		
    </select>
    <select id="Standing up Start-up Ideas" name="grp_details"  style="display: none;">				 
		<option selected='true' disabled='disabled'>tab 2 list</option>
        <option value="STARTUP ENTREPRENEUR NEED"> STARTUP ENTREPRENEUR NEED</option>
		<option value="HOW WE HELP"> HOW WE HELP</option>
		<!--<option value="LEADERSHIP SPEAK"> LEADERSHIP SPEAK</option>-->
		
		
    </select>
	<select id="Product Engineering Services" name="grp_details"  style="display: none;">				 
		<option selected='true' disabled='disabled'>tab3 list</option>
        <option value="CONTINUE EXPLORING"> CONTINUE EXPLORING</option>
		<option value="HOW WE HELP"> HOW WE HELP</option>
		<!--<option value="LEADERSHIP SPEAK"> LEADERSHIP SPEAK</option>-->
		
    </select>
</td>
<!--<td><input type="text" name="grp_details" id="grp_details" value=""/></td>-->
</tr>
<tr>
<td>Description:</td>
<td><textarea  cols="20" rows="3"  name="grp_descr" id="grp_descr" value=""/></textarea></td>
</tr>
<tr>
<td>option 1:</td>
<td><textarea  cols="20" rows="3" name="opt1" id="opt1" value=""/></textarea></td>
</tr>
<tr>
<td>option 2:</td>
<td><textarea  cols="20" rows="3" name="opt2" id="opt2" value=""/></textarea></td>
</tr>
<tr>
<td>option 3:</td>
<td><textarea  cols="20" rows="3" name="opt3" id="opt3" value=""/></textarea></td>
</tr>
<tr>
<td>option 4:</td>
<td><textarea  cols="20" rows="3" name="opt4" id="opt4" value=""/></textarea></td>
</tr>
<tr>
<td>option 5:</td>
<td><textarea  cols="20" rows="3" name="opt5" id="opt5" value=""/></textarea></td>
</tr>
<tr>
<td>option 6:</td>
<td><textarea  cols="20" rows="3" name="opt6" id="opt6" value=""/></textarea></td>
</tr>
<tr><td> <input type="submit" name="submit" value="submit" /></td></tr>
</table>
</form>
</div>
</body>
</html>