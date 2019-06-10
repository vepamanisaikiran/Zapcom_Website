<?php global $wpdb;
$id=$_REQUEST['id'];
function resizeimage($file,$path,$image_name,$size,$file_type) {

	$uploadedfile = $file;
	//$uploadedfile = $file['tmp_name'];
	// Create an Image from it so we can do the resize
	if($file_type=='jpeg')
	{
		$src = imagecreatefromjpeg($uploadedfile);
	}
	if($file_type=='gif')
	{
		$src = imageCreateFromGif($uploadedfile);
	}
	if($file_type=='png')
	{
		$src = imageCreateFromPng($uploadedfile);
	}
	if($file_type=='bmp')
	{
		$src = imageCreateFromBmp($uploadedfile);
	}
	if($file_type=='doc')
	{
		$src = imageCreateFromBmp($uploadedfile);
	}
	if($file_type=='pdf')
	{
		$src = imageCreateFromBmp($uploadedfile);
	}
		if($file_type=='docx')
	{
		$src = imageCreateFromBmp($uploadedfile);
	}
	// Capture the original size of the uploaded image
	list($width,$height)=getimagesize($uploadedfile);
	 
	// For our purposes, I have resized the image to be
	// 600 pixels wide, and maintain the original aspect
	// ratio. This prevents the image from being "stretched"
	// or "squashed". If you prefer some max width other than
	// 600, simply change the $newwidth variable
	if($size=='M')
	{
		//$newwidth=200;
		// $newheight=($height/$width)*200;
		$newwidth=300;
		$newheight=300;
	}
	if($size=='thumb')
	{
		$newwidth=50;
		$newheight=50;
		$image_name=$image_name;
		 
	}
	if($size=='L')
	{
		//$newwidth=200;
		// $newheight=($height/$width)*200;
		$newwidth=555;
		$newheight=360;
		$image_name=$image_name;
	}
	$tmp=imagecreatetruecolor($newwidth,$newheight);
	 
	// this line actually does the image resizing, copying from the original
	// image into the $tmp image
	imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
	 
	// now write the resized image to disk. I have assumed that you want the
	// resized, uploaded image file to reside in the ./images subdirectory.
	  $filename = $path. $image_name;
	imagejpeg($tmp,$filename,100);
	 
	imagedestroy($src);
	imagedestroy($tmp); // NOTE: PHP will clean up the temp file it created when the request
	 // has completed.
}

?>
<?php
if(isset($_POST['editcategory']))
{
 		
		extract($_REQUEST);
	    $path=ABSPATH.'wp-content/plugins/Tlcmodeling/images/tlcmodlingimage/thumb/';
	 	$name= $_FILES['organization_logo']['name'];
                $filename=explode('.',$name);
                $name=time().'.'.$filename[1];
          
		$type= $_FILES["organization_logo"]["type"];
		//$_FILES["organization_logo"]["size"];
		$tmp_name= $_FILES["organization_logo"]["tmp_name"];
		
		//five paste code
		
		$name1= $_FILES['image1']['name'];
		$filename1=explode('.',$name1);
        $name1=(time()+1).'.'.$filename1[1];
		$type1= $_FILES["image1"]["type"];		
		$tmp_name1= $_FILES["image1"]["tmp_name"];
		////////////////////////////////////////////////////
		$name2= $_FILES['image2']['name'];
		$filename2=explode('.',$name2);
        $name2=(time()+2).'.'.$filename2[1];
		$type2= $_FILES["image2"]["type"];		
		$tmp_name2= $_FILES["image2"]["tmp_name"];
		////////////////////////////////////////////////////
		$name3= $_FILES['image3']['name']; 
		$filename3=explode('.',$name3);
        $name3=(time()+3).'.'.$filename3[1];	
		$type3= $_FILES["image3"]["type"];		
		$tmp_name3= $_FILES["image3"]["tmp_name"];
		////////////////////////////////////////////////////
		$name4= $_FILES['image4']['name']; 
		$filename4=explode('.',$name4);
        $name4=(time()+4).'.'.$filename4[1];	
		$type4= $_FILES["image4"]["type"];		
		$tmp_name4= $_FILES["image4"]["tmp_name"];
          
		////////////////////////////////////////////////////
		$name5= $_FILES['image5']['name']; 
		$filename5=explode('.',$name5);
        $name5=(time()+5).'.'.$filename5[1];	
		$type5= $_FILES["image5"]["type"];		
		$tmp_name5= $_FILES["image5"]["tmp_name"];
        /////////////////////////////////////////////////
        	$resume= $_FILES['resume']['name'];
		$filename6=explode('.',$resume);
        $resume=(time()+6).'.'.$filename6[1];
		$type6= $_FILES["resume"]["type"];		
		$tmp_name6= $_FILES["resume"]["tmp_name"];	
		///////////////////////////////////////////////////////
			
		/*$name= $_FILES['image']['name'];
                $filename=explode('.',$name);
                $name=time().'.'.$filename[1];
          
		$type= $_FILES["image"]["type"];
		//$_FILES["organization_logo"]["size"];
		$tmp_name= $_FILES["image"]["tmp_name"];*/
 $sql="UPDATE wp_become_model SET preferred_username='$preferred_username',email='$email',password='$password',first_name='$first_name',last_name='$last_name',address_1='$address_1',address_2='$address_2',city='$city',state='$state',zip='$zip',country='$country',Home_Work_phone='$Home_Work_phone',mobile='$mobile',website='$website',skype='$skype',gender='$gender',age='$age',ethnicity='$ethnicity',height='$height',weight='$weight',hair_color='$hair_color',eye_color='$eye_color',chest='$chest',bust='$bust',waist='$waist',hips='$hips',shoe='$shoe',dress_suit='$dress_suit',suit_length='$suit_length',organization_logo='$organization_logo',image1='$image1',image2='$image2',image3='$image3',image4='$image4',image5='$image5',resume='$resume' WHERE id='$id' ";
 $wpdb->query($sql);

move_uploaded_file($tmp_name,$path.$name);
move_uploaded_file($tmp_name1,$path.$name1);
move_uploaded_file($tmp_name2,$path.$name2);
move_uploaded_file($tmp_name3,$path.$name3);
move_uploaded_file($tmp_name4,$path.$name4);
move_uploaded_file($tmp_name5,$path.$name5);
move_uploaded_file($tmp_name6,$path.$resume);
	echo'<script type="text/javascript">
				window.location="?page=manage_model";
						</script>';
}
 
   $sqlres="SELECT * FROM wp_become_model WHERE id='8'";
   $result=$wpdb->get_results($sqlres); 
print_r($result);
?>
<html>
<body>
<div id="container"> 
<form enctype="multipart/form-data" action="" method="post" id="modelform" name="modelform">
<table><tr><td width="20%">
<table>
<tr><td><label>Preferred Username*</label><br/>
<input name="preferred_username" type="text" id="preferred_username"  value="<?php echo $result['preferred_username'] ?>"/></td></tr>

<tr><td><label>Email*</label><br/>
<input name="email" type="text" id="email" value="<?=$result->email ?>"/></td></tr>

<tr><td><label>Password*</label><br/>
<input name="password" type="password" id="password" value="<?=$result->password ?>"/></td></tr>
<tr><td><label>First Name*</label><br/>
<input name="first_name" type="text" id="first_name" value="<?=$result->first_name ?>"/></td></tr>

<tr><td><label>Last Name*</label><br/>
<input type="text" id="last_name" name="last_name" value="<?=$result->last_name ?>"/></td></tr>

<tr><td><label>Address 1*</label><br/>
<input type="text" id="address_1" name="address_1" value="<?=$result->address_1 ?>"/></td></tr>
<tr><td><label>Address 2</label><br/>
<input type="text" name="address_2" id="address_2" value="<?=$result->address_2 ?>"/></td></tr>

<tr><td><label>City*</label><br/>
<input type="text" name="city" id="city" value="<?=$result->city ?>"/></td></tr>

<tr><td><label>State*</label><br/>
<select id="state" class="required" name="state" value="<?=$result->state ?>">
    <option value="Alabama">Alabama</option>
    <option value="Alask">Alaska</option>
    <option value="Arizona">Arizona</option>
    <option value="Arkansas">Arkansas</option>
    <option value="California">California</option>
    <option value="Colorado">Colorado</option>
    <option value="Connecticut">Connecticut</option>
    <option value="District of Columbia">District of Columbia</option>
    <option value="Delaware">Delaware</option>
    <option value="Florida">Florida</option>
    <option value="Georgia">Georgia</option>
    <option value="Hawaii">Hawaii</option>
    <option value="Idaho">Idaho</option>
    <option value="Illinois">Illinois</option>
    <option value="Indiana">Indiana</option>
    <option value="Iowa">Iowa</option>
    <option value="Kansas">Kansas</option>
    <option value="Kentucky">Kentucky</option>
    <option value="Louisiana">Louisiana</option>
    <option value="Maine">Maine</option>
    <option value="Maryland">Maryland</option>
    <option value="Massachusetts">Massachusetts</option>
    <option value="Michigan">Michigan</option>
    <option value="Minnesota">Minnesota</option>
    <option value="Mississippi">Mississippi</option>
    <option value="Missouri">Missouri</option>
    <option value="Montana">Montana</option>
    <option value="Nebraska">Nebraska</option>
    <option value="Nevada">Nevada</option>
    <option value="New Hampshire">New Hampshire</option>
    <option value="New Jersey">New Jersey</option>
    <option value="New Mexico">New Mexico</option>
    <option value="New York">New York</option>
    <option value="North Carolina">North Carolina</option>
    <option value="North Dakota">North Dakota</option>
    <option value="Ohio">Ohio</option>
    <option value="Oklahoma">Oklahoma</option>
    <option value="Oregon">Oregon</option>
    <option value="Pennsylvania">Pennsylvania</option>
    <option value="Rhode Island">Rhode Island</option>
    <option value="South Carolina">South Carolina</option>
    <option value="South Dakota">South Dakota</option>
    <option value="Tennessee">Tennessee</option>
    <option value="Texas">Texas</option>
    <option value="Utah">Utah</option>
    <option value="Vermont">Vermont</option>
    <option value="Virginia">Virginia</option>
    <option value="Washington">Washington</option>
    <option value="West Virginia">West Virginia</option>
    <option value="Wisconsin">Wisconsin</option>
    <option value="Wyoming">Wyoming</option>
</select></td></tr>

<tr><td><label>Zip*</label><br/>
<input type="text" name="zip" id="zip" value="<?=$result->zip ?>"/></td></tr>

<tr><td><label>Country</label><br/>
<select id="country" name="country">
    <option selected="selected" value="<?=$result->country ?>">- Only accepting from USA -</option>
    <option value="United States of America">USA</option>
	</select></td></tr>

<tr><td><label>Home/Work Phone</label><br/>
<input type="text" name="Home_Work_phone" id="Home_Work_phone" value="<?=$result->Home_Work_phone ?>"/></td></tr>
<tr><td><label>Mobile*</label><br/>
<input type="text" name="mobile" id="mobile" value="<?=$result->mobile ?>"/></td></tr>

<tr><td><label>Website</label><br/>
<input type="text" name="website" id="website" value="<?=$result->website ?>"/></td></tr>

<tr><td><label>Skype Username</label><br/>
<input type="text" name="skype" id="skype" value="<?=$result->skype ?>"/></td></tr>
</table></td>



<td width="30%"><table>
<tr><td><label>Gender*</label><br/>
<select id="gender" name="gender" value="<?=$result->gender ?>">
    <option value="Female">Female</option>
    <option value="Male">Male</option>
</select></td></tr>

<tr><td><label>Age</label><br/>
<input type="text" name="age" id="age" value="<?=$result->age ?>"/></td></tr>

<tr><td><label>Ethnicity</label><br/>
<input type="text" name="ethnicity" id="ethnicity" value="<?=$result->ethnicity ?>"/><br/></td></tr>
<tr><td><label>height</label><br/>
<select name="height" id="height" value="<?=$result->height ?>">  
<option value="3">3'</option>
    <option value="3'1"">3' 1"</option>
    <option value="3'2"">3' 2"</option>
    <option value="3'3"">3' 3"</option>
    <option value="3'4"">3' 4"</option>
    <option value="3'5"">3' 5"</option>
    <option value="3'6"">3' 6"</option>
    <option value="3'7"">3' 7"</option>
    <option value="3'8"">3' 8"</option>
    <option value="3'9"">3' 9"</option>
    <option value="3'10"">3' 10"</option>
    <option value="3'11"">3' 11"</option>
    <option value="4'">4'</option>
    <option value="4'1"">4' 1"</option>
    <option value="4'1"">4' 2"</option>
    <option value="4'3"">4' 3"</option>
    <option value="4'4"">4' 4"</option>
    <option value="4'5"">4' 5"</option>
    <option value="4'6"">4' 6"</option>
    <option value="4'7"">4' 7"</option>
    <option value="4'8"">4' 8"</option>
    <option value="4'9"">4' 9"</option>
    <option value="4'10"">4' 10"</option>
    <option value="4'11"">4' 11"</option>
    <option value="5'">5'</option>
    <option value="5'1"">5' 1"</option>
    <option value="5'2"">5' 2"</option>
    <option value="5'3"">5' 3"</option>
    <option value="5'4"">5' 4"</option>
    <option value="5'5"">5' 5"</option>
    <option value="5'6"">5' 6"</option>
    <option value="5'7"">5' 7"</option>
    <option value="5'8"">5' 8"</option>
    <option value="5'9"">5' 9"</option>
    <option value="5'10"">5' 10"</option>
    <option value="5'11"">5' 11"</option>
    <option value="6'">6'</option>
    <option value="6'1"">6' 1"</option>
    <option value="6'2"">6' 2"</option>
    <option value="6'3"">6' 3"</option>
    <option value="6'4"">6' 4"</option>
    <option value="6'5"">6' 5"</option>
    <option value="6'6"">6' 6"</option>
    <option value="6'7"">6' 7"</option>
    <option value="6'8"">6' 8"</option>
    <option value="6'9"">6' 9"</option>
    <option value="6'10"">6' 10"</option>
    <option value="6'11"">6' 11"</option>
    <option value="7'">7'</option>
    <option value="7'1"">7' 1"</option>
    <option value="7'2"">7' 2"</option>
    <option value="7'3"">7' 3"</option>
    <option value="7'4"">7' 4"</option>
    <option value="7'5"">7' 5"</option>
    <option value="7'6"">7' 6"</option>
    <option value="7'7"">7' 7"</option>
    <option value="7'8"">7' 8"</option>
    <option value="7'9"">7' 9"</option>
    <option value="7'10"">7' 10"</option>
    <option value="7'11"">7' 11"</option>
    <option value="8'">8'</option>

</select>
</td></tr>

<tr><td><label>Weight</label><br/>
<select id="weight" name="weight" value="<?=$result->weight ?>"><option value="40">40</option>
    <option value="45">45</option>
    <option value="50">50</option>
    <option value="55">55</option>
    <option value="60">60</option>
    <option value="65">65</option>
    <option value="70">70</option>
    <option value="75">75</option>
    <option value="80">80</option>
    <option value="85">85</option>
    <option value="90">90</option>
    <option value="95">95</option>
    <option value="100">100</option>
    <option value="105">105</option>
    <option value="110">110</option>
    <option value="115">115</option>
    <option value="120">120</option>
    <option value="125">125</option>
    <option value="130">130</option>
    <option value="135">135</option>
    <option value="140">140</option>
    <option value="145">145</option>
    <option value="150">150</option>
    <option value="155">155</option>
    <option value="160">160</option>
    <option value="165">165</option>
    <option value="170">170</option>
    <option value="175">175</option>
    <option value="180">180</option>
    <option value="185">185</option>
    <option value="190">190</option>
    <option value="195">195</option>
    <option value="200">200</option>
    <option value="205">205</option>
    <option value="210">210</option>
    <option value="215">215</option>
    <option value="220">220</option>
    <option value="225">225</option>
    <option value="230">230</option>
    <option value="235">235</option>
    <option value="240">240</option>
    <option value="245">245</option>
    <option value="250">250</option>
    <option value="255">255</option>
    <option value="260">260</option>
    <option value="265">265</option>
    <option value="270">270</option>
    <option value="275">275</option>
    <option value="280">280</option>
    <option value="285">285</option>
    <option value="290">290</option>
    <option value="295">295</option>
    <option value="300">300</option>
</select>
</td></tr>

<tr><td><label>Hair Color</label><br/>
<select id="hair_color" name="hair_color" value="<?=$result->hair_color ?>">
    <option value="Black">Black</option>
    <option value="Brown">Brown</option>
    <option value="Blond">Blond</option>
    <option value="Auburn">Auburn</option>
    <option value="Chestnut">Chestnut</option>
    <option value="Red">Red</option>
    <option value="Gray">Gray</option>
    <option value="White">White</option>
</select></td></tr>

<tr><td><label>Eye Color</label><br/>
<select id="eye_color" name="eye_color" value="<?=$result->eye_color ?>"><option value="Amber">Amber</option>
    <option value="Blue">Blue</option>
    <option value="Brown">Brown</option>
    <option value="Gray">Gray</option>
    <option value="Green">Green</option>
    <option value="Hazel">Hazel</option>
    <option value="Red">Red</option>
    <option value="Violet">Violet</option>
</select></td></tr>

<tr><td><label>Chest</label><br/>
<select id="chest" name="chest" value="<?=$result->chest ?>"><option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    <option value="40">40</option>
    <option value="41">41</option>
    <option value="42">42</option>
    <option value="43">43</option>
    <option value="44">44</option>
    <option value="45">45</option>
    <option value="46">46</option>
    <option value="47">47</option>
    <option value="48">48</option>
    <option value="49">49</option>
    <option value="50">50</option>
    <option value="51">51</option>
    <option value="52">52</option>
    <option value="53">53</option>
    <option value="54">54</option>
    <option value="55">55</option>
    <option value="56">56</option>
    <option value="57">57</option>
    <option value="58">58</option>
    <option value="59">59</option>
    <option value="60">60</option>
</select></td></tr>

<tr><td><label>Bust</label><br/>
<select id="bust" name="bust" value="<?=$result->bust ?>"><option value="AA">AA</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="DD">DD</option>
    <option value="F">F</option>
    <option value="G">G</option>
    <option value="H">H</option></select></td></tr>
<tr><td><label>Waist</label><br/>
<select id="waist" name="waist" value="<?=$result->waist ?>">
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    <option value="40">40</option>
    <option value="41">41</option>
    <option value="42">42</option>
    <option value="43">43</option>
    <option value="44">44</option>
    <option value="45">45</option>
    <option value="46">46</option>
    <option value="47">47</option>
    <option value="48">48</option>
    <option value="49">49</option>
    <option value="50">50</option>
    <option value="51">51</option>
    <option value="52">52</option>
    <option value="53">53</option>
    <option value="54">54</option>
    <option value="55">55</option>
    <option value="56">56</option>
    <option value="57">57</option>
    <option value="58">58</option>
    <option value="59">59</option>
    <option value="60">60</option>
</select></td></tr>

<tr><td><label>Hips</label><br/>
<select id="hips" name="hips"><option value="24">24</option>
    <option value="26">26</option>
    <option value="28">28</option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
    <option value="36">36</option>
    <option value="38">38</option>
    <option value="40">40</option>
    <option value="42">42</option>
    <option value="44">44</option>
    <option value="46">46</option>
    <option value="48">48</option>
</select></td></tr>

<tr><td><label>shoe</label><br/>
<select id="shoe" name="shoe" value="<?=$result->shoe ?>">
<option value="1/2">1/2</option>
    <option value="1">1</option>
	<option value="1.5">1.5</option>
    <option value="2">2</option>
	<option value="2.5">2.5</option>
    <option value="3">3</option>
	<option value="3.5">3.5</option>
    <option value="4">4</option>
	<option value="4">4.5</option>
    <option value="5">5</option>
	<option value="5.5">5.5</option>
    <option value="6">6</option>
	<option value="6.5">6.5</option>
    <option value="7">7</option>
	<option value="7.5">7.5</option>
    <option value="8">8</option>
	<option value="8.5">8.5</option>
    <option value="9">9</option>
	<option value="9.5">9.5</option>
    <option value="10">10</option>
	<option value="10.5">10.5</option>
    <option value="11">11</option>
	<option value="11.5">11.5</option>
    <option value="12">12</option>
	<option value="12">12.5</option>
    <option value="13">13</option>
	<option value="13.5">13.5</option>
    <option value="14">14</option>
	<option value="14.5">14.5</option>
    <option value="15">15</option>
	<option value="15.5">15.5</option>
    <option value="16">16</option>
	<option value="16.5">16.5</option>
</select></td></tr>
<tr><td><label>Dress/Suit</label><br/>
<select id="dress_suit" name="dress_suit" value="<?=$result->dress_suit ?>">
<option value="0">0</option>
    <option value="2">2</option>
    <option value="4">4</option>
    <option value="6">6</option>
    <option value="8">8</option>
    <option value="10">10</option>
    <option value="12">12</option>
    <option value="14">14</option>
    <option value="16">16</option>
    <option value="18">18</option>
    <option value="20">20</option>
    <option value="22">22</option>
    <option value="24">24</option>
    <option value="26">26</option>
    <option value="28">28</option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
    <option value="36">36</option>
    <option value="38">38</option>
    <option value="40">40</option>
    <option value="42">42</option>
    <option value="44">44</option>
    <option value="46">46</option>
    <option value="48">48</option>
    <option value="50">50</option>
    <option value="52">52</option>
    <option value="54">54</option>
</select></td></tr>
<tr><td><label>Suit Length</label><br/>
<select id="suit_length" name="suit_length"><option value="S">S</option>
    <option value="R">R</option>
    <option value="L">L</option></select></td></tr>
</table></td>
<td width="10%">
<table>
<tr><td>
<div>New models, please allow up to 48 hours for review of your application. Upon approval, you will receive an email with login information to complete your profile.Please contact modelsubmissions@TLCmodeling.com if you have any questions or comments.</div> 
</td></tr>
<tr>
<td><br/><strong>Photo Submission</strong><hr/></td></tr>
<tr><td><label>Resume<br/>(pdf/doc/docx) </label><br/>
<input type="file" id="resume" name="resume" /></td></tr>
<tr><td><label>Headshot *<br/>(jpg/png/gif) </label><br/>
<input type="file" id="image" name="organization_logo" />
</td></tr>
<tr><td><label>Image<br/>(jpg/png/gif) </label><br/>
<input type="file" id="image1" name="image1" /><br/>
<input type="file" id="image2" name="image2" /><br/>
<input type="file" id="image3" name="image3" /><br/>
<input type="file" id="image4" name="image4" /><br/>
<input type="file" id="image5" name="image5" />
</td>
</tr></table>
</td>
</tr>
</table>
<div style="margin-left: 20px;">
<input type="submit" id="editcategory" name="editcategory" value="Submit"/>
<input type="reset" style="" value="Cancel"/></div>
</form>
</div>
</body>
</html>