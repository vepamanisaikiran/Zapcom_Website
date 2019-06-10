<?php
 /*
 Template Name:   Inquery Form
 */
 ?>
  <style>
.yourModalClass {
  background-color: #e95546;
  border: 1px solid #fc6d58;
  padding: 0 1.5em 1em;
  border-radius: 5px;
  max-width: 380px;
  color:#fff;
}
.yourModalClass a {
  color:#fff;
}
</style>
<link rel="stylesheet" href="css/modality.min.css">
<script src="js/modality.min.js"></script>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
   

   <div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<h1>Modality jQuery PluginExample</h1>
<!-- The trigger to open the modal --> 
<a href="">Open Modal</a> 

<!-- Your Modal, style it however you will! -->
<div id="add_booking" class="yourModalClass" style="display:none;">
      <h2>Modality</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mauris risus, consectetur in ante sit amet, viverra viverra lacus. Nunc a fermentum neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt vehicula lacus id porttitor. Integer vel tristique erat, vel ultricies quam. </p>
      <a href="add_booking">Close Modal</a> </div>
</main></div>
<!-- jQuery-Only:  --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/modality.jquery.min.js"></script> 
<script>
    $('#yourModalId').modality({
        effect: 'slide-up'
    });
    </script> 