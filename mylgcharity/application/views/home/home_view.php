<div class="row">
   <div class="span3" id="left-bar">
    	<h1 class="testimonial-title"> Testimonials </h1>
      	<blockquote class="testominal" id="testimony-box"><p class="testimony-box-content">"A big surprise and a great start to the week. I thought it was scam until I got a confirmation that I have won. Got the credit really quickly and thank you."</p><p><small> Chinedu from Aba</small></p></blockquote>
       	<blockquote class="testominal" id="testimony-box"><p class="testimony-box-content">"I just wanted to say a huge thanks for the credit, it went a long way."</p><p><small> Kenny from Ikeja</small></p></blockquote>
      	<blockquote class="testominal" id="testimony-box"><p class="testimony-box-content">"Thank you for the #1000 airtime, the credit came at the right time. I was able to call the people that matters when my wife was in labour and I needed to call for help in the middle of night"</p><p><small> Ahmed from Ikotun </small></p></blockquote>
      	<blockquote class="testominal" id="testimony-box"><p class="testimony-box-content">"I never believe I can win anything, when I heard about a site where I can win free credit I thought it was a scam. The #750 credit went a long way."</p><p><small> Dotun from Ekiti </small></p></blockquote>
    </div>
    <div class="span9" id="right-bar">
    	<div class="rows" id="row-section">
    		<div id="registration_error" class="alert alert-error"> </div>
	    	<div class="span5" id="left-bar-inner">

	    		<h3> Welcome to MY LG Charity <hr> </h3>

	    		<p class="lead" id="about-us"> Founded in 2014, mylgcharity is a charity with clear focus on relieving poverty in Africa. Our mission is to motivate the African society to give ever more effectively and efficient back to ordinary Africans.

We are here to transform the lives of the less privilege for good, very soon you will be able to win great prizes by simply registering your details which will be entered in a draw. Stay in touch with us

Our Mission is investing in People, Communities and the Future by working with Local governments/organizations with the aim of improving the lives of people in Nigeria, Ghana and Zambia. </p>
	    		
	    	</div>

		    	<div class="span3" id="right-bar-inner">

				    <form  id="registration_form" method="post" class="form-horizontal" action="<?=site_url('user/registration')?>">
						  <div class="control-group">
						      <input type="text" name="email"  placeholder="Email">
						  </div>
						   <div class="control-group">
						      <input type="password" name="password" id="inputPassword" placeholder="Password">
						  </div>
						  <div class="control-group">
		      				<input type="password" name="passconf" placeholder="Confirm Password">
		    			  </div>
						  <div class="control-group">
						      <input type="text" name="state" placeholder="State">
						  </div>
						  <div class="control-group">
						      <input type="text" name="localGovernment" placeholder="Local Government">
						  </div>
						  <div class="control-group">
						      <input type="text" name="telephone" placeholder="Telephone Number">
						  </div>
		  				  <div class="control-group">
						      <button type="submit" class="btn">Register</button>
						  </div>
					</form>
				<script>
				$(function(){
					$('#registration_error').hide();
					$('#registration_form').submit(function(evt){

						evt.preventDefault();


						var url = $(this).attr('action');
						var postData = $(this).serialize();
						
						$.post(url, postData, function(o){

							if(o.result == 1){
								alert('Registration Successful');
							}else{
								$('#registration_error').show();
								var output = '<ul>';
								for (var key in o.error){
									var value = o.error[key];
									output+= '<li>' + value + '</li>';
								}
								output+= '</ul>'
								$("#registration_error").html(output).fadeIn();



								setTimeout(function() {
      								$('#registration_error').fadeOut();
								}, 5000);
							}
						}, 'json');
					});
				});
				</script>

			</div>
		</div>

	<div class="clearer"> </div>
	
	<div class="rows" id="row-section">	

			<div class="span2" id="left-bar-inner-sec">
    			<h3 id="featured-title"> Posterity </h3>
    			<p id="featured-content"> This is the new Africa </br> (TINA) </p></br>
    			<img src="<?=base_url()?>public/img/africaaaa.png" alt="My-lg-Charity"/>
    		</div>
	    	<div class="span2" id="right-bar-inner-sec">
				<h3 id="featured-title"> Projects </h3>
				<p id="featured-content">  Eradicating the poverty gap in the community (Local Government) through provision of basic needs </p>   	
				<img src="<?=base_url()?>public/img/mobile.jpeg" />
			</div>
			<div class="span2" id="right-bar-inner-sec">
				<h3 id="featured-title"> Empowerment </h3>  
				<p id="featured-content"> Building a greater community, creating self awareness and education. </p>   	
				<img src="<?=base_url()?>public/img/empowermentt.png" />

			</div>
	</div>
		
	<div class="clearer"> </div>
	
	<div class="rows" id="row-section">		  	
			<div class="span5" id="left-bar-inner">
				<a class="twitter-timeline" href="https://twitter.com/mylgcharity" data-widget-id="588163056452116481">Tweets by @mylgcharity</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					<div class="fb-comments" data-href="https://www.facebook.com/profile.php?id=100008749721485" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
				</div>
			    
			<div class="span3" id="right-bar-inner">
				<div class="fb-page" data-href="https://www.facebook.com/pages/Mylgcharity/319925068207810?ref=hl" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Mylgcharity/319925068207810?ref=hl"><a href="https://www.facebook.com/pages/Mylgcharity/319925068207810?ref=hl">Mylgcharity</a></blockquote></div></div>

			</div>
	</div>

	</div>

  	</div>
</div>