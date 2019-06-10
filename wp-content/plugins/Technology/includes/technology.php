<html>
<head>
</head>
<body>
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
  $sql="SELECT * FROM `wp_technology_tab`";
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
	$tab_main=$_POST['mobile_sel'];
	/*$hospitality_sel=$_POST['hospitality_sel'];
	$insurance_sel=$_POST['insurance_sel'];
	$lorem_sel=$_POST['lorem_sel'];*/
	//$group_detail=$_POST['group_detail'];
	$group_paragraph=$_POST['group_paragraph'];
	echo $group_name1;
	echo $tab_main;
	echo $group_paragraph;
$sql="UPDATE wp_technology_tab SET group_paragraph = '$group_paragraph' WHERE tab = '$tab_main' AND group_name = '$group_name1'";
/*echo $sql;	*/
$wpdb->query($sql);
	echo'<script type="text/javascript">
				window.location="?page=technology";
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
<option selected="true" disabled="disabled" value="">--select one--</option>	
		<option value="MOBILE">MOBILE</option>
        <option value="WEB">WEB</option>
        <option value="DATA">DATA</option>
        <option value="TOOLS">TOOLS </option>
        
       
    </select></td></tr>
  <tr>
    <th scope="row">Name of Tab</th>
    <td>
    <select id="mobile_sel" name="mobile_sel" onChange="display_sel1()" style="display: ;">				 
		<option selected="true" disabled="disabled" value="" >MOBILE</option>
        <option value="DEVICE/OS">DEVICE/OS</option>
		<option value="CROSS PLATFORM"> CROSS PLATFORM</option>
		<option value="MOBILE WEB">MOBILE WEB</option>
		
		
    </select>
    <select id="web_sel" name="mobile_sel" onChange="display_sel2()" style="display: none;">				 
		<option selected="true" disabled="disabled" value="">WEB</option>
        <option value="PRESENTATION TIER">PRESENTATION TIER </option>
		<option value="PERSISTENCE">PERSISTENCE</option>
		<option value="DATABASES">DATABASES</option>
		<option value="CLOUD">CLOUD</option>
		<option value="INTEGRATION SERVICES">INTEGRATION SERVICES</option>
		<option value="LANGUAGES">LANGUAGES</option>
		
		
    </select>
      <select id="data_sel" name="mobile_sel" onChange="display_sel3()" style="display: none;">				 
		<option selected="true" disabled="disabled" value="" >DATA</option>
        <option value="CONTENT MANAGEMNET">CONTENT MANAGEMNET</option>
		<option value="BIG DATA">BIG DATA</option>
		
		
		
    </select>
    <select id="tool_sel" name="mobile_sel" onChange="display_sel4()" style="display: none;">				 
		<option selected="true" disabled="disabled" value="">TOOLS</option>
        <option value="CONTINUOUS INTEGRATION">CONTINUOUS INTEGRATION</option>
		<option value="BUILD">BUILD</option>
		<option value="SCM">SCM</option>
		<option value="VERIFY SOURCE">VERIFY SOURCE</option>
		<option value="PROJECT MANAGEMNET">PROJECT MANAGEMNET</option>
		
		
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
	if (sel_val=='MOBILE'){
	document.getElementById('mobile_sel').style.display ='block';
	document.getElementById('web_sel').style.display ='none';
	document.getElementById('data_sel').style.display ='none';
	document.getElementById('tool_sel').style.display ='none';
	}
	if (sel_val=='WEB'){
	document.getElementById('mobile_sel').style.display ='none';
	document.getElementById('web_sel').style.display ='block';
	document.getElementById('data_sel').style.display ='none';
	document.getElementById('tool_sel').style.display ='none';
	}
	if (sel_val=='DATA'){
	document.getElementById('mobile_sel').style.display ='none';
	document.getElementById('web_sel').style.display ='none';
	document.getElementById('data_sel').style.display ='block';
	document.getElementById('tool_sel').style.display ='none';
	}
	if (sel_val=='TOOLS'){
	document.getElementById('mobile_sel').style.display ='none';
	document.getElementById('web_sel').style.display ='none';
	document.getElementById('data_sel').style.display ='none';
	document.getElementById('tool_sel').style.display ='block';
	}
}
</script>
</html>
