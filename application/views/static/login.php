<div id="loginModal" class="reveal-modal medium">
    <div class="row login-modal-header">
        <img src="<?php echo $base_url;?>images/logo.png" alt="rayku">
        <a class="close-reveal-modal">&#215;</a>
    </div>
    <div class="row login-form">
        <div class="row login-modal-error">
            <div class="large-12 columns">
                <p><strong>Please re-enter your email and password</strong><br>
                The password you entered is incorrect. Please try again.</p>
            </div>
        </div>
        <?php echo form_open('usercontroller/login')."\n";?>
        	<input type="hidden" name="_csrf_token" value="a40a7e4afb1efa05cb57de1900d5bd355139ec2c" />        
            <div class="row">
                <div class="large-12 columns">
				    <input type="text" id="email" name="_email" value="" placeholder="E-mail" required="required" class="login-input" />
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
				    <input type="password" id="password" name="_password" placeholder="Password" required="required"  class="login-input" />
					<input type="submit" class="bbutton login-button" id="_submit" name="_submit" value="Login" />
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns remember">
                    <label for="remember_me" class="remember-checkbox">Remember me</label>
				    <input type="checkbox" id="remember_me" name="_remember_me" value="on" />
                </div>
                <div class="large-6 columns forgot">
                    <a href="#" class="forgot-password">Forgot your password?</a>
                </div>
            </div>
        <?php echo form_close()."\n";?>
    </div>
    <div class="login-modal-divider1">
    </div>
    <div class="row forgot-email-form">
        <form action="" method="post">
            <div class="row">
                <div class="large-12 columns">
                    <label class="login-label">Forgot Password</label>
                    <input class="login-input" type="text" placeholder="Enter your e-mail and we'll send it along..." required>
                    <input type="submit" class="abutton submit-button"/>
                </div>
            </div>
        </form>
    </div>
    <div class="login-modal-footer">
        <div class="copyright">
            <p>Rayku &copy; 2013</p>
        </div>
        <div class="footer-links">
            <ul>
                <li><a href=#>Privacy</a></li>
                <li>/</li>
                <li><a href=#>Legal</a></li>
                <li>/</li>
                <li><a href=#>Help</a></li>
        </div>
    </div>
</div>