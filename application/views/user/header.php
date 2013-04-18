<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta charset="utf-8" />
	<title>Rayku</title>
	<link href="<?php echo $base_url;?>stylesheets/normalize.css" type="text/css" rel="stylesheet" media="screen" />
	<link href="<?php echo $base_url;?>stylesheets/foundation.min.css" type="text/css" rel="stylesheet" media="screen" />
	<link href="<?php echo $base_url;?>stylesheets/animation.css" type="text/css" rel="stylesheet" media="screen" />
	
	<?php 
		if($logged_in){
			echo link_tag('stylesheets/innerstyle.css');
		}
		else{
			echo link_tag('stylesheets/style.css');
			echo link_tag('stylesheets/innerstyle.css');
		}
	?>
	<script>
	$(document).ready(function(){
		//Detect if browser is I.E.
		if ( $.browser.msie ) {
		$('body').html('<div data-alert class="alert-box">Rayku works best in Google Chrome and Mozilla Firefox. <a href="#" class="close">&times;</a></div>');
		}
	});
	</script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo $base_url;?>javascripts/jquery_form/jquery.form.js"></script>
	<script src="<?php echo $base_url;?>javascripts/vendor/custom.modernizr.js"></script>
	<script src="<?php echo $base_url;?>javascripts/global.js" type="text/javascript"></script>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600" rel="stylesheet" type="text/css" />

	<script src="<?php echo $base_url;?>javascripts/jquery_poll/lib/jquery.smart-poll.js"></script>
	<script type="text/javascript">
	window.setInterval(function(){
		$.get('/app_dev.php/sessions', function(response, status){
			jQuery.each(response, function() {
				var current_messages = parseInt($('.notif-count').html());
				$('.notif-count').html(response.length);
				var template = $('#connectRow_id_').prop("outerHTML");
				template = template.replace('_name_', this.student.first_name+' '+this.student.last_name);
				template = template.replace('_question_', this.question);
				template = template.replace(/_id_/g, this.id);
				$('#connectNotifModal').append(template);
				$('#connectRow'+this.id).show();
				if(response.length > current_messages){
					$('#connectNotifModal').foundation('reveal', 'open');
				}
				$('.post_session_accept').ajaxForm(function(response) { 
					if(response.success){
						window.location.href = response.redirect;
					}else if(response.success !== false){
						alert(response.message);
					}else{
						alert('an unknown error has occured');
					}
				})
				$('.post_session_deny').ajaxForm(function(response) {
				    if(response.success){
				        $('#connectNotifModal').foundation('reveal', 'close');
				    }
				})
			})
		})
	}, 5000);
	</script>
</head>