@extends('layouts.master')
@section('content')

<div class="padding-top-180">
<div class="login">
 <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-4">
						 <div class="col-md-12 text-center">
							<h3>Login to your Account!</h3>
						 </div>
					</div>
                   <form action="" method="post" name="login">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Username</label>
                              <input type="username" name="email"  class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="form-group">
                            <a class="text-right" href="#" id="signup">Forgot Password?</a>
                           </div>
                       </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-danger tx-tfm">Login</button>
                           </div>
                           <div class="col-md-12 ">
                           </div>
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="#" id="signup">Sign up here</a></p>
                           </div>
                        </form>                
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@stop