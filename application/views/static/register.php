
<!DOCTYPE html>
<html>
<?php echo $header; ?>
	<body>
        <div class="form-box signup-box fade-in">
			<a href="/" class="logo"></a>
			<?php echo form_open('usercontroller/register')."\n";?>
				<ul>
					<li>
						<div><label for="fos_user_registration_form_username" class="required">Username:</label><input type="text" id="fos_user_registration_form_username" name="username" required="required" maxlength="255"    placeholder="Username" /></div>
					</li>
					<li>
						<div><label for="fos_user_registration_form_email" class="required">Email:</label><input type="email" id="fos_user_registration_form_email" name="email" required="required"    placeholder="E-mail" /></div>
					</li>
					<li>
						<div><label for="fos_user_registration_form_plainPassword" class="required">Password</label><input type="password" id="fos_user_registration_form_plainPassword_first" name="password" required="required"    placeholder="Password" /></div>
					</li>
                    <li>
                        <div><label for="Confirm Password" class="required">Confirm Password</label><input type="password" id="fos_user_registration_form_plainPassword_first" name="confirm_password" required="required"    placeholder="Confirm Password" /></div>
                    </li>
					<li>
						<div><label for="fos_user_registration_form_signup_question">Signup question</label><input type="text" id="fos_user_registration_form_signup_question" name="fos_user_registration_form[signup_question]" maxlength="255" /></div>
					</li>
					<li>
						<div><label for="fos_user_registration_form_coupon">Coupon</label><input type="text" id="fos_user_registration_form_coupon" name="fos_user_registration_form[coupon]" /></div>
					</li>
					<li class="left align_right">
						By clicking Get Started you agree to the <a href="#">Terms & Conditions</a>
					</li>
					<li class="right submit">
						<input type="hidden" id="fos_user_registration_form__token" name="fos_user_registration_form[_token]" value="aced3e6290fde4ac6bb7ab05a6b506fbd2208cd7" />
						<input type="submit" value="Get Started" />
					</li>
				</ul>
				<div class="clear"></div>
			<?php echo form_close()."\n";?>
			<p class="bottom-line">Already have an account? <a href="#" data-reveal-id="loginModal">Sign In to Rayku!</a></p>
		</div>
	    <?php echo $login;?>
				
			
        <script>
            document.write('<script src=' +
            ('__proto__' in {} ? '/bundles/raykupage/js/vendor/zepto' : '/bundles/raykupage/js/vendor/jquery') +
            '.js><\/script>')
        </script>
        <script src="/bundles/raykupage/js/foundation/foundation.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.alerts.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.clearing.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.cookie.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.dropdown.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.forms.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.joyride.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.magellan.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.orbit.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.placeholder.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.reveal.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.section.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.tooltips.js"></script>
        <script src="/bundles/raykupage/js/foundation/foundation.topbar.js"></script>
        <script>
            $(document).foundation();
        </script>
    
		
		<!-- ClickTale Bottom part -->
<div id="ClickTaleDiv" style="display: none;"></div>
<script type="text/javascript">
if(document.location.protocol!='https:')
  document.write(unescape("%3Cscript%20src='http://s.clicktale.net/WRe0.js'%20type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
if(typeof ClickTale=='function') ClickTale(51841,0.3,"www");
</script>
<!-- ClickTale end of Bottom part -->	    
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
    <script>
	var PF_APPID = "6ea529af653f9073";
	setTimeout(function(){ var d = document;
		s = d.createElement('script');
		s.type = 'text/javascript'; s.async = true;
		s.src = ("https:" == document.location.protocol) ?
		"https://ssl.pathful.com/js/scripts/secure.js" : "http://s.pathful.com/js/scripts/capture.js";
		document.body.appendChild(s, d);
		}, 1
	);
</script>    <script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"d1ros97qkrwjf5.cloudfront.net/42/eum/rum.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-3.newrelic.com","edbc024724","1551879","blcENkJXXEEFU0UKDFcdMxBZGVNCFB5BCxM=",0,532,new Date().getTime(),"","","","",""]);</script>
</body>
</html>