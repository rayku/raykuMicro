<header>
        <div class="inside">
                <a href="<?php echo $base_url;?>" id="logo"><img src="<?php echo $base_url; ?>images/logo.png" alt="" /></a>
                
                <?php
                    if($logged_in){
                        echo'<nav><a href=# class="notification" data-reveal-id="connectNotifModal"><span class="raphael">[</span><span class="notif-count">0</span></a>
                        <a href=# class="logged-in-as">Logged in as samrock06</a> 
                        <div class="submenu" id="submenu">
                            <ul class="submenu-item">
                                <li><a class="home" href=#><span class="raphael">L</span>Home</a></li>
                                                        <li><a class="practice" href="http://mathcentre.rayku.com:8080/standalone" target="_blank"><span class="raphael">b</span>Practice Whiteboard</a></li>
                                                        <li><a class="broadcast" href=#><span class="raphael">Æ</span>Broadcast Session</a></li>
                                <li><a class="settings" href=#><span class="raphael">`</span>Settings</a></li>
                                <li><a class="logout" href="'.$base_url.'logout"><span class="raphael">v</span>Logout</a></li>

                            </ul>
                        </div></nav>';
                    }
                    else{
                        echo '<nav class="logged_out"><a href="#" class="ask-login-button" data-reveal-id="loginModal">Login</a>
                        <a href="#" class="signup-user">Signup</a>
                        <a href="'.$base_url.'become-a-tutor">Become a Tutor</a></nav>';
                    }
                ?>
                
                    </div>
    </header>
<div class="dashboard">
        <!--Sidebar-->
        <div class="large-3 columns sidebar">
            <div class="row tutor-sidebar">
                <div class="small-12 columns tutor-label profile-sidebar">
                    <ul>
                        <li>
                            <span class="labels">Tutor Since </span> <span class="bio edit">2013-04-10</span>
                        </li>
                        <li>
                            <span class="labels">436</span><span class="bio edit"> Tutoring Sessions</span>
                        </li>
                        <li>
                            <span class="labels">Last Online</span> <span class="bio edit">2013-04-17 19:09:56</span>
                        </li>
                    </ul>
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
    <div class="large-9 columns main-content">
    <!-- User Profile -->
        <div class="row user-profile">
            <div class="large-12 columns user-profile-top">
                <h6><a href="#" title="Buy Rayku Points" class="rayku-points">0RP</a></h6>
                <h5>samrock06</h5>
            </div>
            <div class="large-3 columns user-profile-image">
                <img src="<?php echo $base_url;?>images/profile_image_blank.jpg">
            </div>  
            <div class="large-9 columns user-profile-info">
                <ul class="user-profile-items">
                    <li>
                        <h4><span class="name edit">Sam Haruna</span> <span class="tutor-rating">4.3</span></h4>
                    </li>
                    <li>
                        <h5><span class="education edit">Undergraduate</span></h5>
                    </li>
                    <li>
                        <span class="school edit">Dalhousie University</span>
                    </li>
                    <li>
                        <span class="degree edit">Computer Science</span>
                    </li>
                    <li>
                        <span>Specializes in </span> <span class="bio edit">Trigonometry, Algebra</span>
                    </li>
                    
                    <li>
                        <span>Charges a rate of </span> <span class="bio edit">40 RP/Min</span>
                    </li>
                </ul>
            </div>
            <!--End Profile Info-->
            <div class="large-12 columns user-divider">
            </div>
            <!--Ask Form-->
            <div class="large-12 columns ask">
              <form class="custom">
                <div class="row">
                    <div class="large-3 columns ask-q">
                        <h5>Tutor Profile</h5>
                    </div>
                </div>
              </form>
            </div>
            <!--End Ask Form-->
        </div>

        <div class="row public-profile-sections">
            <div class="large-12 columns">
                <div class="section-container tabs" data-section="tabs">
                    <section class="about">
                        <p class="title" data-section-title><a href="#panel1">About Me</a></p>
                        <div class="content" data-slug="panel1" data-section-content>
                            <p>Section 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </section>
                    <section class="reviews">
                        <p class="title" data-section-title><a href="#panel2">Reviews</a></p>
                        <div class="content" data-slug="panel2" data-section-content>
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="large-12 columns">
                                            <h6>Fran Ken Stein Says</h6>
                                        </div>
                                        <div class="large-12 columns">
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="large-12 columns">
                                            <h6>Nick Agopoulos Says</h6>
                                        </div>
                                        <div class="large-12 columns">
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div data-section-region class="section contact">
                        <p class="title" data-section-title><a href="#panel3">Contact Me</a></p>
                        <div class="content" data-slug="panel3" data-section-content>
                            <form>
                                <div class="row collapse">
                                    <div class="large-2 columns">
                                        <label class="inline">Your Name</label>
                                    </div>
                                    <div class="large-10 columns">
                                        <input type="text" id="yourName" placeholder="Jane Smith">
                                    </div>
                                </div>
                                <div class="row collapse">
                                    <div class="large-2 columns">
                                        <label class="inline"> Your Email</label>
                                    </div>
                                    <div class="large-10 columns">
                                        <input type="text" id="yourEmail" placeholder="jane@smithco.com">
                                    </div>
                                </div>
                                <label>Message</label>
                                <textarea rows="4" placeholder="Want to set up a lesson? Send Sam a note about what you you need help with and set up a time to meet."></textarea>
                                <button type="submit" class="radius button">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>