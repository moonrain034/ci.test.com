<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<title>重庆满荣网络后台管理中心</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<link rel="stylesheet" href="/assets/css/style1.css">
</head>
<style>
	* { margin:0; padding:0; }
	body { background:#111; height:100%; }
	img { border:none; }
	#supersized {  display:block; position:fixed; left:0; top:0; overflow:hidden; z-index:-999; height:100%; width:100%; }
	#supersized img { width:auto; height:auto; position:relative; display:none; outline:none; border:none; }
	#supersized.speed img { -ms-interpolation-mode:nearest-neighbor; image-rendering: -moz-crisp-edges; }	/*Speed*/
	#supersized.quality img { -ms-interpolation-mode:bicubic; image-rendering: optimizeQuality; }			/*Quality*/
		
	#supersized li { display:block; list-style:none; z-index:-30; position:fixed; overflow:hidden; top:0; left:0; width:100%; height:100%; background:#111; }
	#supersized a { width:100%; height:100%; display:block; }
	#supersized li.prevslide { z-index:-20; }
	#supersized li.activeslide { z-index:-10; }
 
	#supersized li.image-loading img{ visibility:hidden; }
	#supersized li.prevslide img, #supersized li.activeslide img{ display:inline; }
	#supersized img { max-width: none !important }

	body {
	    background: #f8f8f8;
	    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
	    text-align: center;
	    color: #fff;
	}
	.page-container {
	    margin: 120px auto 0 auto;
	}
	h1 {
	    font-size: 30px;
	    font-weight: 700;
	    text-shadow: 0 1px 4px rgba(0,0,0,.2);
	}
	form {
	    position: relative;
	    width: 305px;
	    margin: 15px auto 0 auto;
	    text-align: center;
	}
	input {
	    width: 270px;
	    height: 42px;
	    margin-top: 25px;
	    padding: 0 15px;
	    background: #2d2d2d; /* browsers that don't support rgba */
	    background: rgba(45,45,45,.15);
	    -moz-border-radius: 6px;
	    -webkit-border-radius: 6px;
	    border-radius: 6px;
	    border: 1px solid #3d3d3d; /* browsers that don't support rgba */
	    border: 1px solid rgba(255,255,255,.15);
	    -moz-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
	    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
	    box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
	    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
	    font-size: 14px;
	    color: #fff;
	    text-shadow: 0 1px 2px rgba(0,0,0,.1);
	    -o-transition: all .2s;
	    -moz-transition: all .2s;
	    -webkit-transition: all .2s;
	    -ms-transition: all .2s;
	}
	input:-moz-placeholder { color: #fff; }
	input:-ms-input-placeholder { color: #fff; }
	input::-webkit-input-placeholder { color: #fff; }
	input:focus {
    	outline: none;
    	-moz-box-shadow:
    	    0 2px 3px 0 rgba(0,0,0,.1) inset,
    	    0 2px 7px 0 rgba(0,0,0,.2);
    	-webkit-box-shadow:
    	    0 2px 3px 0 rgba(0,0,0,.1) inset,
    	    0 2px 7px 0 rgba(0,0,0,.2);
    	box-shadow:
    	    0 2px 3px 0 rgba(0,0,0,.1) inset,
    	    0 2px 7px 0 rgba(0,0,0,.2);
	}
	button {
	    cursor: pointer;
	    width: 300px;
	    height: 44px;
	    margin-top: 25px;
	    padding: 0;
	    background: #ef4300;
	    -moz-border-radius: 6px;
	    -webkit-border-radius: 6px;
	    border-radius: 6px;
	    border: 1px solid #ff730e;
	    -moz-box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.25) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    -webkit-box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.25) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.25) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
	    font-size: 14px;
	    font-weight: 700;
	    color: #fff;
	    text-shadow: 0 1px 2px rgba(0,0,0,.1);
	    -o-transition: all .2s;
	    -moz-transition: all .2s;
	    -webkit-transition: all .2s;
	    -ms-transition: all .2s;
	}
	button:hover {
	    -moz-box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.15) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    -webkit-box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.15) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.15) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	}
	button:active {
	    -moz-box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.15) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    -webkit-box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.15) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    box-shadow:        
	        0 5px 8px 0 rgba(0,0,0,.1) inset,
	        0 1px 4px 0 rgba(0,0,0,.1);
	    border: 0px solid #ef4300;
	}
	.error {
	    display: none;
	    position: absolute;
	    top: 27px;
	    right: -55px;
	    width: 40px;
	    height: 40px;
	    background: #2d2d2d; /* browsers that don't support rgba */
	    background: rgba(45,45,45,.25);
	    -moz-border-radius: 8px;
	    -webkit-border-radius: 8px;
	    border-radius: 8px;
	}
	.error span {
	    display: inline-block;
	    margin-left: 2px;
	    font-size: 40px;
	    font-weight: 700;
	    line-height: 40px;
	    text-shadow: 0 1px 2px rgba(0,0,0,.1);
	    -o-transform: rotate(45deg);
	    -moz-transform: rotate(45deg);
	    -webkit-transform: rotate(45deg);
	    -ms-transform: rotate(45deg);
	}
	.connect {
	    width: 305px;
	    margin: 35px auto 0 auto;
	    font-size: 18px;
	    font-weight: 700;
	    text-shadow: 0 1px 3px rgba(0,0,0,.2);
	}
	.connect a {
	    display: inline-block;
	    width: 32px;
	    height: 35px;
	    margin-top: 15px;
	    -o-transition: all .2s;
	    -moz-transition: all .2s;
	    -webkit-transition: all .2s;
	    -ms-transition: all .2s;
	}
</style>
<body>
<div style="width:728px;height:90px;margin:0 auto;"> </div>
<div class="page-container">
  <h1>Login</h1>
  <form action="<?php echo site_url(array('Login','doLogin'));?>" method="post">
    <input type="text" name="ma_username" class="username" placeholder="Username">
    <input type="password" name="ma_password" class="password" placeholder="Password">
    <button id="submit" name="submit" >Submit</button> 
  </form> 
  <div class="connect"> 
  </div>
</div>
<div align="center">All rights reserved cqzz.net</div>

<!-- Javascript -->  
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/supersized.min.js"></script>
<script>
jQuery(function($){

    $.supersized({

        // Functionality
        slide_interval     : 4000,    // Length between transitions
        transition         : 1,    // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        transition_speed   : 1000,    // Speed of transition
        performance        : 1,    // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)

        // Size & Position
        min_width          : 0,    // Min width allowed (in pixels)
        min_height         : 0,    // Min height allowed (in pixels)
        vertical_center    : 1,    // Vertically center background
        horizontal_center  : 1,    // Horizontally center background
        fit_always         : 0,    // Image will never exceed browser width or height (Ignores min. dimensions)
        fit_portrait       : 1,    // Portrait images will not exceed browser height
        fit_landscape      : 0,    // Landscape images will not exceed browser width

        // Components
        slide_links        : 'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
        slides             : [    // Slideshow Images
                                 {image : '/assets/images/1.jpg'},
                                 {image : '/assets/images/2.jpg'},
                                 {image : '/assets/images/3.jpg'}
                             ]

    });

});
jQuery(document).ready(function() {

    $('.page-container form').submit(function(){
        var username = $(this).find('.username').val();
        var password = $(this).find('.password').val();
      
        if(username == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '27px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.username').focus();
            });
            return false;
        }
          /*
        if(password == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '96px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.password').focus();
            });
            return false;
        }
        */
    });

    $('.page-container form .username, .page-container form .password').keyup(function(){
        $(this).parent().find('.error').fadeOut('fast');
    });

});
</script>
</body>
</html> 