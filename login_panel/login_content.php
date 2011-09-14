<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<?php
			
			if(!$_SESSION['id']):
			
			?>
            
			<div class="left right">			
				<!-- Register Form -->
				<form action="" method="post">
					<h1>Not a member yet? Sign Up!</h1>		
                    
                    <?php
						
						if($_SESSION['msg']['reg-err'])
						{
							echo '<div class="err">'.$_SESSION['msg']['reg-err'].'</div>';
							unset($_SESSION['msg']['reg-err']);
						}
						
						if($_SESSION['msg']['reg-success'])
						{
							echo '<div class="success">'.$_SESSION['msg']['reg-success'].'</div>';
							unset($_SESSION['msg']['reg-success']);
						}
					?>
                    		
					<label class="grey" for="username">Username:</label>
					<input class="field" type="text" name="username" id="username" value="" size="23" />
					<label class="grey" for="email">Email:</label>
					<input class="field" type="text" name="email" id="email" size="23" />
					<label>A password will be e-mailed to you.</label>
					<input type="submit" name="submit" value="Register" class="bt_register" />
				</form>
			</div>

			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="" method="post">
					<h1>Member Login</h1>
                    
                    <?php
						
						if($_SESSION['msg']['login-err'])
						{
							echo '<div class="err">'.$_SESSION['msg']['login-err'].'</div>';
							unset($_SESSION['msg']['login-err']);
						}
					?>
					
					<label class="grey" for="username">Username:</label>
					<input class="field" type="text" name="username" id="username" value="" size="23" />
					<label class="grey" for="password">Password:</label>
					<input class="field" type="password" name="password" id="password" size="23" />
	            	<label><input name="rememberMe" id="rememberMe" type="checkbox" checked="checked" value="1" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
				</form>
			</div>
			            
            <?php
			
			else:
			
			?>
            
            <div class="left">
                <h1>Members panel</h1>
                </br></br>
                <!--input type="button" name="btn_changePwd" id="btn_changePwd" value="Change Password" onclick="div_changePwd.style"/-->
                <a id="a_changePwd" name="a_changePwd" href="#">Change Password</a>
                <!--p>You can put member-only data here</p-->
                <p>- or -</p>
                <a href="registered.php">View a special member page</a>
                <p>- or -</p>
                <a href="?logoff">Log off</a>
            </div>
            
            <div id="div_changePwd" class="left right" style="display:none">
            	<h1>Change Password</h1>
                
				<?php
					if($_SESSION['msg']['cp-err'])
					{
						echo '<div class="err">'.$_SESSION['msg']['cp-err'].'</div>';
						unset($_SESSION['msg']['cp-err']);
					}
					if($_SESSION['msg']['cp-success'])
					{
						echo '<div class="success">'.$_SESSION['msg']['cp-success'].'</div>';
						unset($_SESSION['msg']['cp-success']);
					}else{
				?>
                
                </br></br>
            	<form action="" method="post">
            		<label class="grey" for="username">Old Password:</label>
                    <input class="field" type="password" name="old_password" id="old_password" size="23"/>
                    <label class="grey" for="username">New Password:</label>
                    <input class="field" type="password" name="new_password" id="new_password" size="23"/>
                    <div class="clear"></div>
                    </br>
                    </br>
                    <input type="submit" name="submit" value="Change Password"/>
                </form>
                <?php
				}
				?>
            </div>
            
            <?php
			endif;
			?>
		</div>
	</div> <!-- /login -->	

    <!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
	    	<li class="left">&nbsp;</li>
	        <li>Hello <?php echo $_SESSION['usr'] ? $_SESSION['usr'] : 'Guest';?>!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#"><?php echo $_SESSION['id']?'Open Panel':'Log In | Register';?></a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
	    	<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->