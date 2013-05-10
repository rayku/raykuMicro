<?php echo doctype('html5');?>
<html>
<?php echo $header; ?>
<body>
	<script>
	$(document).ready(function (){
		$('.signup-user').click(function (event){
			event.preventDefault();
		});
	});
	</script>
    <?php echo $navigation;?>

	<div id="intro" class="v1">
		<div class="inside">
		<div class="left">
			<h1>Instant Math Tutoring</h1>
			<h2>Connect with a live online tutor, over a beautiful &amp; interactive whiteboard, whenever you need help. Your first session is free!</h2>
		<?php echo form_open('usercontroller/register')."\n";?>
		<p>
			<input type="text" class="ask" placeholder="Describe what you need help with..." />
			
			<input class="bbutton" type="submit" value="Ask" />
		</p>
		<div id="signup-ask">
			<div class="head"><a href="#" class="close ask-login-button">x</a><span>Please provide account information in order to continue</span> <a href="#" data-reveal-id="loginModal" class="right ask-login-button">Already have an account</a><div class="clear"></div></div>
			<div class="row signup-form">
				<div class="large-6 columns">
		        	<input type="text" id="fos_user_registration_form_username" name="username" required="required" maxlength="255"    placeholder="Username" />
		        	
		      	</div>
		      	<div class="large-6 columns">
		        	<input type="email" id="fos_user_registration_form_email" name="email" required="required"    placeholder="E-mail" />
		        	
		      	</div>
		      	<div class="large-6 columns">
		      		
		        	<input type="password" id="fos_user_registration_form_plainPassword_first" name="password" required="required"    placeholder="Password" />
		      	</div>
		      	<div class="large-6 columns">
		        	<!--<input type="password" id="fos_user_registration_form_plainPassword_second" name="fos_user_registration_form[plainPassword][second]" required="required"    placeholder="Confirm Password" />-->
		        	<input type="text" id="fos_user_registration_form_plainPassword_second" name="coupon" placeholder="Coupon Code (Optional)">
		      	</div>
		    	<div class="large-6 columns terms">
		    		By clicking Create Account you are indicating that you have read and agree to the <strong>Terms & Conditions</strong>
		    	</div>
		    	<div class="large-6 columns submit">
		    		<input type="hidden" id="fos_user_registration_form__token" name="fos_user_registration_form[_token]" value="61ac1d89a0f9222cbdf9bf7c54541039c927d275" />
		    		<input type="submit" value="Create an account and ask" class="bbutton"/>
		    	</div>
		    </div>
		</div>
		<?php echo form_close()."\n";?>
    
			<script type="text/javascript">
				  var _gaq = _gaq || [];
				  var pluginUrl = 
				 '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
				_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
				  _gaq.push(['_setAccount', 'UA-21399448-5']);
				  _gaq.push(['_trackPageview']);

				  (function() {
				    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  })();

			</script>    		
			<p class="seen-on">
				As seen on: <img src="<?php echo $base_url;?>images/seen_on.png" alt="" />
			</p>
		</div>
		<div class="right">
				<!--<img src="<?php echo $base_url;?>images/video.jpg" alt="" />
				<span class="play"></span>-->
				<a href="http://fast.wistia.net/embed/iframe/6311e77c10?autoPlay=true&plugin%5BpostRoll-v1%5D%5Blink%5D=http%3A%2F%2Fwww.rayku.com%2Fregister&plugin%5BpostRoll-v1%5D%5Bstyle%5D%5BbackgroundColor%5D=%23263542&plugin%5BpostRoll-v1%5D%5Bstyle%5D%5Bcolor%5D=%23ffe7c2&plugin%5BpostRoll-v1%5D%5Bstyle%5D%5BfontFamily%5D=Gill%20Sans%2C%20Helvetica%2C%20Arial%2C%20sans-serif&plugin%5BpostRoll-v1%5D%5Bstyle%5D%5BfontSize%5D=36px&plugin%5BpostRoll-v1%5D%5Btext%5D=Register%20for%20free%3Cbr%2F%3Eand%20get%20started%20today&popover=true&version=v1&videoHeight=360&videoWidth=640&volumeControl=true" class="wistia-popover[height=360,width=640] video"><img src="<?php echo $base_url;?>images/video.jpg" alt="" /><script charset="ISO-8859-1" src="http://fast.wistia.com/static/popover-v1.js"></script></a>
				
			
		</div>
		<div class="clear"></div>
		</div>
		<div class="wood">
			<div class="dust left"></div>
			<div class="dust"></div>
			<div class="chalk"></div>
			<div class="dust right"></div>
		</div>
	</div>

	<div id="steps">
		<div class="inside">
			<div class="step">
				<div class="text">
					<h3>Ask Question</h3>
					<p>Let us know the  question or topic that you need help with.</p>
				</div>
				<div class="img"></div>
			</div>
			<div class="step">
				<div class="text">
					<h3>Select Tutor</h3>
					<p>Select from a list of online tutors that are BEST suited to help you.</p>
				</div>
				<div class="img"></div>
			</div>
			<div class="step">
				<div class="text">
					<h3>Learn!</h3>
					<p>Connect with a live tutor over our whiteboard, within 60 seconds!</p>
				</div>
				<div class="img"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div id="testimonials">
		<div class="inside">
			<hgroup>
				<h2>People love Rayku</h2>
				<h3>Find out what everyone is saying about us. People are talking!</h3>
			</hgroup>
		</div>
		<div class="testimonials">
			<div class="testimonial element">
				<blockquote>					
					<p>I must say that the current system is pretty neat, I enjoyed playing around with all the features and the Latex integration is truly quite nice. The interface is really smooth and sleek which I like. The ease of use is wonderful.</p>
					<footer>Pratheek Nagaraj <em>MIT student, NASA intern</em></footer>
				</blockquote>
				<div class="avatar">
					<img src="http://rayku.com/images/prf3.png" alt="" />
				</div>
			</div>
			<div class="testimonial element">
				<blockquote>					
					<p>My son got in touch with a Yale math major who helped him understand a math problem that neither of us could figure out. This is a crucial year for him, and Rayku.com is one way for me to support his efforts.</p>
					<footer>Sarah Ming <em>Parent, Kingston New York</em></footer>
				</blockquote>
				<div class="avatar">
					<img src="<?php echo $base_url;?>images/sarah-icon.png" alt="" />
				</div>
			</div>
			<div class="testimonial element">
				<blockquote>					
					<p>Available globally 24 hours a day, seven days a week, Rayku enables tutors to set their own fees, and students to select their tutors based on price and quality. The Canadian startup estimates that this saves users an average of 60% per tutoring session compared with conventional alternatives.</p>
					<footer>Techvibes <em>Technology News Blog</em></footer>
				</blockquote>
				<div class="avatar">
					<img src="<?php echo $base_url;?>images/tv-icon.png" alt="" />
				</div>
			</div>
		</div>
	</div>

	<div id="whiteboard">
		<div class="inside">
			<hgroup>
				<h2>Rayku works because we show, not tell</h2>
				<h3>We've put together a fast and easy-to-use whiteboard app, with everything from audio/video to a sleek math equation writer. Connect with your online tutor immediately for a painless experience.</h3>
			</hgroup>
			<div class="macbook">
				<img src="<?php echo $base_url;?>images/whiteboard_demo.jpg" alt="" />
				<ul>
					<li>
						<strong>Tools</strong>
						The math equation writer makes it easy to communicate your question and thoughts
					</li>
					<li>
						<strong>Board</strong>
						Watch as the tutor illustrates each step in a visual way on the live shared whiteboard
					</li>
					<li>
						<strong>Video</strong>
						See or listen to the tutor explain the concepts in question as they draw it out for you in real time
					</li>
					<li>
						<strong>Chat</strong>
						More comfortable typing? We've got you covered! Everything is recorded for you as notes</li>
				</ul>
			</div>
		</div>
	</div>

	<div id="signup">
		<div class="inside">
			<hgroup>
				<h2>Get your first session free!</h2>
				<h3>Create a free account to get started (no credit card required):</h3>
			</hgroup>
			<p>
				<a href="#" class="signup signup-user">Register Now</a>
			</p>
		</div>
	</div>

    <footer class="footer">
		<div class="inside">
			<p class="copy left">Copyright 2013 Rayku Corp. All rights reserved | Questions? 1-888-98RAYKU</p>
			<nav class="right">
				<a href="/app_dev.php/about">About</a>
								<a href="/app_dev.php/become-a-tutor">Jobs</a>
							<a href="/app_dev.php/about#contact">Contact Us</a>
				<a href="/app_dev.php/legal">Legal</a>
			</nav>
			<div class="clear"></div>
		</div>
	</footer>

	<?php echo $login;?>

    <script>
        document.write('<script src=' +
        ('__proto__' in {} ? '/javascripts/vendor/zepto' : '<?php echo $base_url;?>javascripts/vendor/jquery') +
        '.js><\/script>')
    </script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.alerts.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.clearing.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.cookie.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.dropdown.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.forms.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.joyride.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.magellan.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.orbit.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.placeholder.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.reveal.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.section.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.tooltips.js"></script>
    <script src="<?php echo $base_url;?>javascripts/foundation/foundation.topbar.js"></script>
    <script>
        $(document).foundation();
    </script>
        
	<script type="text/javascript">
		var _gaq = _gaq || [];
		var pluginUrl = 
		'//www.google-analytics.com/plugins/ga/inpage_linkid.js';
		_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
		_gaq.push(['_setAccount', 'UA-21399448-5']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>    
</body>
</html>