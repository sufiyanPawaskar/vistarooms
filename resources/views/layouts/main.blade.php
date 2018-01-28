<!DOCTYPE html>
<html>
<head>
	<title>Vista Rooms</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap-select.min.css">
	<link rel="stylesheet" href="css/app.css">	
	
</head>
<body>
	@include('component.navbar')
	
	

	<section>
		<div class="container">
			<h1 class="color-manual main-heading">Refer and earn upto Rs. 1,50,000</h1>
			<h4 class="color-manual" style="font-family: Avenir;font-size:20px;padding-bottom: 25px;">Transfer amount to your payTM account or use it to make bookings! Learn more</h4>
	
		</div>

		<div>
			<img src="image/background_image.png" style="position:relative" class="img img-responsive banner">
			
			<div class=" form-banner col-lg-4 col-lg-offset-8 col-md-4 col-md-offset-8 col-sm-12 col-xs-12" style="">
				<div class="panel panel-default">
	 				@guest
	 				<div class="panel-heading text-center panel-hading-modified">Signup &amp; Generate Referal Code</div>
	 				<form method="POST" action="{{ route('register') }}">
	 					{{ csrf_field() }}
	  				<div class="panel-body panel-body-modified">
	  					

	  					<div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
                			
                			<div class="icon-addon addon-md">
                    			<input name="firstname" type="text" placeholder="Enter your firstname" class="form-control" id="firstname" value="{{ old('firstname') }}" required>

                    			<label for="firstname" class="glyphicon" rel="tooltip" title="First name"><img src="image/icon/user_icon.png"></label>
                			</div>
                			@if ($errors->has('firstname'))
                                    <span class="help-block">
                                        {{ $errors->first('firstname') }}
                                    </span>
                            @endif

                		</div>

                		<div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                			<div class="icon-addon addon-md">
                    			<input name="lastname" type="text" placeholder="Enter your lastname" class="form-control" value="{{ old('lastname') }}" required>
                    			<label for="lastname" class="glyphicon" rel="tooltip" title="Last name"><img src="image/icon/user_icon.png"></label>
                			</div>

                			@if ($errors->has('lastname'))
                                    <span class="help-block">
                                        {{ $errors->first('lastname') }}
                                    </span>
                            @endif

            			</div>


            			<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                			<div class="icon-addon addon-md">
                    			<input name="email" type="text" placeholder="Enter your email address" class="form-control" id="email" value="{{ old('email') }}" required>
                    			<label for="email" class="glyphicon" rel="tooltip" title="Email"><img src="image/icon/email_icon.png"></label>
                			</div>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        {{ $errors->first('email') }}
                                    </span>
                            @endif

            			</div>


            			<div class="form-group {{ $errors->has('number') ? ' has-error' : '' }}">
                			<div class="icon-addon addon-md">
                    			<input name="number" type="text" placeholder="Enter your number" class="form-control" id="number" value="{{ old('number') }}" required>
                    			<label for="number" class="glyphicon" rel="tooltip" title="Number"><img src="image/icon/number_icon.png"></label>
                			</div>
	                        @if ($errors->has('number'))
                                    <span class="help-block">
                                        {{ $errors->first('number') }}
                                    </span>
                            @endif

            			</div>
            			
            			<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                			<div class="icon-addon addon-md">
                    			<input name="password" type="password" placeholder="Enter password" class="form-control" id="password" required>
                    			<label for="password" class="glyphicon" rel="tooltip" title="Password"><img src="image/icon/lock_icon.png"></label>
                    			
                			</div>

                			@if ($errors->has('password'))
                                    <span class="help-block">
                                        {{ $errors->first('password') }}
                                    </span>
                            @endif
            			</div>
            			
                        <button type="submit" style="width:100%;" class="btn btn-default center-block red-btn">Sign-up For Free</button>
                        
                        <p style="margin-top:10px;">By proceeding you are agreeing with our <br> <a href="#" class="tac">Terms and Conditions</a>	</p>
            			
	  				</div>
	  			</form>
	  			@else
	  			<div class="panel-heading text-center panel-hading-modified">Apply Refferal Code</div>
	 				<form method="GET" action="{{ route('checkReferalCode') }}">
	 					{{ csrf_field() }}
	  				<div class="panel-body panel-body-modified">
	  					

	  					<div class="form-group {{ $errors->has('referal_code') ? ' has-error' : '' }}">
                				@if(Session::has('refer-status') && Session::get('refer-status')=='Valid Coupon')
									<h5 class="text-center" style="color:green">{{Session::get('refer-status') }}</h5>
								@else
									<h5 class="text-center" style="color:red">{{Session::get('refer-status') }}</h5>
								@endif
                			<div class="icon-addon addon-md">
                    			<input name="rcode" type="text" placeholder="Enter Referal Code" class="form-control" id="referal_code" value="{{ old('referal_code') }}" required>

                    			<label for="referal_code" class="glyphicon" rel="tooltip" title="Referal Code"><img src="image/icon/user_icon.png"></label>
                			</div>
                			@if ($errors->has('referal_code'))
                                    <span class="help-block">
                                        {{ $errors->first('referal_code') }}
                                    </span>
                            @endif
                		</div>
                        <button type="submit" style="width:100%;" class="btn btn-default center-block red-btn">Apply Code</button>
                		</div>
	  			</form>
	  			@endguest
				</div>
			</div>

		</div>
	</section>


	<section style="padding:15px 0px;">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<h1 class="color-manual text-center" style="font-family: Avenir;font-size:35px;font-weight: bold;margin: 50px auto">
						@guest
						{{'How Does The Referral Program Work?'}}
						@else
						{{'YOUR REFERRAL CODE : '.Auth::user()->referal_code}}
						@endguest
				</h1>
				</div>

				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<img src="image/mail_icon.png" class="img img-responsive center-block pad-20">
					<h4 class="text-center part-title" >Refer Your Friend And Family</h4>
					<h5 class="text-center pad-20 part-desc" >Share your referal link <br>via email & social media</h5>

				</div>
				
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<img src="image/hand_icon.png" class="img img-responsive  center-block pad-20">
					<h4 class="text-center part-title"  >Earn Money On Booking</h4>
					<h5 class="text-center pad-20 part-desc"  >If your friend book with us, you<br> earn flat Rs. 1200 on each booking</h5>


				</div>
				
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
					<img src="image/wallet_icon.png" class="img img-responsive  center-block pad-20">
					<h4 class="text-center part-title" >Transfer Or Reedem Rewards</h4>
					<h5 class="text-center pad-20 part-desc"  >Transfer rewardss to payTM or use them to make bookings</h5>

				</div>
			</div>
		</div>
	</section>

	<section style="padding:15px 0px;background-color:#F7F7F9 ">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<h1 class="color-manual text-center" style="font-family: Avenir;font-size:35px;font-weight: bold;margin: 50px auto 18px auto">We Have 150,000+ Happy Guests</h1>
					<h5 class="text-center" style="font-family: Avenir;color:#414A4C99;font-size:17px;" >We trive to make long-lasting memories for our guests.<br>Your friend and family are in safe hands.</h5>
				</div>

				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12" style="padding:0px">
					<img src="image/customers/customers_1.png" class="img img-responsive center-block pad-20">
				</div>
				
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12" style="padding:0px">
					<img src="image/customers/customers_2.png" class="img img-responsive  center-block pad-20">
				</div>
				
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12" style="padding:0px">
					<img src="image/customers/customers_3.png" class="img img-responsive  center-block pad-20">
				</div>
			</div>
		</div>
	</section>

	<section style="padding:15px 0px;">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<h1 class="color-manual text-center" style="font-family: Avenir;font-size:35px;font-weight: bold;margin: 50px auto 18px auto">Feature by all reputed Media Houses</h1>
				</div>

				<div class=" col-md-offset-1 col-lg-offset-1 col-md-2 col-lg-2 col-xs-12 col-sm-12">
					<img src="image/media_house/times_of_india.png" class="img img-responsive center-block pad-20">
				</div>
				
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
					<img src="image/media_house/india_today.png" class="img img-responsive  center-block pad-20">
				</div>
				
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
					<img src="image/media_house/bussiness_standard.png" class="img img-responsive  center-block pad-20">
				</div>

				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
					<img src="image/media_house/your_story.png" class="img img-responsive  center-block pad-20">
				</div>

				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
					<img src="image/media_house/inc-42.png" class="img img-responsive  center-block pad-20">
				</div>
			</div>
		</div>
	</section>

	<section style="padding:15px 0px;background-color:#F7F7F9 ">
		<div class="container">
			<div class="row">
				
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 pad-20">
					<div class="well" style="background-color: #fff;margin-bottom: 0px;">
					<h5 class="text-left" style="font-family: Avenir;color:#404A4C;font-size:20px;font-weight: bold" >Follow us</h5>
					<h6 class="text-left" style="font-family: Avenir;color:#404A4C;">See what we're upto, promotions and more</h6>
					
						<a href="#">
							<img src="image/icon/facebook_icon.png" class="inline-img img img-responsive">
						</a>
					
						<a href="#">
							<img src="image/icon/twitter_icon.png" class="img inline-img img-responsive">
						</a>
					
						<a href="#">
							<img src="image/icon/instagram_icon.png" class=" inline-img img img-responsive">

						</a>
					
						<a href="#">
							<img src="image/icon/linkedin_icon.png" class="img  inline-img img-responsive">
							
						</a>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<section style="padding-top:30px;">
		<div class="top-border nopadding">
				<hr>
			<div class="container pad-30">
				<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 pad-20">
					
					<div class="col-md-2">
					<img src="image/icon/home.png" class=" img img-responsive width-40 inline-block">
					</div>

					<div class="col-md-10 nopadding">
						<div class="text inline-block">
							1200+ Holiday Homes				
						</div>
						<p class="text gray-color right-padding-85">
							Unique Properties that are listed only on Vista Rooms
						</p>
					</div>
				</div>

				<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 pad-20 border-left">
					
					<div class="col-md-2">
					<img src="image/icon/lock.png" class=" img img-responsive width-40 inline-block">
					</div>

					<div class="col-md-10 nopadding">
						<div class="text inline-block">
							100% Customer protection			
						</div>
						<p class="text gray-color right-padding-85">
							Hassle-free payment process and a cutomer-first approach
						</p>
					</div>
				</div>

				<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 pad-20 border-left" style="padding-bottom: 40px;">
					
					<div class="col-md-2">
					<img src="image/icon/call.png" class=" img img-responsive width-40 inline-block">
					</div>

					<div class="col-md-10 nopadding">
						<div class="text inline-block">
							24/7 Customer support				
						</div>
						<p class="text gray-color right-padding-85">
							Fastest turnaround time to resolve queries and issues
						</p>
					</div>
				</div>
			</div>
			<div class="container pad-30 footer">
				
				<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 pad-20">
					<div class="form-group">
                			<div>
                    			<select class="selectpicker">
  									<option>Dummy</option>
  									<option>Dummy</option>
  									<option>Dummy</option>
								</select>
                			</div>
                	</div>
                	<div class="form-group">
                			<div>
                    			<select class="selectpicker">
  									<option>Dummy</option>
  									<option>Dummy</option>
  									<option>Dummy</option>
								</select>
                			</div>
                	</div>
				</div>

				<div class="col-md-3 col-sm-6">
				        <h4 class="sub-heading">Vista Rooms</h4>
				        <ul class="footer-ul">
				          <li><a href="#"> About us</a></li>
				          <li><a href="#"> Terms of Services</a></li>
				          <li><a href="#"> Press &amp; Media</a></li>  
				          <li><a href="#"> Vista blog</a></li>    
				          <li><a href="#"> FAQs</a></li> 
				        </ul>
			     </div>

			     <div class="col-md-3 col-sm-6">
				        <h4 class="sub-heading">Get in touch</h4>
				        <ul class="footer-ul">
				          <li><a href="#"> Partner with us</a></li>
				          <li><a href="#"> Connect with us</a></li>
				          <li><a href="#"> partnership@vistrooms.com</a></li>  
				          <li><a href="#"> +91 7676 879897</a></li>
				        </ul>
			     </div>

			     <div class="col-md-3 col-sm-6">
				        <h4 class="sub-heading">Vista Culture</h4>
				        <ul class="footer-ul">
				          <li><a href="#"> Our team</a></li>
				          <li><a href="#"> Memory Videos</a></li>
				        </ul>
			     </div>
			</div>
		</div>

		<div class="container">
  			<hr>
  			<div class="row">
  				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  					<div class="sub-footer">
  						<img class="footer-img-logo" src="image/footer_logo.png" class="img-responsive"> Stay Vista Pvt. Ltd.
  					</div>
  				</div> 

  				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  					<ul class="pull-right sub-footer-ul">
  						<li>
  							<a class="link" href="#" >Terms</a>
  						</li>
  						<li>
  							<a class="link" href="#" >Privacy</a>
  						</li>
  						<!-- <li>
  							<a href="#">Site Map</a>
  						</li> -->
  						<li class="sm">
  							<a  href="#"><img src="image/icon/facebook_footer.png" class="sub-footer-img img-responsive"> </a>
  						</li>
  						<li class="sm">
  							<a  href="#"><img src="image/icon/twitter_footer.png" class=" sub-footer-img img-responsive"> </a>
  						</li>
  						<li class="sm">
  							<a  href="#"><img src="image/icon/instagram_footer.png" class="sub-footer-img img-responsive"> </a>
  						</li>
  					</ul>
  				</div> 

  			</div>
  			</div>

	</section>

	<!-- login modal start -->

	<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" style="border-radius: 0px;">
        <div class="modal-header">
          <button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         	
        <form method="POST" action="{{ route('login') }}">
        	{{ csrf_field() }}

        	<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
      			<div class="">
        			<input name="email" type="text" class="form-control modal-input" placeholder="Email Address" value="{{ old('email') }}" required>
        			<span class="glyphicon form-control-feedback"><i class="fa fa-black fa-envelope-o" aria-hidden="true"></i></span>
      			</div>
      			@if ($errors->has('email'))
                	<span class="help-block">
                    	{{ $errors->first('email') }}
                    </span>
                @endif

    		</div>

    		<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
      			<div class="">
        			<input type="password" class="form-control modal-input" placeholder="Password"  name="password" required>
        			<span class="glyphicon form-control-feedback"><i class="fa fa-black fa-user-o" aria-hidden="true"></i></span>
      			</div>
      			@if ($errors->has('password'))
                	<span class="help-block">
                    	{{ $errors->first('password') }}
                    </span>
                @endif
    		</div>

    		<div class="checkbox">
                    <input id="checkbox1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="checkbox1">Remember me</label>
            </div>
                    
            <a href="{{ route('password.request') }}" class="tac pull-right" style="padding-top: 10px;">Forgot password?</a>

    		<div class="form-group">
      			<div class="">
        			<button type="submit"  class="btn btn-block red-btn sign-in-btn">Login</button>
      			</div>
    		</div>
		
		</form>

        </div>
        <div class="modal-footer">
        	<label class="pull-left" style="padding-top:7px;font-weight: normal;">Don't have an account?</label>
          <button href="{{ route('register') }}" type="button" class="btn btn-default red-btn sign-in-btn" >Sign up</button>
        </div>
      </div>
    </div>
  	</div>
<!-- login modal end -->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script> 

</body>
</html>