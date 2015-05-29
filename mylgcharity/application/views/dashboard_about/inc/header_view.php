<!DOCTYPE html>
<html>
<head>
	<title>My LG Charity </title>
	<link rel="stylesheet" href="<?=base_url()?>public/css/style.css" />
	<link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.css" />
  <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap-responsive.css" />  
	<script src="<?=base_url()?>public/js/jquery.js"> </script>
	<script src="<?=base_url()?>public/js/bootstrap.js"> </script>
</head>

<body id="bodyColor" onload="_cntDown=setInterval('ShowTimes()',1000)">


<script>
  // http://www.webdeveloper.com/forum/showthread.php?215504-Continuous-24-hour-Countdown
  function ShowTimes() {
    var now = new Date();
    var hrs = 23-now.getHours();
    var mins = 59-now.getMinutes();
    var secs = 59-now.getSeconds();
    var str = '';
      //  str = now.toString();
        str += '<h3 class="nextDraw" style="color:red"> Next Draw </h3> '+hrs+' hours '+mins+' minutes '+secs+' seconds';
  document.getElementById('countdownToMidnight').innerHTML = str;

}
  var _cntDown;
  function StopTimes() {
    clearInterval(_cntDown);
  }
</script>



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span> fg
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">MY LG</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="<?=base_url()?>dashboard">Home</a>
              </li>
              <li class="">
                <a href="#">Charity</a>
              </li>
              <li class="">
                <a href="#">Result</a>
              </li>
              <li class="">
                <a href="#">Contact</a>
              </li>
            </ul>
            <ul class="nav pull-right">
              <li class="">
                <a href="<?=base_url()?>dashboard/logout"> Logout </a>
              </li>
            </ul>
            
          </div>
        </div>
      </div>
    </div>

        <script type="text/javascript">
          $(function(){
          $('#login-form-error').hide();
          $('#login_form').submit(function(evt){

            evt.preventDefault();

            var url = $(this).attr('action');
            var postData = $(this).serialize();

            $.post(url, postData, function(o){

              if(o.result == 1) {

              window.location.href='dashboard';
              }
              else{
                $('#login-form-error').show();
                var output = '<ul>';
                  for(var key in o.error){
                    var value = o.error[key];
                    output+='<li>' + value + '</li>';
                  }
                output+='</ul>';
                 $('#login-form-error').html(output).fadeIn();

                 setTimeout(function(){
                  $('#login-form-error').fadeOut();                  
                 }, 5000);
                }
              }, 'json');
           });
         });
        </script>

        <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>


<header class="jumbotron subhead" id="overview">
    <div id="login-form-error" class="alert alert-error"> </div>
  <div class="container">

    <div class="rows" id="headerTitle">
      <!-- <h1>Welcome to MY LG Charity</h1>
      <!-- <p class="lead" id="">Overview of the project, its contents, and how to get started with a simple template.</p> -->  
    </div>
    <div class="span4" id="leftVoucherDraw">
      <h3 class="nextDrawTitle"> MY LG Charity </h3>
      <div id="countdownToMidnight"> </div>
      <div class="fb-like" data-href="https://www.facebook.com/pages/Mylgcharity/319925068207810?ref=hl" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>
    <div class="span4" id="voucherDraw"><h1 class="winningh1"> Winning Number </h1>
      <h4 class="winningh4"> [ Please login ] </h4> </div>
    <div class="span4" id="rightVoucherDraw"> 
      
      <script>
        $(document).ready(function() {      
          $('.carousel').carousel({
          interval: 5000
        });
      });
      </script>

      <div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img id="sliderImg" src="<?=base_url()?>public/img/woman-phone.png" /></div>
    <div class="item"><img id="sliderImg" src="<?=base_url()?>public/img/hello-africa.png" /></div>
    <div class="item"><img id="sliderImg" src="<?=base_url()?>public/img/vouchers.png" /></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div> </div>
</header>

<div class="wrapper">
  
  <div class="container">