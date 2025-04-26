<?php session_start(); ?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Comserve</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	<meta name="DESCRIPTION" content="Comserve (Acronym for Complete Private Security Services)Comserve is an integrated facility maintenance service provider company,"  />                                                                             
    <meta name="KEYWORDS" content="Housekeeping services,Office boys,Pantry boys,Defensive Drivers Services,Pest Controlling,Carpet cleaning, Upholstery cleaning, Swimming pool cleaning, Over head water tank cleaning Electrical,Plumbing works," />
    <meta name="COPYRIGHT" content="Copyright 2012 comserve.co.in" />
    <meta name="GENERATOR" content="" />
    <meta name="AUTHOR" content="Comserve Pvt Ltd" />
    <meta name="RESOURCE-TYPE" content="DOCUMENT" />
    <meta name="DISTRIBUTION" content="GLOBAL" />
    <meta name="ROBOTS" content="INDEX, FOLLOW" />
    <meta name="REVISIT-AFTER" content="1 DAYS" />
    <meta name="RATING" content="GENERAL" />
    <meta name="RATING" content="GENERAL" />
	<link href="css/comserve.css" rel="stylesheet" type="text/css" />



	<script type="text/javascript">
function dosubmit(form)
{
	String.prototype.trim = function()
	{
	  return this.replace(/^\s+/,'').replace(/\s+$/,'');
	}
	if(form.txtname.value == "") 
	{
		alert("Please Enter your name");
		form.txtname.focus();
		return false;
	}
	if(form.txtemail.value == "")
	{
		alert("Please Enter email address");
		form.txtemail.focus();
		return false;
	}
	
	if(form.txtemail.value != "")
	{
		var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;   
	   //return emailPattern.test(document.contact.txtemail.value);  
		 if(emailPattern.test(form.txtemail.value)){         
			//alert("true");   
		}else{   
			alert("Please Enter valid email address"); 
			return false;
		}
	 
	}
	if(form.txtmobileno.value == "")
	{
		alert("Please Enter Mobile Number");
		form.txtmobileno.focus();
		return false;
	
	}
	
	
	
	if(form.captcha.value == "") 
	{
		alert("Please Enter the Captcha");
		form.captcha.focus();
		return false;
	}
	
	
	
	var captcha=document.getElementById('captcha-form').value;
		
		if(captcha=="")
		{
			alert("Enter the code.");	
			document.getElementById('captcha-form').focus();
			return false;
		}
	
form.submit();
}
</script>





</head>
<body>
    <table width="942" cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="#FFFFFF">
        <tr>
            <td>
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
						<td valign="top" colspan="2">
							<table width="100%" cellpadding="0" cellspacing="0" border="0">
								<tr>
									<td>
                                    <img src="images/logo13.png" width="40%"  style="padding-left:20px;margin-top: 10px; " alt="Logo" />
									</td>
             			       </tr>
							</table>
						</td>
					</tr>
                    <tr>
                        <td valign="top">
                            <div class="menus">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>
                                        <img src="images/seperator.gif" alt="Seperator" style="padding-top: 8px;" /></li>
                                    <li><a href="comserve_about.html">About Us</a></li>
                                    <li>
                                        <img src="images/seperator.gif" alt="Seperator" style="padding-top: 8px;" /></li>
                                    <li><a href="comserve_services.html">Services</a> </li>
                                    <li>
                                        <img src="images/seperator.gif" alt="Seperator" style="padding-top: 8px;" /></li>
                                    <li><a href="comserve_enquiry.html" class="current">Enquiry</a></li>
										<li>
                                        <img src="images/seperator.gif" alt="Seperator" style="padding-top: 8px;" /></li>
                                    <li><a href="comserve_clients.html" >Clients</a></li>
                                    <li>
                                        <img src="images/seperator.gif" alt="Seperator" style="padding-top: 8px;" /></li>
                                    <li><a href="comserve_contactus.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="images/enquiry_banner.jpg" alt="Banner" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5" height="12">
            </td>
        </tr>
        <!-- Middle Part -->
        <tr>
            <td colspan="5" valign="top">
                <table width="100%" cellpadding="6" cellspacing="6" border="0">
                    <tr>
                        <td width="3%">
                            <td colspan="5" valign="top">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td colspan="5" valign="top">
                                            <table width="61%" cellpadding="0" cellspacing="0" border="0">
                                                <!--<tr>
												<td class="services_lh">
												</td>
												<td class="services_hor">
													<img src="images/title_services.jpg"  style="padding-left:10px; padding-top:12px; "alt="Our Services" />
												</td>
												<td  class="services_rh">
												</td>
											</tr>-->
                                                <tr>
                                                    <td class="header-left" colspan="2">
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <!--<table width="100%" cellpadding="0" cellspacing="0" border="0">
																<td style="padding-bottom:10px;"><img src="images/services_icon.gif" />
																</td>
																<td class="services-header-font">OUR SERVICES
																</td>
															</table>-->
                                                            <tr>
                                                                <td width="28%" style="padding-bottom: 15px; padding-left: 30px;">
                                                                    <img src="images/service_star.gif" alt="star" />
                                                                </td>
                                                                <td width="72%" style="padding-bottom: 15px; padding-right: 10px;">
                                                                    <img src="images/services_ico.gif" alt="services" />
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" height="5">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="images/services_img.gif" alt="service" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" height="5">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" valign="top">
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
														 <tr>
                                                            <td>
                                                                <img src="images/spacer.jpg" alt="Spacer" />
                                                            </td>
                                                            <td width="90%" class="services_lh_content">
                                                                <a href="comserve_services.html" class="product">Security Services</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" height="10">
                                                            </td>
                                                        </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="images/spacer.jpg" alt="Spacer" />
                                                                </td>
                                                                <td width="90%" class="services_lh_content">
                                                                    <a href="comserve_services.html" class="product">House Keeping</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" height="10">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="images/spacer.jpg" alt="Spacer" />
                                                                </td>
                                                                <td width="90%" class="services_lh_content">
                                                                    <a href="comserve_services.html" class="product">Office Boy</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" height="10">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="images/spacer.jpg" alt="Spacer" />
                                                                </td>
                                                                <td width="90%" class="services_lh_content">
                                                                    <a href="comserve_services.html" class="product">Pantry Boys</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" height="10">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="images/spacer.jpg" alt="Spacer" />
                                                                </td>
                                                                <td width="90%" class="services_lh_content">
                                                                    <a href="comserve_services.html" class="product">Defensive Drivers</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" height="10">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="images/spacer.jpg" alt="Spacer" />
                                                                </td>
                                                                <td width="90%" class="services_lh_content">
                                                                    <a href="comserve_services.html" class="product">Pest Control</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" height="10">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="images/spacer.jpg" alt="Spacer" />
                                                                </td>
                                                                <td width="90%" class="services_lh_content">
                                                                    <a href="comserve_services.html" class="product">Carpet Shampoo Cleaning</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" height="10">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="images/spacer.jpg" alt="Spacer" />
                                                                </td>
                                                                <td width="90%" class="services_lh_content">
                                                                    <a href="comserve_services.html" class="product">Upholstery cleaning</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" height="10">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="images/spacer.jpg" alt="Spacer" />
                                                                </td>
                                                                <td width="90%" class="services_lh_content">
                                                                    <a href="comserve_services.html" class="product">Swimming pool cleaning</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" height="10">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="images/spacer.jpg" alt="Spacer" />
                                                                </td>
                                                                <td width="90%" class="services_lh_content">
                                                                    <a href="comserve_services.html" class="product">Over head water tank cleaning</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" height="10">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="images/spacer.jpg" alt="Spacer" />
                                                                </td>
                                                                <td width="90%" class="services_lh_content">
                                                                    <a href="comserve_services.html" class="product">Electrical and Plumbing works</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5" height="5">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="2%" valign="top">
                                            <img src="images/dotted_ver.gif" style="padding-left: 5px; padding-right: 6px;" alt="Dotted" />
                                        </td>
                                        <td width="73%" colspan="5" valign="top" class="aboutus">
                                            <table width="630" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td height="30" colspan="2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <img src="images/enquiry-img.gif" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="30" colspan="2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" valign="top">
                                                        <form id="frmenquiry" name="frmenquiry" method="post" action="comserve_enquirycfm.php">
                                                	        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                                <td width="14%" nowrap="nowrap">
                                                                    Name <span class="mandatory">*</span>
                                                                </td>
                                                                <td width="86%">
                                                                    <input type="text" name="txtname" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="22">
                                                                </td>
                                                            </tr>
                                                           
                                                            <tr>
                                                                <td nowrap="nowrap">
                                                                    E - Mail <span class="mandatory">*</span>
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="txtemail" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="22">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap">
                                                                    Mobile No <span class="mandatory">*</span>
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="txtmobileno" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="22">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap">
                                                                    Address
                                                                </td>
                                                                <td>
                                                                    <textarea name="txtaddress" cols="20" rows="3"></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="22">
                                                                </td>
                                                            </tr>
                                                             <tr>
`														  </tr>
														  <tr>
														  	<td colspan="4" valign="top">
																<table width="100%" cellpadding="0" cellspacing="0" border="0">
																	 <tr>
																		<td width="14%" nowrap="nowrap">
																		   Captcha <span class="mandatory">*</span>																		</td>
																		<td width="23%">
																			<input type="text" name="captcha" id="captcha-form" autocomplete="off" />
																			
																	   </td>
																		<td colspan="4">
																			<table width="100%" cellpadding="0" cellspacing="0" border="0">
																				<tr  >
																					<td colspan="4" valign="top">
																						<table width="100%" cellpadding="1" cellspacing="1" border="0">
																							<tr  bgcolor="#F1F3F2">
																								<td width="8%">
																								<img  src="captcha.php" id="captcha"  /><br>
																						      </td>
																								   <td width="5%">
																										<?php 
																										if(isset($_REQUEST['msg']))
																										{
																											
																											?>
																											<script language="javascript">
																												alert("<?php echo $_GET['msg'];	?>");
																												document.location="comserve_enquiry.php";
																											</script>
																									   <?php
																										}
																										?>	
																						      </td>
																								<td colspan="4">
																									<table width="100%" cellpadding="0" cellspacing="0" border="0">
																										   <tr>	
																								<td colspan="4">
																									<table width="70%" cellpadding="0" cellspacing="0" border="0">
																										<tr>
																										<td width="50%" class="change_text">
																												Not Readable
																												 Refresh text
	 																											</td>
																										</tr>
																										<tr>
																											
																											<td width="50%" align="left">
																										<a href="#" onClick="document.getElementById('captcha').src='captcha.php?'+Math.random();
																											document.getElementById('captcha-form').focus();"id="change-image"  class="change_text"> <img src="images/refresh_icon.png" style="padding-left:45px;" alt="Refresh" /></a>																				</td>
																									  </tr>

																									</table>
																								</td>
																							</tr>
																									</table>
																							    </td>	   
																							</tr>
																							
																					  </table>
																					</td>
																				</tr>
																				
																			</table>
																		</td>
																   </tr>
																
																</table>
															</td>
														  </tr>
														   <tr>
														   	<td height="14">
															</td>
														   </tr>
															<tr>
																<td colspan="4">
																	<table width="100%" cellpadding="0" cellspacing="0" border="0">
																		<tr>
																		<td width="15%">
																		</td>
																		<td width="22%">
																			<input name="btnsubmit" type="button" class="submit" onclick="return dosubmit(this.form);"
																				value="Submit" align="middle" />
																		</td>
																		<td width="63%" align="left">
																			<input name="btnsubmit" type="reset" class="submit" value="Cancel" align="middle" />
																		</td>
																	</tr>
																	</table>
																</td>
															</tr>
															</table>
                                                        </form>
                                                    </td>
                                                </tr>
												 <tr>
																   		<td colspan="4" height="14">
																			
																		</td>
																   </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                    </tr>
                    <!-- Middle Part Ends-->
                </table>
            </td>
        </tr>
        <!-- Footet Part -->
        <tr>
            <td valign="top"  class="footer_bg" colspan="5">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>
                            � 2012 Comserve. &nbsp; &nbsp; &nbsp; All rights reserved
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Footet Part -->
    </table>
</body>
</html>
