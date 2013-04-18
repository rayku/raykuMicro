<div id="myTutorModal" class="reveal-modal medium">
  <h2>Complete Your Tutor Profile</h2>
  <div class="large-12 columns">
    <p>Before activating your tutor status, please fill out as much as possible to completeyour tutor profile.</p>
  </div>
  <div class="large-12 columns">
    <form class="custom" action="/app_dev.php/tutor/save" method="post"  id="rayku_tutorbundle_tutortype">
      <div class="row">
        <div class="row subjects">
          <div class="large-12 columns">
            <label class="required">Subjects</label>
            <div id="rayku_tutorbundle_tutortype_subjects"></div>
          </div>
        </div>
        <div class="row describes">
          <div class="large-12 columns">
            <label for="rayku_tutorbundle_tutortype_schoolAmount" class="required">What best describes you?</label>
            <select id="rayku_tutorbundle_tutortype_schoolAmount" name="rayku_tutorbundle_tutortype[schoolAmount]" required="required"><option value="Freshman">Freshman</option><option value="Sophomore">Sophomore</option><option value="Junior">Junior</option><option value="Senior">Senior</option><option value="Masters Student">Masters Student</option><option value="Phd Candidate">Phd Candidate</option><option value="Undergrad Degree Holder" selected="selected">Undergrad Degree Holder</option><option value="Masters Degree Holder">Masters Degree Holder</option><option value="Phd Degree Holder">Phd Degree Holder</option><option value="Teaching Assistant">Teaching Assistant</option><option value="Professor">Professor</option><option value="Middle School Teacher">Middle School Teacher</option><option value="High School Teacher">High School Teacher</option></select>
          </div>
        </div>

        <div class="row schoolname">  
          <div class="large-12 columns">
            <label for="rayku_tutorbundle_tutortype_schoolName" class="required">School Name</label>
            <input type="text" id="rayku_tutorbundle_tutortype_schoolName" name="rayku_tutorbundle_tutortype[schoolName]" required="required" maxlength="255" value="Dalhousie University" />
          </div>
        </div> 
        <div class="row degree">
          <div class="large-12 columns">
            <label for="rayku_tutorbundle_tutortype_degree" class="required">Degree</label>
            <input type="text" id="rayku_tutorbundle_tutortype_degree" name="rayku_tutorbundle_tutortype[degree]" required="required" maxlength="255" value="Computer Science" />
          </div>
        </div>
        <div class="row degree">
          <div class="large-12 columns">
            <label for="rayku_tutorbundle_tutortype_rate" class="required">RP/Min</label>
            <input type="text" id="rayku_tutorbundle_tutortype_rate" name="rayku_tutorbundle_tutortype[rate]" required="required" value="40" />
          </div>
        </div>
        <div class="row degree">
          <div class="large-12 columns">
            <label for="rayku_tutorbundle_tutortype_gtalk_email">Connect Your Google Talk</label>
            <input type="text" id="rayku_tutorbundle_tutortype_gtalk_email" name="rayku_tutorbundle_tutortype[gtalk_email]" maxlength="255" />
          </div>
        </div>
        <div class="row listing-preview">
          <div class="large-12 columns">
            <label>Listing Preview</label>
            <p>(When students search for tutors, you will appear as):</p>
            <p class="preview"><span class="schoolAmount">Under Graduate Degree Holder</span> From <span class="schoolName">Ryerson University</span> - Economics</p>
          </div>
        </div>
      </div>
      <input type="hidden" id="rayku_tutorbundle_tutortype__token" name="rayku_tutorbundle_tutortype[_token]" value="0fbe7c653970db5ca22dfa44ec0cbb06a1eb584c" />
      <input type="submit" class="bbutton" value="Save &amp; Activate Tutor Status" name="tutorStatusButton" id="submitTutorStatus">
    </form>
  </div>
  <a class="close-reveal-modal">×</a>
</div>
<script>
$('a.current').on('change', function(){
  $('.schoolAmount').html($(this).val());
});
</script>

<div id="turnTutorStatusOff" class="reveal-modal medium">
    <div class="row">
        <div class="large-12 columns">
            <h4>Are you sure you want to turn off your tutor status?</h4>
        </div>
    </div>
    <form id="tutorConfirmStatusForm" name="blah">
        <div class="row">
            <div class="large-2 push-8 columns">
                <input type="submit" class="bbutton" value="Yes" name="tutorStatusButton" id="confirmTutorStatusOff">
            </div>
            <div class="large-2 columns">
                <input type="submit" class="bbutton" value="No" name="tutorStatusButton" id="confirmTutorStatusOn">
            </div>
        </div>
    </form>
    <a class="close-reveal-modal">&#215;</a>
</div>
  
<script type="text/javascript">
$(document).ready(function(){
      var tutor_id = 2;
  
    if($("#tutorOn").attr("data") === "isTutor"){
        $("#tutorOn").addClass("isTutorBg");
    }
    else{
        $("#tutorOn").removeClass("notTutorBg");
    }
    if($("#tutorOff").attr("data") === "notTutor"){
        $("#tutorOff").addClass("isTutorBg");
    }
    else{
        $("#tutorOff").removeClass("notTutorBg");
    }



    $('#submitTutorStatus').on('submit', function(){
        $("#tutorOff").attr("data", "");
        $("#tutorOn").removeClass("isTutorBg");

        $("#tutorOn").attr("data", "isTutor");
        $("#tutorOn").addClass("isTutorBg");
    });

    $('#confirmTutorStatusOff').on('submit', function(){
        $("#tutorOn").attr("data", "");
        $("#tutorOn").removeClass("isTutorBg");

        $("#tutorOff").attr("data", "notTutor");
        $("#tutorOn").addClass("isTutorBg");
    });


  $('#confirmTutorStatusOn').click(function(){
    $('#turnTutorStatusOff').foundation('reveal', 'close');
    return false;
  });
  $('#confirmTutorStatusOff').click(function(){
    $.ajax({
      type: "POST",
      url: '/app_dev.php/tutor/'+tutor_id+'/delete'
    }).done(function() {
      tutor_id = '';
    });
    $('#turnTutorStatusOff').foundation('reveal', 'close');
    return false;
  });

  $('#tutorOff').on('click', function(){
    var $this = $(this);
    
    if($this.attr("data") === "notTutor"){

    }
    else{
        $("#turnTutorStatusOff").foundation('reveal', 'open');
    }
  });
  $('#tutorOn').click(function(event){
    event.preventDefault();
    var $this = $(this);
    if($this.attr("data") === "isTutor"){

    }
    else{
        $('#myTutorModal').foundation('reveal', 'open');
    }
  });

  var options = { 
    error: function(response, status, err){
      var responseJson = $.parseJSON(response.responseText);
      for(field in responseJson.errors){
        $("label[for='"+field+"']").addClass('error');
        $("#"+field).after('<small class="error field_error">'+responseJson.errors[field]+'</small>');
      }
    },
    success: function(response){
      tutor_id = response.entity.id;
      $('#myTutorModal').foundation('reveal', 'close');
      $(".error").removeClass('error');
      $(".field_error").remove();
    }
  };
  $('#rayku_tutorbundle_tutortype').ajaxForm(options)
});

</script>

<div id="connectNotifModal" class="reveal-modal large connectNotif">
    <h2>Notifications</h2>
    <a class="close-reveal-modal">&#215;</a>
	<div class="row connectNotifRow" style="display:none" id="connectRow_id_">
        <div class="large-1 columns connectNotifImage">
            <img src="http://placehold.it/1100x1100">
        </div>
        <div class="large-7 columns connectNotifInfo">
            <ul>
                <li>_name_</li>
                <li>_question_</li>
            </ul>
        </div>
        <div class="large-2 columns">
        	<form method="post" action="/app_dev.php/sessions/_id_/accept" class="post_session_accept">
        		<button type="submit" name="Confirm" class="bbutton accept">Accept</button>
            </form>
        </div>
        <div class="large-2 columns">
        	<form method="post" action="/app_dev.php/sessions/_id_/deny" class="post_session_deny">
        		<button type="submit" name="Decline" class="abutton decline">Decline</button>
        	</form>
        </div>
	</div>
</div>

<script type="text/javascript">
//DO NOT BREAK THIS JAVASCRIPT UP
$(document).ready(function(){
    //Submit Question
    $('input[name="aSubmit"]').one('click', function(event){
    	event.preventDefault();
    	$('.tutor-list').html('Loading ... ');
        $.ajax({
            type:"post",
            url:"<?php echo $base_url;?>sessions",
            cache: false,
            success: function(data){
                $('.tutor-list').html(data);
            },
            error: function(){
                $('.tutor-list').html('There was an error loading tutors');
            }
        });
        $('.tutor-list').fadeIn('slow');
    });
});
</script>

	    <footer class="footer">
    	<div class="inside">
		<p class="copy left">Copyright 2013 Rayku Corp. All rights reserved | Questions? 1-888-98RAYKUp>
		<nav class="right">
			<a href="/app_dev.php/about">About</a>
						<a href="/app_dev.php/about#contact">Contact Us</a>
			<a href="/app_dev.php/legal">Legal</a>
		</nav>
		<div class="clear"></div>
		</div>
    </footer>
    
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
        	<input type="hidden" name="_csrf_token" value="5472785cca1a77e587558f2a0ebef2344fe19573" />        
            <div class="row">
                <div class="large-12 columns">
				    <input type="text" id="username" name="_username" value="" placeholder="E-mail or Username" required="required" class="login-input" />
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
				    <input type="password" id="password" name="_password" placeholder="Password" required="required"  class="login-input" />
					<input type="submit" class="abutton login-button" id="_submit" name="_submit" value="Login" />
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
	
            <script>
            document.write('<script src=' +
            ('__proto__' in {} ? '<?php echo $base_url;?>javascripts/vendor/zepto' : '<?php echo $base_url;?>javascripts/vendor/jquery') +
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