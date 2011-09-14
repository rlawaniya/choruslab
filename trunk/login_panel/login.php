<?php
error_reporting(E_ALL ^ E_NOTICE);
define('INCLUDE_CHECK',true);

require 'connect.php';
require 'functions.php';
// Those two files can be included only if INCLUDE_CHECK is defined

session_name('tzLogin');
// Starting the session

session_set_cookie_params(2*7*24*60*60);
// Making the cookie live for 2 weeks

session_start();

if($_SESSION['id'] && !isset($_COOKIE['tzRemember']) && !$_SESSION['rememberMe'])
{
	// If you are logged in, but you don't have the tzRemember cookie (browser restart)
	// and you have not checked the rememberMe checkbox:

	$_SESSION = array();
	session_destroy();
	
	// Destroy the session
}


if(isset($_GET['logoff']))
{
	$_SESSION = array();
	session_destroy();
	
	header("Location: index.php");
	exit;
}

if($_POST['submit']=='Login')
{
	// Checking whether the Login form has been submitted
	
	$err = array();
	// Will hold our errors
	
	
	if(!$_POST['username'] || !$_POST['password'])
		$err[] = 'All the fields must be filled in!';
	
	if(!count($err))
	{
		$_POST['username'] = mysql_real_escape_string($_POST['username']);
		$_POST['password'] = mysql_real_escape_string($_POST['password']);
		$_POST['rememberMe'] = (int)$_POST['rememberMe'];
		
		// Escaping all input data
		$row = mysql_fetch_assoc(mysql_query("SELECT id,usr FROM login_details WHERE usr='{$_POST['username']}' AND pass='".md5($_POST['password'])."'"));
		
		//$row = mysql_fetch_assoc(mysql_query("SELECT id,usr FROM login_details WHERE usr='{$_POST['username']}' AND pass='{$_POST['password']}'"));

		if($row['usr'])
		{			   
			// If everything is OK login
			
			$_SESSION['usr']=$row['usr'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['rememberMe'] = $_POST['rememberMe'];
			
			// Store some data in the session
			
			setcookie('tzRemember',$_POST['rememberMe']);
		}
		else $err[]='Wrong username and/or password!';
	}
	
	if($err)
	$_SESSION['msg']['login-err'] = implode('<br />',$err);
	// Save the error messages in the session

	header("Location: index.php");
	exit;
}
else if($_POST['submit']=='Register')
{
	// If the Register form has been submitted
	
	$err = array();
	
	if(strlen($_POST['username'])<4 || strlen($_POST['username'])>32)
	{
		$err[]='Your username must be between 3 and 32 characters!';
	}
	
	if(preg_match('/[^a-z0-9\-\_\.]+/i',$_POST['username']))
	{
		$err[]='Your username contains invalid characters!';
	}
	
	if(!checkEmail($_POST['email']))
	{
		$err[]='Your email is not valid!';
	}
	
	if(!count($err))
	{
		// If there are no errors
		
		$pass = substr(md5($_SERVER['REMOTE_ADDR'].microtime().rand(1,100000)),0,6);
		// Generate a random password
		
		$_POST['email'] = mysql_real_escape_string($_POST['email']);
		$_POST['username'] = mysql_real_escape_string($_POST['username']);
		// Escape the input data
		
		
		mysql_query("	INSERT INTO login_details(usr,pass,email,regIP,dt)
						VALUES(
						
							'".$_POST['username']."',
							'".md5($pass)."',
							'".$_POST['email']."',
							'".$_SERVER['REMOTE_ADDR']."',
							NOW()
							
						)");
		
		if(mysql_affected_rows($link)==1)
		{
			send_mail(	'choruslab@choruslab.com',
						$_POST['email'],
						'Chorus Lab - Your New Password',
						'Your password is: '.$pass);

			$_SESSION['msg']['reg-success']='Registration Successful!  We sent you an email with your new password.';
		}
		else $err[]='This username is already taken!';
	}

	if(count($err))
	{
		$_SESSION['msg']['reg-err'] = implode('<br />',$err);
	}	
	
	header("Location: index.php");
	exit;
}
else if($_POST['submit']=='Change Password')
{
	// If the Change Password form has been submitted
	
	$err = array();
	
	if(!$_POST['old_password'] || !$_POST['new_password']){
		$err[] = 'All the fields must be filled in!';
	}
	else if(strlen($_POST['new_password'])<4 || strlen($_POST['old_password'])>32)
	{
		$err[]='Your password must be between 3 and 32 characters!';
	}

	if(!count($err))
	{
		// If there are no errors
		mysql_query("UPDATE login_details SET pass='".md5($_POST['new_password'])."' WHERE usr='".$_SESSION['usr']."' AND pass='".md5($_POST['old_password'])."'");
		
		if(mysql_affected_rows($link)==1)
		{
			send_mail(	'choruslab@choruslab.com',
						$_POST['email'],
						'Chorus Lab - Your New Password',
						'Your password is: '.$_POST['new_password']);

			$_SESSION['msg']['cp-success']='Your password has been changed successfully!';
		}
		else $err[] = "Please enter your old password correctly";
	}
	if(count($err))
	{
		$_SESSION['msg']['cp-err'] = implode('<br />',$err);
	}	
	
	header("Location: index.php");
	exit;
}

$script = '';

if($_SESSION['msg'])
{
	// The script below shows the sliding panel on page load
	
	$script = '
	<script type="text/javascript">
	
		$(function(){
			$("div#panel").show();
			$("#toggle a").toggle();
		});
		
		$(function(){
			$("div#div_changePwd").show();
			
		});
	
	</script>';
}
?>