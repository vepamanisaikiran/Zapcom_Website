<div>
<table width="100%" border="2">
  <tr>
    <th scope="col"><strong>Post ID</strong>&nbsp;</th>
    <th scope="col" width="60%"><strong>Post Name</strong>&nbsp;</th>
        <th scope="col" width="60%"><strong>Post Status</strong>&nbsp;</th>

   
    
 
  </tr>
  <?php 
 global $wpdb;
 $sql = "SELECT * FROM `wp_zapcom_post_edit` where status='Enable'";
 $sqll=$wpdb->get_results($sql);
 ?>
 
 <?php 
foreach($sqll as $post){

?><tr>
    <td><?php echo $post ->post_id ?>&nbsp;</td>
    <td><?php echo $post ->post_name ?>&nbsp;</td>
        <td><?php echo $post ->status ?>&nbsp;</td>

    
    
  </tr>


<?php }?>
</table>
</div>
<<hr/>
<div>
<table width="100%" border="2">
  <tr>
    <th scope="col"><strong>Post Name</strong>&nbsp;</th>
    <th scope="col" width="60%"><strong>Post Detail</strong>&nbsp;</th>
    <th scope="col"><strong>Post Image</strong>&nbsp;</th>
    <th scope="col"><strong>Post Date</strong>&nbsp;</th>
 
  </tr>
  <?php 
 global $wpdb;
 $sql = "SELECT * FROM `wp_zapcom_post`";
 $sqll=$wpdb->get_results($sql);
 ?>
 
 <?php 
foreach($sqll as $post_name){

?><tr>
    <td><?php echo $post_name ->post_name ?>&nbsp;</td>
    <td><?php echo $post_name ->post_detail ?>&nbsp;</td>
    <td><img src="<?php echo $post_name ->post_image ?>" height="150px" width="150px" >&nbsp;</td>
    <td><?php echo $post_name ->post_date ?>&nbsp;</td>
    
  </tr>


<?php }?>
</table>
</div>