<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
			 <script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>					
<?php
global $wpdb;
?>

				
<html>
<body>
<div style="text-align:center;"><h1>WHO WE ARE</h1></div>
<div>
<h2>WHO WE ARE</h2>
<table width="100%" border="2">
  <tr>
    
    <th scope="col">Name of Group&nbsp;</th>
    <th scope="col">Detail Of Group&nbsp;</th>
    
   
  </tr>
  
  <?php 
  global $wpdb;
  $sql="SELECT * FROM `wp_what_we_do` LIMIT 0, 30 ";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  foreach($sqll as $loc_info){
  ?>
  <tr>
    
    <td class="post-title page-title column-title"><?php echo $loc_info->group_name ?></td>
    <td class="post-title page-title column-title"><?php echo $loc_info->group_detail ?></td>
  </tr>
      
   <?php	

$i++;
}
?>
</table></div>
<br/>
    <hr/>
    <div>
    <h2>UPDATE WHO WE ARE </h2>
   	<?php
if(isset($_POST['Submit']))
{
global $wpdb;
	$group_name=$_POST['group_name'];
	$group_detail=$_POST['group_detail'];
	//$group_paragraph=$_POST['group_paragraph'];
	
$sql="UPDATE wp_what_we_do SET group_detail = '$group_detail'";
//echo $sql;
$wpdb->query($sql);
	echo'<script type="text/javascript">
				window.location="?page=who_we_are";
					</script>';	     
						}
?>		
<form action="" method="post" name="frm" id="frm">
<table width="100%" border="0">
  <tr>
    <th scope="row">Name of Group</th>
    <td><input name="group_name" type="text" value="Who we are">&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Detail Of Group&nbsp;</th>
    <td><textarea name="group_detail" cols="20" rows="3"></textarea>&nbsp;</td>
  </tr>
  
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;
      <input type="submit" name="Submit" id="Submit" value="Submit"></td>
  </tr>
</table>
</form>
 </div>
<hr style="color:#000000"/>
<div>
<h2>Explore Data</h2>
<table width="100%" border="2">
  <tr>
    
    <th scope="col">Name of Group&nbsp;</th>
    <th scope="col">Detail Of Group&nbsp;</th>
    
   
  </tr>
  
  <?php 
  global $wpdb;
  $sql="SELECT * FROM `explore`";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  foreach($sqll as $loc_info){
  ?>
  <tr>
    
    <td class="post-title page-title column-title"><?php echo $loc_info->group_name ?></td>
    <td class="post-title page-title column-title"><?php echo $loc_info->group_detail ?></td>
  </tr>
      
   <?php	

$i++;
}
?>
 
</table></div>
<br/>
   <hr/>
<div>
    <h2>UPDATE WHO WE ARE </h2>
   	<?php
if(isset($_POST['add']))
{
global $wpdb;
	$group_name1=$_POST['group_name1'];
	$group_detail=$_POST['group_detail'];
	//$group_paragraph=$_POST['group_paragraph'];
	/*echo $group_name1;
	echo $group_detail;
	echo $group_paragraph;*/
$sql="UPDATE explore SET group_detail = '$group_detail' where wid='$group_name1'";
/*echo $sql;	*/
$wpdb->query($sql);
	echo'<script type="text/javascript">
				window.location="?page=who_we_are";
					</script>';     
						}
?>		
<form action="" method="post" name="frm1" id="frm1">
<table width="100%" border="0">
  <tr>
    <th scope="row">Name of Group</th>
    <td>
    <select name="group_name1"> <?php 
  global $wpdb;
  $sql="SELECT * FROM `explore` LIMIT 0, 30 ";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  foreach($sqll as $loc_info){
  ?>
    <option value="<?php echo $loc_info->wid ?>"><?php echo $loc_info->group_name ?></option>
      <?php	

$i++;
}
?>
    </select> &nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Detail Of Group&nbsp;</th>
    <td><textarea name="group_detail" cols="20" rows="3"></textarea>&nbsp;</td>
  </tr>
 
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;
      <input type="submit" name="add" id="add" value="Add"></td>
  </tr>
</table>
</form>
 </div>

