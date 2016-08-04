 @extends('layouts.master')

@section('title')
    Welcome!
@endsection
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Bootstrap</strong> Login &amp; Register Forms</h1>
                            <div class="description">
                            	<p>
	                            	This is a free responsive <strong>"login and register forms"</strong> template made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>, 
	                            	customize and use it as you like!
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form action="{{ route('signin') }}" method="post">
						            	<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						                	<label for="email">Email</label>
						                	<input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
						            	</div>
						            	<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
						                	<label for="password">Password</label>
						                	<input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
						            	</div>
						            	<button type="submit" class="btn btn-primary">Submit</button>
						             	<input type="hidden" name="_token" value="{{ Session::token() }}">
						            </form>
			                    </div>
		                    </div>
		                
		                	<div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div>
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
				                        <button ype="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Sign me up!</button>
				                        <!-- Modal -->
											<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
											      </div>
											      <div class="modal-body">						       
											            <form action="{{ route('signup') }}" method="post">
											            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
											                <label for="email">Email</label>
											                <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
											            </div>
											            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
											                <label for="name">Nama</label>
											                <input class="form-control" type="text" name="name" id="name" value="{{ Request::old('name') }}">
											            </div>
											            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
											                <label for="password">Password</label>
											                <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
											            </div>
											            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											        	<button type="submit" class="btn btn-primary">Daftar</button>
											            <input type="hidden" name="_token" value="{{ Session::token() }}">
											            </form>
        											</div>										
											      <div class="modal-footer">
											      </div>
											    </div>
											  </div>
											</div>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Made by Anli Zaimi at <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a> 
        					having a lot of fun. <i class="fa fa-smile-o"></i></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        {{ Html::script('assets/js/jquery-1.11.1.min.js') }}
        {{ Html::script('assets/bootstrap/js/bootstrap.min.js') }}
        {{ Html::script('assets/js/jquery.backstretch.min.js') }}
        {{ Html::script('assets/js/scripts.js') }}
        
      