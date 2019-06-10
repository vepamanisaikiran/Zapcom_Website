<html>
<head></head>
<body>
<form   method="post" id="imginsert" enctype="multipart/form-data" name="image_form" action="" >
    <h2>Upload photos and the item you are looking for: </h2>
    <hr style="width: auto; height:auto;" /><br />
    <b>Upload photos :</b><br /><br />
    <table style="color: #003D7A; font-family: 'Lily Script One', helveti;">
    <tr>
	    <td><b>Main&nbsp;Photo:<sup>*</sup></b></td>
        <td><input type="file" id="image" name="image"  accept="image/*" required="true" /> </td>
        <td>(upload main photo for your ad)</td>
    </tr>
    </table>
    <input type="submit" name="submit" id="submit" value="Upload Image"/>
</form>

<?php
/*mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("zapcom") or die(mysql_error());*/
global $wpdb; 
if(isset($_FILES['image']))
    {
         $imagename=basename($_FILES['image']['name']);
         $imag_tmp=$_FILES['image']['tmp_name'];
         $dir='image';
         if(move_uploaded_file($imag_tmp,$dir."/".time().$imagename))
         {
             echo "file uploaded succesfully";
         }
 else {
     echo "file not uploaded succesfully";
 }
 if(is_dir($path)==false)
       {
         mkdir("$path", 0777);
       }
      $ext = pathinfo(time().$imagename, PATHINFO_EXTENSION);
       move_uploaded_file($imag_tmp,"$path/"."Main.".$ext);
       //here Main is name i am giving for image to store in db 
       $imagepath="$path\image".'\\\\'.time().$imagename;
	   /*echo $imagepath;
	   echo $path;*/
       $query="INSERT into photo (`image1`) VALUES('$imagepath')";
       $result=mysql_query($query);
       if($result)
       {
        echo " inserted successfully";
       }
    }

?>