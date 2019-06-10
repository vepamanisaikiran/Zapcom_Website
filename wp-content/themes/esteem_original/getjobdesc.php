<?php
   
     
		   if(isset($_POST['position_name']) && isset($_POST['desination_name']))
		   {
			 
			   #echo $_POST['position_name']."____".$_POST['desination_name'];
			   
			   $conn = new mysqli("localhost", "root", "root", "maghonda");
			   
			 	$sql="select * from wp_career_job_description where position_name='".$_POST['position_name']."' and desination_name='".$_POST['desination_name']."'";
			  
			   	$result = $conn->query($sql);

				if ($result->num_rows > 0) 
				{
					
					while($row = $result->fetch_assoc()) 
					{
						echo "<p>".$row["job_description"]."</p>";
					}
				}
			   else
				   echo "no job desc";


		   }
	 
?>