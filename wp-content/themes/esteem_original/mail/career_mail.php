<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mbl=$_POST['mobile'];
$addr=$_POST['address'];
#$pos=$_POST['help'];
$msg=$_POST['message'];
$job=$_POST['jobpositions'];

/*echo "<script>							
alert('hi');
</script>";

echo "<script>							
alert('".$job."');
</script>";*/

require("class.phpmailer.php");



//Third Party
$to=$email;
$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPAuth = true;     // turn on SMTP authentication
$mailer->SMTPSecure = "tls";
/*$mailer->Host     = "smtp.office365.com";*/
$mailer->Host     = "smtp.gmail.com";
$mailer->Username = "zapcomsolutions@gmail.com";
$mailer->Password = "Zapcg^&*(";
$mailer->Port        = 587;
$mailer->From ='zapcomsolutions@gmail.com';
$mailer->FromName ='zapcom'; 
$mailer->IsHTML(true); 
$email_subject="Thank you for your interest in working with Zapcom";     
$email_body="

<p>Thank you for submitting your resume. We will be in touch.<br/><br/>

Regards,<br/>
Talent Search Team @Zapcom<br/><br/>

ZapCom Solutions Pvt. Ltd.<br/>
9th Floor, Gamma Towers<br/>
Sigma Soft Tech Park, Whitefield<br/>
Bangalore, 560066<br/>
Phone: 91-80-67232300<br/>
email : hr@zapcg.com <br/>
www.zapcg.com<br/></p>


";




$mailer->Body =$email_body;
$mailer->Subject =$email_subject;
$mailer->AddAddress($email);
$mailer->Send();

 //Admin
                            
                            $mailer1 = new PHPMailer();
                            $mailer1->IsSMTP();
                            //$mailer->SMTPSecure ='ssl';
                            /*$mailer1->Host ='mail.mahahost.in:25';
					
                            $mailer1->SMTPAuth =TRUE;
                            $mailer1->Username ='test@mahahost.in';  
                            $mailer1->Password ='test!345'; 
							//$mailer1->setFrom($email, $name); 
                            $mailer1->From ='test@mahahost.in';*/
							$mailer1->SMTPAuth = true;     // turn on SMTP authentication
							$mailer1->SMTPSecure = "tls";
							$mailer1->Host     = "smtp.gmail.com";
							$mailer1->Username = "zapcomsolutions@gmail.com";
							$mailer1->Password = "Zapcg^&*(";
							$mailer1->Port        = 587;
							//$mailer1->setFrom($email, $name); 
                            $mailer1->From ='zapcomsolutions@gmail.com';
                            $mailer1->FromName =$name; 
                            $mailer1->IsHTML(true);  

							$file_to_attach = $_FILES['file']['tmp_name'];
                        $filename=$_FILES['file']['name'];
                        $mailer1->AddAttachment( $file_to_attach , $filename );
$email_subject="Job Application Enquiry from website";     
$email_body="
Dear Team,
 
You have received a resume posted on the Zapcom website.


Name:$name
Email:$email
Mobile:$mbl
Position applied for:$job



Regards,<br/>
Webmaster <br/>
www.zapcg.com.";


 $mailer1->Body =nl2br($email_body);
$mailer1->Subject =$email_subject;

//TO
$to_admin="hr@zapcg.com";
$recipients_to1=explode(",",$to_admin);
foreach($recipients_to1 as $email1)
{
$mailer1->AddAddress($email1);
}


//Cc
//$cc_address="n.balasubramanyam@radical.co.in";
//$cc_address="tanvi.p@radical.co.in";
//$cc_address="cmsbusinesschool@gmail.com";

//$bcc_address="tanvipriya08@gmail.com";



//$mailer1->AddCC($cc_address);

//$mailer1->AddBCC($bcc_address);

if(!$mailer1->Send())
{
echo "Message was not sent<br/ >";
echo "Mailer Error: " . $mailer1->ErrorInfo;
}
else
{ 
echo "<script>							
history.go(-1);	

alert('Thanks For Contacting us,We will get back to you soon!!');
</script>"													;

}

?>