<head>
    <meta charset="UTF-8" />
    <meta charset="utf-8" />
    <title><?=$title;?></title>
    <?php echo link_tag('stylesheets/normalize.css')."\n";?>
    <?php echo link_tag('stylesheets/foundation.min.css')."\n";?>
    <?php echo link_tag('stylesheets/style.css')."\n";?>
    <?php echo link_tag('stylesheets/animation.css')."\n";?>
        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php echo $base_url;?>javascripts/jquery_form/jquery.form.js"></script>
    <script src="<?php echo $base_url;?>javascripts/vendor/custom.modernizr.js"></script>
    <script src="<?php echo $base_url;?>javascripts/global.js" type="text/javascript"></script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600" rel="stylesheet" type="text/css" />
    <script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
    
    <!--<script>
    $(document).ready(function(){
        //Detect if browser is I.E.
        if ( $.browser.msie ) {
            $('body').html('<div data-alert class="alert-box">Rayku works best in Google Chrome and Mozilla Firefox. <a href="#" class="close">&times;</a></div>');
        }
    });
    </script>-->
    <script type="text/javascript">
        var WRInitTime=(new Date()).getTime();
    </script>
</head>