<?php
  require './login_panel/login.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/oodomimagerollover.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/ddaccordion.js"></script>

<link rel="stylesheet" type="text/css" href="login_panel/css/slide.css" media="screen" />
<script src="login_panel/js/slide.js" type="text/javascript"></script>
	<?php echo $script; ?>

<script type="text/javascript">

ddaccordion.init({
	headerclass: "expandable", //Shared CSS class name of headers group that are expandable
	contentclass: "categoryitems", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", "openheader"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["prefix", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})


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
    <td id="header_bg">&nbsp;</td>
  </tr>
</table>
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="213">
    
    <div class="arrowlistmenu">

<h3 class="menuheader expandable">Design Studio</h3>
<ul class="categoryitems">
<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C1/">Logo Design</a></li>
<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C2/">Print Media</a></li>
<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C4/">Template Design</a></li>
<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C6/">Computer GUI Design</a></li>
<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C5/">Mobile GUI Design</a></li>
<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C7/">Graphic Design</a></li>
<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C8/">Facebook Fan Page</a></li>
<li><a href="http://www.dynamicdrive.com/style/csslibrary/category/C8/">User Interface Design</a></li>
</ul>

<h3 class="menuheader expandable">Website Development</h3>
<ul class="categoryitems">
<li><a href="http://www.cssdrive.com">CMS Driven Websites</a></li>
<li><a href="http://www.cssdrive.com/index.php/menudesigns/">E-commerce Application</a></li>
<li><a href="http://www.cssdrive.com/index.php/news/">Online Stores</a></li>
<li><a href="http://www.cssdrive.com/index.php/examples/">Application Development</a></li>
<li><a href="http://www.cssdrive.com/index.php/main/csscompressor/">CRM Development</a></li>
<li><a href="http://www.dynamicdrive.com/forums/forumdisplay.php?f=6">Website Development</a></li>
<li><a href="http://www.dynamicdrive.com/forums/forumdisplay.php?f=6">Facebook Application</a></li>
</ul>

<h3 class="menuheader expandable">Software Development</h3>
<ul class="categoryitems">
<li><a href="http://www.javascriptkit.com/cutpastejava.shtml" >Automation Software</a></li>
<li><a href="http://www.javascriptkit.com/javatutors/">MAC Software</a></li>
<li><a href="http://www.javascriptkit.com/jsref/">Windows Software</a></li>
<li><a href="http://www.javascriptkit.com/domref/">Enterprise Solution</a></li>
<li><a href="http://www.javascriptkit.com/dhtmltutors/">Custom Softwares</a></li>
<li><a href="http://www.javascriptkit.com/dhtmltutors/">Game Softwares</a></li>
</ul>


<h3 class="menuheader expandable">Mobile Development</h3>
<ul class="categoryitems">
<li><a href="http://www.javascriptkit.com/cutpastejava.shtml" >Iphone Application</a></li>
<li><a href="http://www.javascriptkit.com/javatutors/">Android Application </a></li>
<li><a href="http://www.javascriptkit.com/jsref/">Ipad Application</a></li>
<li><a href="http://www.javascriptkit.com/domref/">BlackBerry Application </a></li>
<li><a href="http://www.javascriptkit.com/domref/">Mobile Application </a></li>
<li><a href="http://www.javascriptkit.com/dhtmltutors/">WAP sites</a></li>
</ul>


<h3 class="menuheader expandable">Online Marketing</h3>
<ul class="categoryitems">
<li><a href="http://www.javascriptkit.com/cutpastejava.shtml" >Affiliate Marketing</a></li>
<li><a href="http://www.javascriptkit.com/javatutors/">Search Engine Marketing</a></li>
<li><a href="http://www.javascriptkit.com/jsref/">Link Popularity</a></li>
<li><a href="http://www.javascriptkit.com/domref/">Page Ranking</a></li>
<li><a href="http://www.javascriptkit.com/dhtmltutors/">Email Marketing</a></li>
</ul>
    
    
    </td>
    <td width="811">&nbsp;</td>
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
