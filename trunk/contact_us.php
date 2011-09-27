<?php
  require './login_panel/login.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choruslab - Contact Us</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/oodomimagerollover.js"></script>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>

<link rel="stylesheet" type="text/css" href="login_panel/css/slide.css" media="screen" />

<script src="js/jquery-1.6.min.js"></script>
<script src="js/jquery-ui-1.8.16.custom.min.js"></script>

<link rel="stylesheet" href="css/jquery-ui-1.8.16.custom.css">
<link rel="stylesheet" href="css/contact_us.css">
<script src="js/contact_us.js"></script>

<script>
	$(function() {
		$( "#accordion" ).accordion();
	});

</script>

<script src="login_panel/js/slide.js" type="text/javascript"></script>
	<?php echo $script; ?>

<script type="text/javascript">
	function submit_form(value){
		var qname, qemail, qsubject, qmsg, qphoneno;
		qname = $('#name_acc'+value).val();
		qemail = $('#email_acc'+value).val();
		qphoneno = $('#phone_acc'+value).val();
		qmsg = $('#msgContent_acc'+value).val();
	    qmsg = qmsg.replace(' & ', ' and ');

		if(value == 1){
			qsubject = "Quote Request";
		}
		if(value == 2){
			qsubject = "Callback Request";
		}
		if(value == 3){
			qsubject = "Feedback Request";
		}
		if(value == 4){
			qsubject = "Job Request";
		}
		if(value == 5){
			qsubject = "Support Request";
		}
		if(value == 6){
			qsubject = "Hello!";
		}

		var returnVal;
		returnVal = submit_form_js(qname, qemail, qphoneno, qmsg, value);
	
		if(returnVal){
			var datastr ='name=' + qname + '&mail=' + qemail + '&subject=' + qsubject + '&msg=' + qmsg;
			if(value == 1 || value == 2){
				 datastr = datastr + '&phone=' + qphoneno;				
			}

			//maya: this script is to send email using ajax.
			$.ajax({	
					type: "POST",
					url: "contact_send_mail.php",
					data: datastr,
					cache: false,
					success: function(html){
						$('div#div_acc'+value).html('<div><p>Your message was sent. We will get back to you shortly.</p></div>');
					}
			});
		}
	}
</script>

</head>

<body>

<?php
	require './login_panel/login_content.php';
?>

<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="289" height="106" valign="top"><a href="http://www.choruslab.com/"></a><a href="http://www.choruslab.com/"><img src="images/logo.jpg" width="289" height="106" border="0" /></a></td>
    <td valign="top" id="header_area">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
     
      <tr>
        <td align="right" style="padding-top:5px;">
        <table width="100" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td><div style="height:24px;"></div><!--a href="#"><img src="images/post_your_project.png" width="218" height="24" border="0" /></a--></td>
            <td><div style="height:24px;"></div><!--a href="#"><img src="images/login.png" width="78" height="24" border="0" /></a--></td>
          </tr>
        </table></td>
      </tr>
     
      <tr>
        <td><table id="Table_01" width="733" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><a href="index.php"><img src="images/nav_01.png" srcover="images/nav_over_01.png" alt="" width="63" height="69" border="0" /></a></td>
            <td><a href="about.php"><img src="images/nav_02.png" srcover="images/nav_over_02.png" alt="" width="116" height="69" border="0" /></a></td>
            <td><a href="services.php"><img src="images/nav_03.png" srcover="images/nav_over_03.png" alt="" width="124" height="69" border="0" /></a></td>
            <td><a href="portfolio.php"><img src="images/nav_04.png" srcover="images/nav_over_04.png" alt="" width="108" height="69" border="0" /></a></td>
            <td><a href="blog.html"><img src="images/nav_05.png" srcover="images/nav_over_05.png" alt="" width="81" height="69" border="0" /></a></td>
            <td><a href="clients.php"><img src="images/nav_06.png" srcover="images/nav_over_06.png" alt="" width="94" height="69" border="0" /></a></td>
            <td><a href="contact_us.php"><img src="images/nav_07.png" srcover="images/nav_over_07.png" alt="" width="149" height="69" border="0" /></a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" id="header_bg1"><img src="images/header/contact_header.png" width="1013" height="197" /></td>
  </tr>
</table>
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="285" valign="top" style="padding:10px;" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="16%" valign="top" style="padding:5px;"><img src="images/india.jpg" width="57" height="36" /></td>
        <td width="84%" valign="top" style="padding:0px 10px 10px 10px; border-bottom:1px dashed #FFF;">Sourcebits Technologies Pvt. Ltd.<br />
          No. 39, 41, 42<br />
          Salarpuria Infozone<br />
          Electronic City Phase I<br />
          Bangalore 560100<br />
          India</p>
          <div>
            <div>Office : </div>
            <div><span dir="ltr" tabindex="-1"> <span dir="ltr" skypeaction="skype_dropdown" title="Call this phone number in India with Skype: +918040650802"><span skypeaction="skype_dropdown">  </span><span skypeaction="skype_dropdown" title="Skype actions"><span skypeaction="skype_dropdown">      </span>   </span>+91 80 4065 0802     </span> </span><br />
              <span dir="ltr" tabindex="-1"> <span dir="ltr" skypeaction="skype_dropdown" title="Call this phone number in India with Skype: +918040650822"><span skypeaction="skype_dropdown">  </span><span skypeaction="skype_dropdown" title="Skype actions"><span skypeaction="skype_dropdown">      </span>   </span>+91 80 4065 0822     </span> </span><br />
            </div>
            <div></div>
          </div>
          <p>Fax : +91 80 4065 0899<br />
          E-mail : <a href="mailto:contact@sourcebits.com">contact@sourcebits.com</a></p></td>
      </tr>
      <tr>
        <td valign="top" style="padding:20px 5px 5px 5px;;"><img src="images/india.jpg" width="57" height="36" /></td>
        <td style="padding:20px 10px 10px 10px;">Sourcebits Technologies Pvt. Ltd.<br />
No. 39, 41, 42<br />
Salarpuria Infozone<br />
Electronic City Phase I<br />
Bangalore 560100<br />
India
</p>
<div>
  <div>Office : </div>
  <div><span dir="ltr" tabindex="-1"> <span dir="ltr" skypeaction="skype_dropdown" title="Call this phone number in India with Skype: +918040650802"><span skypeaction="skype_dropdown">  </span><span skypeaction="skype_dropdown" title="Skype actions"><span skypeaction="skype_dropdown">      </span>   </span>+91 80 4065 0802     </span> </span><br />
    <span dir="ltr" tabindex="-1"> <span dir="ltr" skypeaction="skype_dropdown" title="Call this phone number in India with Skype: +918040650822"><span skypeaction="skype_dropdown">  </span><span skypeaction="skype_dropdown" title="Skype actions"><span skypeaction="skype_dropdown">      </span>   </span>+91 80 4065 0822     </span> </span><br />
  </div>
  <div></div>
</div>
<p>Fax : +91 80 4065 0899<br />
  E-mail : <a href="mailto:contact@sourcebits.com">contact@sourcebits.com</a></p></td>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="padding:5px;">&nbsp;</td>
        </tr>
    </table></td>
    <td width="739" valign="top" style="padding:10px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" id="white_container">
      <tr>
        <td valign="top" class="title"><h2>Contact Us:</h2></td>
      </tr>
      <tr>
        <td valign="top" style="padding-left:10px;"> Sourcebits is a software development company with offices in Bangalore, India and Atlanta, USA. Our 300+ strong team of dedicated programmers and visual designers spends each day crafting innovative applications for iPhone &amp; iPad, mobile, Mac and the Web. If you’re looking for an industry leading software development company to take care of your next project, look no further. Contact us today. </td>
      </tr>
   
      <tr>
<td>
        <!-- start of accordian -->
        <div id="contact_accordion">
			<div id="accordion">
                <h3><a href="#">Request a quote</a></h3>
                <div id="div_acc1">
                    <label>Name:</label><input type="text" name="name_acc1" id="name_acc1" class="field"/>
                    <label>E-mail:</label><input type="text" name="email_acc1" id="email_acc1" autocorrect="off" autocapitalize="off" class="field"/>
                    <label>Phone Number:</label><input type="text" name="phone_acc1" id="phone_acc1" class="field"/>
                    <label>Message Content:</label><textarea name="msgContent_acc1" id="msgContent_acc1" cols="" rows=""></textarea>

                    <div class="form-post">
                        <input id="btn_reset_acc1" class="reset" name="btn_reset_acc1" type="reset" value="Clear"/>
                        <input class="send" onclick="submit_form(1);" type="submit" name="" value="Submit" />
                    </div>
                </div>
                
                <h3><a href="#">Request a callback</a></h3>
                <div id="div_acc2">
                    <label>Name:</label><input type="text" name="name_acc2" id="name_acc2" class="field"/>
                    <label>E-mail:</label><input type="text" name="email_acc2" id="email_acc2" autocorrect="off" autocapitalize="off" class="field"/>
                    <label>Phone Number:</label><input type="text" name="phone_acc2" id="phone_acc2" class="field"/>
                    <label>Message Content:</label><textarea name="msgContent_acc2" id="msgContent_acc2" cols="" rows=""></textarea>
  
                    <div class="form-post">
                        <input id="btn_reset_acc1" class="reset" name="btn_reset_acc1" type="reset" value="Clear" />
                        <input class="send" onclick="submit_form(2);" type="submit" name="" value="Submit" />
                    </div>
                </div>
                
                <h3><a href="#">Provide feedback</a></h3>
                <div id="div_acc3">
                    <label>Name:</label><input type="text" name="name_acc3" id="name_acc3" class="field"/>
                    <label>E-mail:</label><input type="text" name="email_acc3" id="email_acc3" autocorrect="off" autocapitalize="off" class="field"/>
                    <label>Message Content:</label><textarea name="msgContent_acc3" id="msgContent_acc3" cols="" rows=""></textarea>
                    
                    <div class="form-post">
                        <input id="btn_reset_acc3" class="reset" name="btn_reset_acc3" type="reset" value="Clear" />
                        <input class="send" onclick="submit_form(3);" type="submit" name="" value="Submit" />
                    </div>
                </div>
                
                <h3><a href="#">Apply for a job</a></h3>
                <div id="div_acc4">
                    <label>Name:</label><input type="text" name="name_acc4" id="name_acc4" class="field"/>
                    <label>E-mail:</label><input type="text" name="email_acc4" id="email_acc4" autocorrect="off" autocapitalize="off" class="field"/>
                    <label>Message Content:</label><textarea name="msgContent_acc4" id="msgContent_acc4" cols="" rows=""></textarea>
                    
                    <div class="form-post">
                        <input id="btn_reset_acc4" class="reset" name="btn_reset_acc4" type="reset" value="Clear" />
                        <input class="send" onclick="submit_form(4);" type="submit" name="" value="Submit" />
                    </div>
                </div>
    
                <h3><a href="#">Request support</a></h3>
                <div id="div_acc5">
                    <label>Name:</label><input type="text" name="name_acc5" id="name_acc5" class="field"/>
                    <label>E-mail:</label><input type="text" name="email_acc5" id="email_acc5" autocorrect="off" autocapitalize="off" class="field"/>
                    <label>Message Content:</label><textarea name="msgContent_acc5" id="msgContent_acc5" cols="" rows=""></textarea>
                    
                    <div class="form-post">
                        <input id="btn_reset_acc5" class="reset" name="btn_reset_acc5" type="reset" value="Clear" />
                        <input class="send" onclick="submit_form(5);" type="submit" name="" value="Submit" />
                    </div>
                </div>
    
                <h3><a href="#">Say Hi!</a></h3>
                <div id="div_acc6">
                    <label>Name:</label><input type="text" name="name_acc6" id="name_acc6" class="field"/>
                    <label>E-mail:</label><input type="text" name="email_acc6" id="email_acc6" autocorrect="off" autocapitalize="off" class="field"/>
                    <label>Message Content:</label><textarea name="msgContent_acc6" id="msgContent_acc6" cols="" rows=""></textarea>
                    
                    <div class="form-post">
                        <input id="btn_reset_acc6" class="reset" name="btn_reset_acc6" type="reset" value="Clear" />
                        <input class="send" onclick="submit_form(6);" type="submit" name="" value="Submit" />
                    </div>
                </div>
    
            </div>
		</div>
    <!-- end of accordian -->
    </td>
    
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" bgcolor="#7c8995" style="height:5px;"><img src="images/divider.jpg" width="54" height="5" /></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" bgcolor="#8e9ba7"><table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td style="padding:10px; background-color:#8e9ba7;border-radius:10px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="foot">
          <tr>
            <td> © 2011<a href="http://www.choruslabs.com/">Chorus Labs</a> Pvt Ltd. </td>
            <td align="right"><a href="index.php">Home</a> | <a href="Privacy.html">Privacy Policy</a> | <a href="contact_us.php">Contact Us</a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
