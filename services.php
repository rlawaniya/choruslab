<?php
  require './login_panel/login.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choruslab - Services</title>
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
<li><a href="#div1">Logo Design</a></li>
<li><a href="#div2">Print Media</a></li>
<li><a href="#div3">Template Design</a></li>
<li><a href="#div4">Computer GUI Design</a></li>
<li><a href="#div5">Mobile GUI Design</a></li>
<li><a href="#div6">Graphic Design</a></li>
<li><a href="#div7">Facebook Fan Page</a></li>
<li><a href="#div8">User Interface Design</a></li>
</ul>

<h3 class="menuheader expandable">Website Development</h3>
<ul class="categoryitems">
<li><a href="#div9">CMS Driven Websites</a></li>
<li><a href="#div10">E-commerce Application</a></li>
<li><a href="#div11">Online Stores</a></li>
<li><a href="#div12">Application Development</a></li>
<li><a href="#div13">CRM Development</a></li>
<li><a href="#div14">Website Development</a></li>
<li><a href="#div15">Facebook Application</a></li>
</ul>

<h3 class="menuheader expandable">Software Development</h3>
<ul class="categoryitems">
<li><a href="#div16" >Automation Software</a></li>
<li><a href="#div17">MAC Software</a></li>
<li><a href="#div18">Windows Software</a></li>
<li><a href="#div19">Enterprise Solution</a></li>
<li><a href="#div20">Custom Softwares</a></li>
<li><a href="#div21">Game Softwares</a></li>
</ul>


<h3 class="menuheader expandable">Mobile Development</h3>
<ul class="categoryitems">
<li><a href="#div22" >Iphone Application</a></li>
<li><a href="#div23">Android Application </a></li>
<li><a href="#div24">Ipad Application</a></li>
<li><a href="#div25">BlackBerry Application </a></li>
<li><a href="#div26">Mobile Application </a></li>
<li><a href="#div27">WAP sites</a></li>
</ul>


<h3 class="menuheader expandable">Online Marketing</h3>
<ul class="categoryitems">
<li><a href="#div28" >Affiliate Marketing</a></li>
<li><a href="#div29">Search Engine Marketing</a></li>
<li><a href="#div30">Link Popularity</a></li>
<li><a href="#div31">Page Ranking</a></li>
<li><a href="#div32">Email Marketing</a></li>
</ul>
    
    
    </td>
    <td width="811">
	        <div class="scroll"> 
            
                <div class="scrollContainer"> 
                                                    <div class="panel" id="div1" style="float: left; position: relative; " > <article id="stage"><h1>Welcome to choruslabs div0 !! </h1> 
		                                               </article>
                									</div>
													<div class="panel" id="div2" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div1 !!! </h1> 
                									   </article>
													</div>
													<div class="panel" id="div3" style="float: left; position: relative; "><article id="stage"><h1>Welcome to choruslabs div2 !!! </h1> 
                										 </article>
												    </div>
													<div class="panel" id="div4" style="float: left; position: relative; "><article id="stage"><h1>Welcome to choruslabs div3!!! </h1> 
                										 </article>
													</div>
													<div class="panel" id="div5" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div4!!! </h1> 
                										 </article>
													</div>
													<div class="panel" id="div6" style="float: left; position: relative; "><article id="stage"><h1>Welcome to choruslabs div5!!! </h1> 
                										 </article>
													</div>
													<div class="panel" id="div7" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div6!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div8" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div7!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div9" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div8!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div10" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div9!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div11" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div10!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div12" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div11!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div13" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div12!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div14" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div13!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div15" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div14!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div16" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div15!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div17" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div16!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div18" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div17!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div19" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div18!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div20" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div19!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div21" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div20!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div22" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div21!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div23" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div22!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div24" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div23!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div25" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div24!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div26" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div25!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div27" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div26!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div28" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div27!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div29" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div28!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div30" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div29!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div31" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div30!!! </h1> 
                									 </article>
													</div>
													<div class="panel" id="div32" style="float: left; position: relative; " ><article id="stage"><h1>Welcome to choruslabs div31!!! </h1> 
                									 </article>
													</div>
				</div>
													
			</div>
	</td>
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
