<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
			 <script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>	
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
   <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>				
<?php
global $wpdb;
?>

				
<html>
<body>
<div style="text-align:center;"><h1>Solution</h1></div>

<div>
<h2>Solution Group Detail</h2>
<table width="100%" border="2">
  <tr>
    
    <th scope="col">Name of Group&nbsp;</th>
    <th scope="col">Detail Of Group&nbsp;</th>
    
   
  </tr>
  
  <?php 
  global $wpdb;
  $sql="SELECT * FROM `wp_solution_group` LIMIT 0, 30 ";
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
<div>
    <h2>UPDATE Solution </h2>
   	<?php
if(isset($_POST['Submit']))
{
global $wpdb;
	$group_name=$_POST['group_name1'];
	$group_detail=$_POST['group_detail'];
	//$group_paragraph=$_POST['group_paragraph'];
	
$sql="UPDATE wp_solution_group SET group_detail = '$group_detail', group_detail = '$group_detail' where sgid='$group_name'";
//echo $sql;
$wpdb->query($sql);
	echo'<script type="text/javascript">
				window.location="?page=solution";
					</script>';	     
						}
?>		
<form action="" method="post" name="frm" id="frm">
<table width="100%" border="0">
  <tr>
    <th scope="row">Name of Group</th>
    <td>
    <select name="group_name1"> <?php 
  global $wpdb;
  $sql="SELECT * FROM `wp_solution_group` LIMIT 0, 30 ";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  foreach($sqll as $loc_info){
  ?>
    <option value="<?php echo $loc_info->sgid ?>"><?php echo $loc_info->group_name ?></option>
      <?php	

$i++;
}
?>
    </select> &nbsp;</td>
   </tr>
  <tr>
    <th scope="row">Detail Of Group&nbsp;</th>
    <td> <textarea name="group_detail" cols="100" rows="3"></textarea>&nbsp;</td>
  </tr>
         
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;
      <input type="submit" name="Submit" id="Submit" value="Submit"></td>
  </tr>
</table>
</form>
 </div>
 <!------------------------Group Tab-->
 <div>
<h2>Explore Data</h2>
<table width="100%" border="2">
  <tr>
    
    <th scope="col">Name of Group&nbsp;</th>
    <th scope="col">Detail Of Tab&nbsp;</th>
    <th scope="col">Detail Of Group&nbsp;</th>
   
  </tr>
  
  <?php 
  global $wpdb;
  $sql="SELECT * FROM `wp_solution_tab`";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  foreach($sqll as $loc_info){
  ?>
  <tr>
    
    <td class="post-title page-title column-title"><?php echo $loc_info->group_name ?></td>
    <td class="post-title page-title column-title"><?php echo $loc_info->tab ?></td>
    <td class="post-title page-title column-title"><?php echo $loc_info->group_paragraph ?></td>
  </tr>
      
   <?php	

$i++;
}
?>
 
</table></div>
 
<div>
    <h2>UPDATE Group Tab </h2>
   	<?php
if(isset($_POST['add']))
{
global $wpdb;
	$group_name1=$_POST['main'];
	$tab_main=$_POST['travel_sel'];
	$hospitality_sel=$_POST['hospitality_sel'];
	$insurance_sel=$_POST['insurance_sel'];
	$lorem_sel=$_POST['lorem_sel'];
	//$group_detail=$_POST['group_detail'];
	$group_paragraph=$_POST['group_paragraph'];
	echo $group_name1;
	echo $tab_main;
	echo $group_paragraph;
$sql="UPDATE wp_solution_tab SET group_paragraph = '$group_paragraph' WHERE tab = '$tab_main' AND group_name = '$group_name1'";
/*echo $sql;	*/
$wpdb->query($sql);
	echo'<script type="text/javascript">
				window.location="?page=solution";
					</script>';    
						}
?>		
<form action="" method="post" name="frm1" id="frm1">
<table width="100%" border="0">
  <tr>
    <th scope="row">Name of Group</th>
    <td>
    <select id="main" name="main" onChange="display_sel()">	
    <option value="" style="display:none;">--select one--</option>
<option value="1">--select one--</option>	
		<option value="Travel">Travel</option>
        <option value="Hospitality">Hospitality</option>
        <option value="Insurance">Insurance</option>
        <option value="Lorem">Lorem </option>
        
       
    </select></td></tr>
  <tr>
    <th scope="row">Name of Tab</th>
    <td>
    <select id="travel_sel" name="travel_sel" onChange="display_sel1()" style="display: ;">				 
		<option value="" >Travel</option>
        <option value="Air"  >Air</option>
		<option value="Cruise"> Cruise</option>
		<option value="Cars"> Cars</option>
		
		
    </select>
    <select id="hospitality_sel" name="hospitality_sel" onChange="display_sel2()" style="display: none;">				 
		<option value="">Hospitality</option>
        <option value="Air"  >Air</option>
		<option value="Cruise"> Cruise</option>
		<option value="Cars"> Cars</option>
		
		
    </select>
      <select id="insurance_sel" name="insurance_sel" onChange="display_sel3()" style="display: none;">				 
		<option value="" >Insurance</option>
        <option value="Air"  >Air</option>
		<option value="Cruise"> Cruise</option>
		<option value="Cars"> Cars</option>
		
		
    </select>
    <select id="lorem_sel" name="lorem_sel" onChange="display_sel4()" style="display: none;">				 
		<option value="">Lorem</option>
        <option value="Air"  >Air</option>
		<option value="Cruise"> Cruise</option>
		<option value="Cars"> Cars</option>
		
		
    </select> &nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Detail Of Group&nbsp;</th>
    <td><textarea name="group_paragraph" cols="100" rows="3"></textarea>&nbsp;</td>
  </tr>
 
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;
      <input type="submit" name="add" id="add" value="Add"></td>
  </tr>
</table>
</form>
 </div>
 
</body>
<script>
function display_sel(){
	var sel_val= document.getElementById('main').value;
	if (sel_val=='Travel'){
	document.getElementById('travel_sel').style.display ='block';
	document.getElementById('hospitality_sel').style.display ='none';
	document.getElementById('insurance_sel').style.display ='none';
	document.getElementById('lorem_sel').style.display ='none';
	}
	if (sel_val=='Hospitality'){
	document.getElementById('travel_sel').style.display ='none';
	document.getElementById('hospitality_sel').style.display ='block';
	document.getElementById('insurance_sel').style.display ='none';
	document.getElementById('lorem_sel').style.display ='none';
	}
	if (sel_val=='Insurance'){
	document.getElementById('travel_sel').style.display ='none';
	document.getElementById('hospitality_sel').style.display ='none';
	document.getElementById('insurance_sel').style.display ='block';
	document.getElementById('lorem_sel').style.display ='none';
	}
	if (sel_val=='Lorem'){
	document.getElementById('travel_sel').style.display ='none';
	document.getElementById('hospitality_sel').style.display ='none';
	document.getElementById('insurance_sel').style.display ='none';
	document.getElementById('lorem_sel').style.display ='block';
	}
	if (sel_val=='1'){
	document.getElementById('travel_sel').style.display ='none';
	document.getElementById('hospitality_sel').style.display ='none';
	document.getElementById('insurance_sel').style.display ='none';
	document.getElementById('lorem_sel').style.display ='none';
	}
	function display_sel1()
{
    
    var sel_val=document.getElementById('petrol_sel').value;
    if(sel_val=='1')
    {}}
}
</script>
</html>
