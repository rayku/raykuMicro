<header>
        <div class="inside">
                            <a href="/app_dev.php/dashboard" id="logo"><img src="<?php echo $base_url; ?>images/logo.png" alt="" /></a>
            	<nav>
                <a href=# class="notification" data-reveal-id="connectNotifModal"><span class="raphael">[</span><span class="notif-count">0</span></a>
                <a href=# class="logged-in-as">Logged in as <?php echo $user[0]["username"];?></a> 
                <div class="submenu" id="submenu">
                    <ul class="submenu-item">
                        <li><a class="home" href=#><span class="raphael">L</span>Home</a></li>
                        <?php
                            if($isTutor){
                                echo '<li><a class="practice" href="http://mathcentre.rayku.com:8080/standalone" target="_blank"><span class="raphael">b</span>Practice Whiteboard</a></li>';
                                echo '<li><a class="broadcast" href="'.$base_url.'startBroadcast"><span class="raphael">Æ</span>Broadcast Session</a></li>';
                            }
                        ?>
                        <li><a class="settings" href=#><span class="raphael">`</span>Settings</a></li>
                        <li><a class="logout" href="<?php echo $base_url;?>logout"><span class="raphael">v</span>Logout</a></li>
                    </ul>
                </div>
                </nav>
                    </div>
    </header>
    
    <div class="dashboard">
    <!--Sidebar-->
		<div class="large-3 columns sidebar">
    		<div class="row tutor-sidebar">
                <div class="small-12 columns tutor-label">
                    <h5>Tutor</h5>
                    <div class="tutor-switch">
                        <a href=# name="toggle" id="tutorOn" data="isTutor"><span>On</span></a>
                        <a href=# name="toggle" id="tutorOff" data=""><span>Off</span></a>
                    </div>
    		    </div>
    		</div>
    			            <div class="row tutor-status-bar">
	                <div class="small-12 columns tutor-status">
	                    <h5>Status <span>
	                    Online
	                    </span></h5>
	                </div>
	            </div>
	        
            <div class="row tutor-selected">
                <h5><span class="tutor-count">0</span> <span class="tright">Tutor(s) Selected</span> </h5>
                <div class="small-12 columns">
                    <ol id="selectedTutors">
                    </ol>
                    <a href=# class="clear-tutors">Clear All</a>
                </div>
            </div>
		</div>
    <!--End Sidebar-->

    <!--Main Content-->
	<div class="large-9 columns main-content">
        <!--User Settings-->    
        <div class="row user-settings">
    <div class="large-12 columns user-settings-top">
        <h5>samrock06</h5>
    </div>
    <div class="large-3 columns ask-q">
        <h5>Settings</h5>
    </div>
    <div class="large-9 columns settings">
        <form id="usersettingsForm" class="user-setting" method="POST" action="/app_dev.php/users/3/profile">
            <div class="row">
                <div class="large-3 columns">
                    <label>Change Email</label>
                </div>
                <div class="large-8 columns">
                    <input type="email" id="email" name="email" required="required" value="samrock06@gmail.com" />
                </div>
                <div class="large-1 columns">
                    &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="large-3 columns">
                    <label>Change Username</label>
                </div>
                <div class="large-8 columns">
                    <input type="text" id="username" name="username" required="required" maxlength="255" value="samrock06" />
                </div>
                <div class="large-1 columns">
                    &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="large-3 columns">
                    <label>Old Password</label>
                </div>
                <div class="large-8 columns">
                	<input type="password" id="current_password" name="current_password" required="required"    placeholder="Current Password" />
                </div>
                <div class="large-1 columns">
                    &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="large-3 columns">
                    <label>New Password</label>
                </div>
                <div class="large-8 columns">
					<input type="password" id="plainPassword_first" name="plainPassword[first]" required="required"    placeholder="New Password" />
                </div>
                <div class="large-1 columns">
                    &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="large-3 columns">
                    <label>Confirm Password</label>
                </div>
                <div class="large-8 columns">
					<input type="password" id="plainPassword_second" name="plainPassword[second]" required="required"    placeholder="Password Again" />
                </div>
                <div class="large-1 columns">
                    &nbsp;
                </div>
            </div>
            <div class="row">
            	<input type="hidden" id="_token" name="_token" value="0fbe7c653970db5ca22dfa44ec0cbb06a1eb584c" />
                <div class="large-1 large-centered columns">
                <input type="submit" class="bbutton" value="Save Settings">
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  var options = {
    beforeSubmit: function(){
      $(".error").removeClass('error');
      $(".field_error").remove();
    },
    error: function(response, status, err){
      var responseJson = $.parseJSON(response.responseText);
      for(field in responseJson.errors){
        $("label[for='"+field+"']").addClass('error');
        $("#"+field).after('<small class="error field_error">'+responseJson.errors[field]+'</small>');
      }
    },
    success: function(response){
      console.log('success');
      $('.home').click();
    }
  };
  $('#usersettingsForm').ajaxForm(options);
})
</script>        <!-- User Profile -->
        <div class="row user-profile">
            <div class="large-12 columns user-profile-top">
                <h6><a href="#" title="Buy Rayku Points" class="rayku-points">0RP</a></h6>
                <h5><?php echo $user[0]["username"];?></h5>
            </div>
            <div class="large-12 columns user-rayku-points">
                <form class="buy-rayku-points custom" name="buy_rayku_points" action="/paypal.php" method="post">
                    <div class="row">
                        <div class="large-3 columns ask-q">
                            <h5>Buy Rayku Points</h5>
                        </div>
                        <div class="large-6 columns">
                            <label for="customDropdown1">You have <span class="rpoints">0</span> Rayku Points. Buy Some More.</label>
                            <select id="customDropdown1" class="large" name="amount">
                                <option DISABLED>Points</option>
                                <option value="5">500 Points for $5</option>
                                <option value="10">1000 Points for $10</option>
                                <option value="25">2500 Points for $25</option>
                                <option value="50">5000 Points for $50</option>
                                <option value="100">10000 Points for $100</option>
                            </select>
                        </div>
                        <div class="large-3 columns">
                        	<input type="hidden" name="loginid" value="3" />
                            <input type="submit" class="bbutton" value="Buy">
                        </div>
                    </div>
                </form>
            </div>
            <div class="large-3 columns user-profile-image">
                <img src="<?php echo $base_url; ?>images/profile_image_blank.jpg">
            </div>  
            <div class="large-9 columns user-profile-info">
                <ul class="user-profile-items">
                    <li>
                        <a href="#" class="raphael edit-tool">></a>
                        <form class="user-profile-edit-form" name="name">
                            <label>Name</label>
                            <input type="text" placeholder="<?php echo $user[0]["fname"];?>" name="current_first_name" class="form-field">
                            <input type="text" placeholder="<?php echo $user[0]["lname"];?>" name="current_last_name" class="form-field">
                            <input type="submit" class="bbutton" value="Save">
                            <a href=# class="close-edit">x</a>
                        </form>
                        <h4><span class="name edit"><?php echo $user[0]["fname"];?> <?php echo $user[0]["lname"];?></span></h4>
                    </li>
                    <li>
                        <a href="#" class="raphael edit-tool">></a>
                        <form class="user-profile-edit-form" name="education">
                            <label>Education</label>
                            <input type="text" placeholder="<?php echo $user[0]["school_year"];?>" name="current_grade" class="form-field">
                            <input type="submit" class="bbutton" value="Save">
                            <a href=# class="close-edit">x</a>
                        </form>
                        <h5><span class="education edit"><?php echo $user[0]["school_year"];?></span></h5>
                    </li>
                    <li>
                        <a href="#" class="raphael edit-tool">></a>
                        <form class="user-profile-edit-form" name="school">
                            <label>University</label>
                            <input type="text" placeholder="<?php echo $user[0]["school"];?>" name="current_school" class="form-field">
                            <input type="submit" class="bbutton" value="Save">
                            <a href=# class="close-edit">x</a>
                        </form>
                        <span>School:</span> <span class="school edit"><?php echo $user[0]["school"];?></span>
                    </li>
                    <li>
                        <a href="#" class="raphael edit-tool">></a>
                        <form class="user-profile-edit-form" name="degree">
                            <label>Degree</label>
                            <input type="text" placeholder="<?php echo $user[0]["degree"];?>" name="current_degree" class="form-field">
                            <input type="submit" class="bbutton" value="Save">
                            <a href=# class="close-edit">x</a>
                        </form>
                        <span>Degree:</span> <span class="degree edit"><?php echo $user[0]["degree"];?></span>
                    </li>
                                        <li>
                        <a href="#" class="raphael edit-tool">></a>
                        <form class="user-profile-edit-form" name="bio">
                            <label>Specialty</label>
                            <textarea class="form-field" name="current_bio"><?php echo $user[0]["about"];?></textarea>
                            <input type="submit" class="bbutton" value="Save">
                            <a href=# class="close-edit">x</a>
                        </form>
                        <span>Specialty:</span> <span class="bio edit"><?php echo $user[0]["about"];?></span>
                    </li>
                    <li>
                        <?php
                            if($isTutor){
                                echo '<span class="tutor edit"><a class="public-tutor-link" href="'.$base_url.'profile/'.$user[0]["username"].'"><span class="raphael">7</span>Tutor Public Profile</a></span>';
                            }
                        ?>
                    </li>
                </ul>
                <ul class="user-profile-buttons">
                    <li><a href=# class="bbutton edit-button"><span class="raphael">></span>Edit Profile</a></li>
                    <li>
                      <form name="master-form" method="post" class="user-profile-master-form" action="<?php echo $base_url;?>editProfile">
                        <input type="text" id="first_name" name="first_name" required="required" maxlength="255" value="Sam" />
                        <input type="text" id="last_name" name="last_name" required="required" maxlength="255" value="Haruna" />
                        <input type="text" id="school" name="school" required="required" maxlength="255" value="Dalhousie University" />
                        <input type="text" id="grade" name="grade" required="required" maxlength="255" value="Undergraduate" />
                        <input type="text" id="degree" name="degree" required="required" maxlength="255" value="Computer Science" />
                        <input type="text" id="bio" name="bio" required="required" maxlength="255" value="Trigonometry, Algebra" />
                        <input type="hidden" id="_token" name="_token" value="0fbe7c653970db5ca22dfa44ec0cbb06a1eb584c" />
                        <input type="submit" value="Done Editing" class="bbutton done-button">
                      </form>
                    </li>
                </ul>
            </div>
            <script>
            $(function(){
                var change = 0;
                var valarr = []; //declare an empty array
                //On submitting each individual form
                $('form.user-profile-edit-form').on('submit', function(event){
                    event.preventDefault(); //prevent reloading page by clicking submit
                    var current_form_name = $(this).attr('name'); //get the current form name

                    //for each input field with class .form-field within the current form
                    $('form[name="'+current_form_name+'"] .form-field').each(function(){
                        var field_value = $(this).val(); //get the field value
                        var field_name = $(this).attr('name').replace("current_", ""); //get the field name and split it to get the appropriate identifier

                        if(field_value !== ""){
                            //set the equivalent input field in master form to the value of the current input field
                            $('form.user-profile-master-form input[name="'+ field_name +'"]').val(field_value);
                            valarr.push(field_value); //push the value into an array
                        }
                    });

                    // To display on the page if the form had one or more fields
                    if(valarr.length > 1){
                        $('.'+current_form_name).html(valarr.join(", "));
                    }
                    else{
                        $('.'+current_form_name).html(valarr.join(""));
                    }
                    //Hide the current form
                    $(this).hide(100);
                    valarr = [];
                    return false;
                });

                //When done profile editing, submit the form. Should be done via Ajax
                /*$('form.user-profile-master-form').ajaxForm(function() { 
                	valarr = [];
                });*/

                //slide down rayku points form
                $('.rayku-points').click(function(event){
                    event.preventDefault();
                    $('.user-rayku-points').slideToggle();
                });
            });
            </script>
            <!--End Profile Info-->
            <div class="large-12 columns user-divider">
            </div>
            <!--Ask Form-->
            <div class="large-12 columns ask">
              <form class="custom">
                <div class="row">
                  <div class="large-3 columns ask-q">
                    <?php
                        if($isTutor){
                            echo "<h5>Tutor Profile</h5>";
                        }
                        else{
                            echo "<h5>Profile</h5>";
                        }
                    ?>
                  </div>
                  <div class="large-3 columns school">
                    <!--
                    <select id="schoolSelect" class="medium" name="school">
                      <option>Choose Institution</option>
                      <option value="high school" name="selectlevel">High School</option>
                      <option value="university" name="selectlevel">University</option>
                    </select>
                    //-->
                  </div>

                  <div class="large-3 columns institution" id="placeholder">
                    <!--
                    <select id="instSelect" class="medium" disabled>
                        <option value="Choose" name="choose" id="choose">Select An Institution</option>
                    </select>
                    //-->
                  </div>

                  <div class="large-3 columns institution" id="highschool">
                    <!--
                    <select name="highschool" class="medium" disabled>
                        <option value="Choose" name="choose" id="choose">Choose Grade</option>
                        <option value="grade 1">Grade 1</option>
                        <option value="grade 2">Grade 2</option>
                        <option value="grade 3">Grade 3</option>
                        <option value="grade 4">Grade 4</option>
                        <option value="grade 5">Grade 5</option>
                        <option value="grade 6">Grade 6</option>
                        <option value="grade 7">Grade 7</option>
                        <option value="grade 8">Grade 8</option>
                        <option value="grade 9">Grade 9</option>
                        <option value="grade 10">Grade 10</option>
                        <option value="grade 11">Grade 11</option>
                        <option value="grade 12">Grade 12</option>
                    </select>
                    //-->
                  </div>
                  <div class="large-3 columns institution" id="university">
                    <!--
                    <select name="university" class="medium" disabled>
                        <option value="Choose" name="choose" id="choose">Choose Year</option>
                        <option value="year 1">Year 1</option>
                        <option value="year 2">Year 2</option>
                        <option value="year 3">Year 3</option>
                        <option value="year 4">Year 4</option>
                        <option value="year 5">Year 5</option>
                    </select>
                    //-->
                  </div>

                  <div class="large-3 columns category">
                    <select id="categorySelect" class="medium" name="category">
                      <option>Choose Category</option>
                      <option value="General Math">General Math</option>
                      <option value="Pre-Algebra">Pre-Algebra</option>
                      <option value="Geometry">Geometry</option>
                      <option value="Algebra">Algebra</option>
                      <option value="Trigonometry">Trigonometry</option>
                      <option value="Calculus">Calculus</option>
                      <option value="Statistics">Statistics & Probability</option>
                      <option value="Advanced Math">Advanced Math</option>
                    </select>
                  </div>

                  <div class="large-12 columns question-container">
                    <div class="input-container">
                      <input type="text" placeholder="What is your question? Or view online tutors" name="ask" id="base_question">
                    </div>
                    <input type="submit" class="bbutton" value="View Broadcast Sessions" name="aSubmit">
                  </div>
                </div>
              </form>
            </div>
            <!--End Ask Form-->
        </div>

      
    <!--Tutor List-->
    <div class="row tutor-list">
     Loading ...
    </div>
  </div>
  <!--End Tutor List-->
  </div>