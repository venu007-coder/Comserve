<?php 
$errors = '';
$name = '';
$visitor_email = '';
$phone_number = '';
$user_message = '';

if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$user_message = $_POST['message'];
        $phone_number = $_POST['phone'];
	///------------Do Validations-------------
	if(empty($name)||empty($visitor_email))
	{
		$errors .= "\n Name and Email are required fields. ";	
	}
	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}
	//if(empty($_SESSION['6_letters_code'] ) ||
	 // strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	//{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		//$errors .= "\n The captcha code does not match!";
	//}
	
	if(empty($errors))
	{
                require("class.phpmailer.php");
                $mail = new PHPMailer();
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
                
                $mail->From     = "support@comserve.co.in";
                $mail->FromName = "comserve";
                $mail->Host     = "localhost";
                $mail->Subject  = "Enquiry from a Customer ";
                $body  = "<span class='heading'>Enquiry from a Customer</span><br><br>";
                $body .= "<table width='80%'>
                            <tr class='label'><td>Name</td><td> : </td><td >".$name."</td></tr>
                            <tr class='label'><td >Email ID</td><td class='label'> : </td><td>".$visitor_email."</td></tr>
                            <tr class='label'><td class='label'>Phone</td><td> : </td><td>". $phone_number."</td></tr>
                            <tr class='label'><td class='label'>IP</td><td> : </td><td>". $ip."</td></tr>
                            <tr><td colspan='3'>".$user_message."</td></tr>                                
                         </table><br>" ;
                //$body .= $user_message."<br>".
                $body .= "<br><br>Sincerely, <br>";
                $body .= "Comserve";
                // Plain text body (for mail clients that cannot read HTML)
                $text_body  = "Received an enquiry from a Customer";
                $text_body .= "<span class='label'>Sincerely,</span> \n";
                $text_body .= "<span class='label'>Comserve Support Team</span>";
                $mail->Body    = $body;
                $mail->AltBody = $text_body;
                $mail->AddAddress("support@comserve.co.in","Marketing");
                if(!$mail->Send()) {
                    $name = '';
                    $visitor_email = '';
                    $phone_number = '';
                    $user_message = '';
                    $errors = "An error occured while trying to send your enquiry. Please try again";
                    // Clear all addresses and attachments for next loop
                    $mail->ClearAddresses();
                }else{
                    $name = '';
                    $visitor_email = '';
                    $phone_number = '';
                    $user_message = '';
                    $errors= "Thank you for submitting your enquiry.We will contact you soon at the earliest.";
                }
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
<!-- define some style elements-->
<style>
label,a, body 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}
.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
</style>	
<!-- a helper script for vaidating the form-->
<script language="JavaScript" src="poc/scripts/gen_validatorv31.js" type="text/javascript"></script>	
<?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
<div id='contact_form_errorloc' class='err'></div>
<form method="POST" name="contact_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"> 
    <p>
        <label for='name'>Name: </label><br>
        <input type="text" name="name" value='<?php echo htmlentities($name); ?>'>
    </p>
    <p>
        <label for='email'>Email: </label><br>
        <input type="text" name="email" value='<?php echo htmlentities($visitor_email); ?>'>
    </p>
    <p>
        <label for='email'>Contact Number: </label><br>
        <input type="text" name="phone" value='<?php echo htmlentities($phone_number); ?>'>
    </p>
    <p>
        <label for='message'>Message:</label> <br>
        <textarea name="message" rows=5 cols=25><?php echo htmlentities($user_message); ?></textarea>
    </p>
 <!--   <p>
        <img src="poc/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
        <label for='message'>Enter the code above here :</label><br>
        <input id="6_letters_code" name="6_letters_code" type="text"><br>
        <small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
    </p>-->
    <input type="submit" value="Submit" name='submit'>
</form>
<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();

frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>