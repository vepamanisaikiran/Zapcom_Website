<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div>
<h1>Feature Detail</h1>
<form action="" method="post" name="tab1">

<table width="100%" border="0">
  <tr>
    <th width="50%" scope="row">Car Model</th>
    <td width="50%"><label for="car_model"></label>
      <select name="car_model" id="car_model">
        <option value="EON">EON</option>
        <option value="Next Gen i10">Next Gen i10</option>
        <option value="Grand i10">Grand i10</option>
        <option value="Elite i20">Elite i20</option>
        <option value="i20 Active">i20 Active</option>
        <option value="Xcent">Xcent</option>
        <option value="4S Fluidic Verna">4S Fluidic Verna</option>
        <option value="Elantra (New)">Elantra (New)</option>
        <option value="Santa Fe">Santa Fe</option>
        <option value="Creata(LANCHED)">Creata(LANCHED)</option>
      </select></td>
  </tr>
  <tr>
    <th scope="row">Body Style</th>
    <td><input type="text" name="body_style" id="body_style" value=""/></td>
  </tr>
  <tr>
    <th scope="row">Engine</th>
    <td><label for="engine"></label>
      <input type="text" name="engine" id="engine" />      <label for="group_detail"></label></td>
  </tr>
  <tr>
    <th scope="row">Transmission</th>
    <td><label for="transmission"></label>
      <input type="text" name="transmission" id="transmission" /></td>
  </tr>
  <tr>
    <th scope="row">Displacement</th>
    <td><label for="displacement"></label>
      <input type="text" name="displacement" id="displacement" /></td>
  </tr>
  <tr>
    <th scope="row">Max Power</th>
    <td><input type="text" name="max_power" id="max_power" /></td>
  </tr>
  <tr>
    <th scope="row">@RPM</th>
    <td><input type="text" name="rpm" id="rpm" /></td>
  </tr>
  <tr>
    <th scope="row">Max Troque</th>
    <td><input type="text" name="max_troque" id="max_troque" /></td>
  </tr>
  <tr>
    <th scope="row">Doors</th>
    <td><input type="text" name="doors" id="doors" /></td>
  </tr>
  <tr>
    <th scope="row">Passengers</th>
    <td><input type="text" name="passenger" id="passenger" /></td>
  </tr>
  <tr>
    <th scope="row">Warrenty</th>
    <td><input type="text" name="warrenty" id="warrenty" /></td>
  </tr>
  <tr>
    <th scope="row"><p>Spare Parts</p>
      <p>Warrenty</p></th>
    <td><input type="text" name="spare_part" id="spare_part" /></td>
  </tr>
  <tr>
    <th scope="row"><p>&nbsp;</p></th>
    <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
  </tr>
</table>
</form>
<?php
global $wpdb;
$car_model=$_POST['car_model'];
$body_style=$_POST['body_style'];
$engine=$_POST['engine'];
$transmission=$_POST['transmission'];
$displacement=$_POST['displacement'];
$max_power=$_POST['max_power'];
$rpm=$_POST['rpm'];
$max_troque=$_POST['max_troque'];
$doors=$_POST['doors'];
$passenger=$_POST['passenger'];
$warrenty=$_POST['warrenty'];
$spare_part=$_POST['spare_part'];
//$sql="UPDATE `wp_tcar_feature` SET body_style='$body_style',engine='$engine',transmission='$transmission',displacement='$displacement',max_power='$max_power',rpm='$rpm',max_troque='$max_troque',doors='$doors',passenger='$passenger',warrenty='$warrenty',spare_part='$spare_part' WHERE id='1' and car_model='$car_model'";
$sql="INSERT INTO `wp_tcar_feature`(`id`, `car_model`, `body_style`, `engine`, `transmission`, `displacement`, `max_power`, `rpm`, `max_troque`, `doors`, `passenger`, `warrenty`, `spare_part`) VALUES ('','$car_model','$body_style','$engine','$transmission','$displacement','$max_power','$rpm','$max_troque','$doors','$passenger','$warrenty','$spare_part') ";
echo $sql;
$wpdb->query($sql);

?>
</div>
<div></div>
</body>
</html>