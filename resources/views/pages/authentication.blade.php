@extends('layouts.master')
@section('content')

<div class="padding-top-180">
<div class="login">
 <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form">
					<div class="logo mb-4">
						<div class="col-md-12 text-center">
							<h3>Login to your Account!</h3>
						</div>
               </div>

               <div class="form-label-group mb-3 mt-5" style="padding-left:70px">
                  <input type="text" id="inputEmail" class="form-control" placeholder="Username" style="width:300px" required autofocus>
               </div>
               <div class="form-label-group" style="padding-left:70px">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" style="width:300px" required>
               </div>

				</div>
         </div>
         <div class="d-flex justify-content-center mt-3 login_container">
            <a href="home"><button type="submit" class=" btn btn-block mybtn btn-danger tx-tfm" style="width:100px">Login</button></a>
         </div>
         <div class="mt-4">
            <div class="d-flex justify-content-center links">
               Don't have an account? <a href="register" class="ml-2">Sign Up</a>
            </div>
            <div class="d-flex justify-content-center links">
               <a href="#">Forgot your password?</a>
            </div>
         </div>
		</div>
	</div>
</div>
</div>
<div class="padding-top-180">
<div>
@stop