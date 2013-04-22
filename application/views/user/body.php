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
                        <li><a class="logout" href="<?php echo $base_url;?>logout"><span class="raphael">v</span>Logout</a></li>
                    </ul>
                </div>
                </nav>
                    </div>
    </header>
    
    <div class="dashboard">
    <!--Main Content-->
	<div class="large-9 columns main-content">
        <!--User Settings-->    
        <div class="row user-settings">
    </div>
</div>

        <div class="row user-profile">
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

                  <div class="large-12 columns question-container">
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