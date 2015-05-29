<div class="row">
    <div class="span2" id="left-bar">
      <h1>God father</h1>
    </div>
    <div class="span10" id="right-bar">
    <h1>God father</h1>
    
		<form  id="registration_form" method="post" class="form-horizontal" action="<?=site_url('user/registration')?>">
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Username </label>
		    <div class="controls">
		      <input type="text" name="login" placeholder="Username">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputFirstname">First name</label>
		    <div class="controls">
		      <input type="text" name="fname" id="inputPassword" placeholder="First name">
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputSurname">Surname</label>
		    <div class="controls">
		      <input type="text" name="lname" id="inputSurname" placeholder="Surname">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputLocation">State</label>
		    <div class="controls">
		      <input type="text" name="state" id="inputState" placeholder="State">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputLocalGovernment">Local Government</label>
		    <div class="controls">
		      <input type="text" name="localGovernment" id="inputLocalGovernment" placeholder="Local Government">
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputLocation">Location</label>
		    <div class="controls">
		      <input type="text" name="location" id="inputLocation" placeholder="Location">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputLocation">Telephone Number</label>
		    <div class="controls">
		      <input type="text" name="telephone" id="inputTel" placeholder="Telephone Number">
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputEmail"> Email </label>
		    <div class="controls">
		      <input type="text" name="email" id="inputEmail" placeholder="Email">
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputPassword"> Password </label>
		    <div class="controls">
		      <input type="password" name="password" id="inputPassword" placeholder="Password">
		    </div>
		  </div>
		   <div class="control-group">
		    <label class="control-label" for="inputPassconf"> Confirm Password </label>
		    <div class="controls">
		      <input type="password" name="passconf" id="inputPassconf" placeholder="Confirm Password">
		    </div>
		  </div>
		  <div class="control-group">
		    <div class="controls">
		      <button type="submit" class="btn">Register</button>
		    </div>
		  </div>
		</form>


		<script> 
		$(function(){
			$('#registration_form').submit(function(evt){

				evt.preventDefault();

				var url = $(this).attr('action');
				var postData = $(this).serialize();

				$.post(url, postData, function(o){
					if(o.result == 1) {
						alert('Sucessful');
					}
					else{
						alert('invalid');
					}
				}, 'json');
			});
		});
		</script>

    </div>
  </div>
</div>