
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$company=$_POST['company'];
$location=$_POST['location'];
$mbl=$_POST['mobile'];
$comment=$_POST['comment'];



require("class.phpmailer.php");


//Third Party
$to=$email;
$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPAuth = true;     // turn on SMTP authentication
$mailer->SMTPSecure = "tls";
$mailer->Host     = "smtp.office365.com";
$mailer->Username = "social@zapcg.com";
$mailer->Password = "Zapcom@123";
$mailer->Port        = 587;
$mailer->From ='social@zapcg.com';
$mailer->FromName ='zapcom'; 
$mailer->IsHTML(true); 
$email_subject="Thank you for your interest";     
$email_body="

<p>Thank you for contacting us and for your interest in our product. We will get back to you soon.<br/><br/>

Regards,<br/>
social@zapcg.com<br/><br/>

ZapCom Solutions Pvt. Ltd.<br/>
9th Floor, Gamma Towers<br/>
Sigma Soft Tech Park, Whitefield<br/>
Bangalore, 560066<br/>
Phone: 91-80-67232300<br/>
email : social@zapcg.com <br/>
www.zapcg.com<br/></p>

";




$mailer->Body =$email_body;
$mailer->Subject =$email_subject;
$mailer->AddAddress($email);
$mailer->Send();


 //Admin
                            
                            $mailer1 = new PHPMailer();
                            $mailer1->IsSMTP();
							$mailer1->SMTPAuth = true;     // turn on SMTP authentication
							$mailer1->SMTPSecure = "tls";
							$mailer1->Host     = "smtp.office365.com";
							$mailer1->Username = "social@zapcg.com";
							$mailer1->Password = "Zapcom@123";
							$mailer1->Port     = 587;
                            $mailer1->From ='social@zapcg.com';
                            $mailer1->FromName =$name; 
                            $mailer1->IsHTML(true);  

$email_subject="CONTACT US  Enquiry from website";     
$email_body="
Dear Admin


Name:$name
Email:$email
Mobile:$mbl
Location:$location
Organisation:$company
Comments:$comment


Regards,<br/>
Webmaster <br/>
www.zapcg.com.";


 $mailer1->Body =nl2br($email_body);
$mailer1->Subject =$email_subject;

//TO
$to_admin="social@zapcg.com";
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