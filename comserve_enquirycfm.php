 <style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-repeat: no-repeat; font-family:tahoma, Helvetica, sans-serif;

}
-->
</style>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style1 {color: #990000}
.style2 {color: #567896}
.style3 {font-size: 12px}
-->
</style>

<?php /*?><?php 
require("class.phpmailer.php");
$mail = new PHPMailer();
//$mail->IsSMTP();  
$mail->From     = "support@comserve.co.in";
//$mail->From     = "support@vcidex.com";
$mail->FromName = "Comserve";
//$mail->Host     = "vcidex.net";
//$mail->Host     = "66.180.160.11";
$mail->Host     = "mail()";
$mail->Subject  = "Enquiry from a Customer ";
$body  = "<span class='heading'>Enquiry from a Customer</span><br><br>";
$body .= "<table width='80%'>
				<tr class='label'><td>Name</td><td> : </td><td >".$_POST['txtname']."</td></tr>
				<tr class='label'><td >Address</td><td class='label'> : </td><td>". $_POST['txtaddress']."</td></tr>
				<tr class='label'><td >Email ID</td><td class='label'> : </td><td>". $_POST['txtemail']."</td></tr>
				<tr class='label'><td class='label'>Mobile No</td><td> : </td><td>". $_POST['txtmobileno']."</td></tr>
			</table>" ;
			
$body .= "<br><br>Sincerely, <br>";
$body .= "Comserve";
// Plain text body (for mail clients that cannot read HTML)
$text_body = "Received an enquiry from a Customer.  Please view this mail in HTML format";
$text_body .= "<span class='label'>Sincerely,</span> \n";
$text_body .= "<span class='label'>Comserve Support Team</span>";

$mail->Body    = $body;
$mail->AltBody = $text_body;
//echo $body;
//$mail->AddAddress("sendhil@vcidex.com","Marketing");
//$mail->AddAddress("testingmlbx@gmail.com","Marketing");
$mail->AddAddress("support@comserve.co.in","Marketing");
 ?>
<?php 
if(!$mail->Send()) {
   echo "Mail Not Sent <br>";

// Clear all addresses and attachments for next loop
$mail->ClearAddresses();


}else {
?> 

<script language="javascript">
	alert("Thanks for Your Enquiry.We have received your enquiry and will be contact you at the earliest.")
	document.location="index.html";
</script>


<?php } ?>
<?php */?>

<?php session_start(); ?>
<?php
/** Validate captcha */
if (!empty($_REQUEST['captcha'])) {
    if (empty($_SESSION['captcha']) || trim(strtolower($_REQUEST['captcha'])) != $_SESSION['captcha'])
        $captcha_message = 0;
	else
		$captcha_message = 1;

    $request_captcha = htmlspecialchars($_REQUEST['captcha']);

    unset($_SESSION['captcha']);
}

if(!$captcha_message)
{
?>
<script language="javascript">
	document.location="comserve_enquiry.php?msg=invalid captcha";
</script>
<?php
}
?>






<?php 
require("class.phpmailer.php");
//echo $_POST['txtname']."<br>".$_POST['txtaddress']."<br>".$_POST['txtcity']."<br>".$_POST['txtphone']."<br>".$_POST['txtemail']."<br>".$_POST['txtcomments'];
//exit;
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;  
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = "hr@comserve.co.in";
$mail->Password = "comserve@123";
$mail->From     = "hr@comserve.co.in";
$mail->FromName = "HR";
$mail->Subject  = "Enquiry from a Customer ";
$body  = "<span class='heading'>Enquiry from a Customer</span><br><br>";
$body .= "<table width='80%'>
				<tr class='label'><td>Name</td><td> : </td><td >".$_POST['txtname']."</td></tr>
				<tr class='label'><td >Address</td><td class='label'> : </td><td>". $_POST['txtaddress']."</td></tr>
				<tr class='label'><td >Email ID</td><td class='label'> : </td><td>". $_POST['txtemail']."</td></tr>
				<tr class='label'><td class='label'>Mobile No</td><td> : </td><td>". $_POST['txtmobileno']."</td></tr>
			</table>" ;
$body .= "<br><br>Sincerely, <br>";
$body .= "Comserve";
// Plain text body (for mail clients that cannot read HTML)
$text_body = "Received an enquiry from a Customer.  Please view this mail in HTML format";
$text_body .= "<span class='label'>Sincerely,</span> \n";
$text_body .= "<span class='label'>Comserve Support Team</span>";

$mail->Body    = $body;
$mail->AltBody = $text_body;	
$mail->AddAddress("support@comserve.co.in","Marketing");
//$mail->AddAddress("ravi@vcidex.com","Marketing");


?>

<?php 
if(!$mail->Send()) { ?>
	<script language="javascript">
	alert("Thanks for Your Enquiry.We have received your enquiry and will be contact you at the earliest.")
	document.location="index.html";
</script>

<?php 
	$mail->ClearAddresses();
}else { ?>
	<script language="javascript">
		alert("Thank you for Your Interest.We will get in touch with you soon")
	</script>
<?php } ?> 

<script language="javascript">
	document.location="index.html";
</script><?php





