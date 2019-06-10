<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<link rel="stylesheet" href="http://wpdemo.superbcart.com/magnum-honda/wp-content/plugins/ZapcomCareer/css/inside.css">
   <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>				 			
	
<h1>Position Name</h1>
<div>
<table width="100%" border="1">
  <tr>
    <th scope="row">Position Name&nbsp;</th>
    <td>Desination Name&nbsp;</td>
    
  </tr>
  <?php
  $crt_sql = mysql_query("select * from wp_career_position");
  while($crt_info = mysql_fetch_array($crt_sql))
  {
  
  ?>  <tr>
    <th scope="row"><?php echo $crt_info['position_name']; ?>&nbsp;</th>
    <td><?php echo $crt_info['desination_name']; ?>&nbsp;</td>
  </tr>
  <?php 
}
?>
</table>

</div>

<form action="" method="post" name="frm">
<table width="100%" border="0">
  <tr>
    <th width="50%" scope="row">Position Name</th>
    <td width="50%"><label for="position_name"></label>
      <select name="position_name" id="position_name">
        <option value="Marketing">Marketing</option>
        <option value="Marketing1">Marketing</option>
        <option value="Design">Design</option>
        <option value="Analyst">Analyst</option>
        <option value="Finance &amp; office">Administrator </option>
        <option value="Development">Development</option>
        <option value="Projects">Projects</option>
      </select></td>
  </tr>
  <tr>
    <th scope="row">Designation Name</th>
    <td><label for="designation_name"></label>
      <input type="text" name="designation_name" id="designation_name"></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><input type="submit" name="Submit" id="Submit" value="Submit"></td>
  </tr>
</table>
</form>

<?php
global $wpdb;
if (isset($_POST['Submit'])){
	$position_name=$_POST['position_name'];
	$designation_name=$_POST['designation_name'];
	//$sql="INSERT INTO `wp_career_position`(`cpid`, `position_name`, `desination_name`) VALUES ('','$position_name','$designation_name')";
	$sql="Update `wp_career_position` set desination_name='$designation_name' where position_name='$position_name' ";
	$wpdb->query($sql);
	//echo $position_name;
	//echo $designation_name;
}
?>
<hr/>
<hr/>

<h1>Job Description</h1>
<table width="100%" border="1">
  <tr>
    <th scope="col">Position Name&nbsp;</th>
    <th scope="col">Designation Name&nbsp;</th>
    <th scope="col">Job Description&nbsp;</th>
    
  </tr>
  <?php
  $crt_sql = mysql_query("select * from wp_career_job_description");
  while($car_info = mysql_fetch_array($crt_sql))
  {
  
  ?>
  <tr>
    <td><?php echo $car_info['position_name']; ?>&nbsp;</td>
    <td><?php echo $car_info['desination_name']; ?>&nbsp;</td>
    <td><?php echo $car_info['job_description']; ?>&nbsp;</td>
  </tr>
  <?php 
  }
  ?>
  
</table>
<hr/>
<div><form action="" method="post" name="frm">
<table width="100%" border="0">
  <tr>
    <th width="50%" scope="row">Position Name</th>
    <td width="50%"><label for="position_name"></label>
      <select name="position_name" id="position_name">
        <option value="Marketing">Marketing</option>
        <option value="Design">Design</option>
        <option value="Analyst">Analyst</option>
        <option value="Administrator">Administrator</option>
        <option value="Development">Development</option>
        <option value="Projects">Projects</option>
      </select></td>
  </tr>
  <tr>
    <th scope="row">Designation Name</th>
    <td><label for="designation_name"></label>
    <select name="designation_name">
    <?php
  $crt_sql = mysql_query("select * from wp_career_job_description");
  while($crt_info = mysql_fetch_array($crt_sql))
  {
  
  ?>
  <option value="<?php echo $crt_info['desination_name']; ?>"><?php echo $crt_info['desination_name']; ?></option>
  <?php }?>
    
    
    
    </select>
      </td>
  </tr>
  <tr>
    <th scope="row">Job Description&nbsp;</th>
    <td><textarea name="job_description" cols="45" rows="6"></textarea></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><input type="submit" name="Submit" id="Submit" value="Submit"></td>
  </tr>
</table>
</form>

<?php
global $wpdb;
if (isset($_POST['Submit'])){
	$position_name=$_POST['position_name'];
	$designation_name=$_POST['designation_name'];
	$job_description=$_POST['job_description'];
	//$sql="INSERT INTO `wp_career_job_description` ( `cjid` , `position_name` , `desination_name` , `job_description` )VALUES ('', '$position_name', '$designation_name', '$job_description')";
	$sql="Update `wp_career_job_description` set job_description='$job_description' where position_name='$position_name' And desination_name='$designation_name' ";
	$wpdb->query($sql);
	/*echo $position_name;    
	echo $designation_name;
	echo $job_description;*/
	echo'<script type="text/javascript">
				window.location="?page=position";
					</script>';
}
?>
</div>