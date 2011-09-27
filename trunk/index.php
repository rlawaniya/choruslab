<?php
  require './login_panel/login.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choruslab.com</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/oodomimagerollover.js"></script>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<link rel="stylesheet" type="text/css" href="login_panel/css/slide.css" media="screen" />
<script src="login_panel/js/slide.js" type="text/javascript"></script>
	<?php echo $script; ?>
    
<script>

$(document).ready(function() {

	//if mouse over and mouse out
	$('.eff').hover(
	function () {

		value = $(this).find('img').outerHeight() * -1;

		//for left/right if you have different width and height, 
		//commented out because we are using up/down in this example
		//value = $(this).find('img').outerWidth() * -1); 
		
		//animate the image
		// you can change the sliding direction by changing bottom to left, right or top
		// if you changed this, you will have to change the position of the hover out as well
		$(this).find('img').stop().animate({bottom: value} ,{duration:500, easing: 'easeOutBounce'});	
		
	},
	function () {
		
		//reset the image
		// the position property (bottom), it must be same with the on in the mouseover
		$(this).find('img').stop().animate({bottom:0} ,{duration:500, easing: 'easeOutBounce'});	
	
	});
	
	//if user clicked on the thumbnail
	$('.eff').click(function () {	
		//grab and execute the first link in the thumbnail
		window.location = $(this).find('a:first').attr('href');
	});
	
});

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
                <td><div style="height:24px;"></div><!--a href="#"><img src="images/post_your_project.png" width="218" height="24" border="0"/></a--></td>
                <td><div style="height:24px;"></div><!--a href="#"><img src="images/login.png" width="78" height="24" border="0"/></a--></td>
              </tr>
            </table>
        </td>
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
    <td id="header_bg"><img src="images/header/header1.png" width="1024" height="357" /></td>
  </tr>
</table>
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
        <div class="eff">
	<img src="images/design_studio.jpg" alt="Test 1" title="" width="198" height="185" />
	<div class="caption"><a href="http://www.queness.com" class="header">design studio</a><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="test">asd</a></p></div>
</div>
        
        </td>
        <td>
         <div class="eff">
	<img src="images/website_development.jpg" alt="Test 1" title="" width="198" height="185" />
	<div class="caption"><a href="http://www.queness.com" class="header">website development</a><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="test">asd</a></p></div>
</div>
        
        </td>
        <td>
         <div class="eff">
	<img src="images/software_development.jpg" alt="Test 1" title="" width="198" height="185" />
	<div class="caption"><a href="http://www.queness.com" class="header">software development</a><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="test">asd</a></p></div>
</div>
        
        </td>
        <td>
         <div class="eff">
	<img src="images/mobile_development.jpg" alt="Test 1" title="" width="198" height="185" />
	<div class="caption"><a href="http://www.queness.com" class="header">mobile development</a><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="test">asd</a></p></div>
</div>
        
        </td>
        <td>
         <div class="eff">
	<img src="images/online_marketing.jpg" alt="Test 1" title="" width="198" height="185" />
	<div class="caption"><a href="http://www.queness.com" class="header">online marketing</a><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="test">asd</a></p></div>
</div>
        
        </td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1026" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1026" style="padding:10px 0px 10px 0px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" id="white_container">
      <tr>
        <td style=" padding:10px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" >
          <tr>
            <td width="49%" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
              <tr>
                <td style="padding:0px 15px 15px 15px;"><h2>The Digital Design studio that will make you purr </h2>
                  Google, social Networking, Design, EDM Mailers, banners , Websites and more<br />
                  Cat's PAWS When you have to be different to get those eye balls , to your site design or those clicks on your banners you need the mark of the CAT'S PAWS.
                  </p>
                  <p>We are a Multi disciplinary digital agency that offers from high end design for websites, micro sites, banners, mailers and alike visual communications to web application development to data-driven design, all fused into a perfect offering for any business.</p>
                  <p>We work from high profile projects for major corporate to any dream project of SME or individual client, reaching millions of users and helping our clients to both save money and generate revenue.</p>
                  <p>We work from high profile projects for major corporate to any dream project of SME or individual client, reaching millions of users and helping our clients to both save money and generate revenue.</p>
                  <p align="right"><a href="about.php"><strong>Read More&gt;&gt;</strong></a></p></td>
              </tr>
            </table></td>
            <td width="26%">
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0" id="container2">
      <tr>
        <td valign="top" style="padding:5px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/client_overview.jpg" width="176" height="58" /></td>
          </tr>
          <tr>
            <td class="hm_bk">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vestibulum congue arcu in ultrices. Quisque pharetra turpis ut est viverra euismod. Fusce eu elit mauris. Nulla velit arcu, venenatis sit amet tempor ut, consectetur a lectus. Sed lacinia tristique lacinia. Aliquam ante massa, hendrerit eu elementum at, bibendum vitae tortor. Morbi justo lorem, tincidunt non tempor vitae, hendrerit a enim. Nunc ipsum dui, auctor ut faucibus nec, luctus in ligula. Nullam luctus faucibus ipsum. Donec ac suscipit leo.
              Praesent et odio leo. Quisque eu augue pulvinar justo placerat molestie. Nunc ipsum dui, auctor ut faucibus nec, luctus in ligula. Nullam luctus faucibus ipsum. </td>
          </tr>
        </table></td>
      </tr>
    </table>
            
            </td>
            <td width="25%">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" id="container2">
      <tr>
        <td valign="top" style="padding:5px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/news_header.jpg" width="176" height="58" /></td>
          </tr>
          <tr>
            <td class="hm_bk">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vestibulum congue arcu in ultrices. Quisque pharetra turpis ut est viverra euismod. Fusce eu elit mauris. Nulla velit arcu, venenatis sit amet tempor ut, consectetur a lectus. Sed lacinia tristique lacinia. Aliquam ante massa, hendrerit eu elementum at, bibendum vitae tortor. Morbi justo lorem, tincidunt non tempor vitae, hendrerit a enim. Nunc ipsum dui, auctor ut faucibus nec, luctus in ligula. Nullam luctus faucibus ipsum. Donec ac suscipit leo.
              Praesent et odio leo. Quisque eu augue pulvinar justo placerat molestie. Nunc ipsum dui, auctor ut faucibus nec, luctus in ligula. Nullam luctus faucibus ipsum. </td>
          </tr>
        </table></td>
      </tr>
    </table>
            
            </td>
          </tr>
        </table></td>
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
