<?php 
/*
Template Name: Careers Form   
 */?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Careers | Zapcom</title>
 <script type="text/javascript">

if($('#file').val() != '') {            
      $.each($('#file').prop("files"), function(k,v){
          var filename = v['name'];    
          var ext = filename.split('.').pop().toLowerCase();
          if($.inArray(ext, ['pdf','doc','docx']) == -1) {
              alert('Please upload only pdf,doc,docx format files.');
              return false;
          }
      });        
}


</script>   
</head>

<body>
<?php get_header(); ?>

        <section class="banner">
		<div class="banner-img-pos carrer-b"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/careers.jpg" /></div>
<div class="container">
<!--<div class="banner-cnt career-b"> 
  <p>Connect with us, and let us know how we can help </p>
   </div>-->

</div>

</section>
<section class="section-2 sec-cn-form">
  <div class="container cnt-form">
    <form class="form-cnt" form action="<?php bloginfo('template_url'); ?>/mail/career_mail.php" method="post" enctype="multipart/form-data">
      <div class="txt-div"><input type="text" class="txt-form-zp" placeholder="Your Name" required="required" pattern="[a-zA-Z ]+" name="name"> </div>
      <div class="txt-div"><input type="email" class="txt-form-zp" placeholder="Your Email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email"> </div>
      <div class="txt-div"><input type="text" class="txt-form-zp" placeholder="Your Mobile" required="required" pattern="[7-9]{1}[0-9]{9}" name="mobile"> </div>
      <div class="txt-div"><input type="text" class="txt-form-zp" placeholder="Your Address" required="required" name="address"> </div>
	  <div class="txt-div"> Would you like to attach your CV?<input type="file" id="file" placeholder="Upload Your Resume" name="file" class="txt-form-zp" required="required" accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document"></div>
     
      <div class="txt-div full"> <textarea rows="5" type="text" class="txt-form-zp" placeholder="Message" required="required" name="message"  maxlength="250"></textarea> </div>
     
      <div class="txt-div full"> <input type="submit" class="tech-sec4-cnct" value="Send Message" name="submit"> <span>Or, Send us an email directly to info@zapcg.com</span> </div>
      <?php 
	  if(isset($_POST['submit'])){
$sum=$_POST['position'];
//echo $sum;
	  }
?>
       <?php echo "<input type='hidden' value='$sum' name='jobpositions'/>";?>
    </form>
    
  </div>
</section>



<?php get_footer(); ?>
</body>

</html>