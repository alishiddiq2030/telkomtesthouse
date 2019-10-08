@extends('layout.frontend.master')
@section('content')

<div class="register">
<hr>
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h3>Register</h3></div>
    </div>
    

    <div class="row">
    <div class="col-sm-3"><!--left col-->
      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>
    </div><!--/col-3-->
      
      <div class="col-sm-9">
          <div class="tab-content">
              <h2 class="col-sm">Personal Information</h2>
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">

                    <div class="container">
                      <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                                <label for="first_name"><h4>First name</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                            </div>
                            
                            <div class="col-sm">
                              <label for="last_name"><h4>Last name</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                            </div>
                          </div>
                        </div>

                      <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                              <label for="phone"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter address" title="enter your address if any.">
                          </div>
                            
                            <div class="col-sm">
                               <label for="mobile"><h4>Phone Number</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                         </div>
                          </div>
                        </div>

                        <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                            
                            <div class="col-sm">
                               <label for="email"><h4>Alternate Email</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                         </div>
                          </div>
                        </div>

                         <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                             <label for="email"><h4>Facsimile</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                            
                            <div class="col-sm">
                              <label for="email"><h4>Company</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                         </div>
                          </div>
                        </div>

                        <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                             <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                            
                            <div class="col-sm">
                             <label for="password2"><h4>Confirm Password</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                         </div>
                          </div>
                        </div>
                                <br>
                                <!-- <button class="btn btn-lg btn-danger" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset">Back</button> -->
                            </div>
                      </div>
           
               <h2 class="col-sm">Company</h2>
               
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-sm">
                              <label for="first_name"><h4>Select Company</h4></label> 
                                <select class="form-control" name="last_name" id="last_name">
                                  <option></option>
                                  <option></option>
                                </select>
                                <br>
                                <label for="first_name"><h6>*if your company not in list, please tell User Relations DDS 022-457115. Or Registry your company with fill this form bellow</h6></label> 
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-sm">
                                <button class="btn btn-lg btn-danger" type="submit">New Company Form</button>
                            </div>
                      </div>
                      <div class="form-group">
                           <div class="col-sm">
                                <br>
                                <button class="btn btn-lg btn-danger" type="submit"></i> Register</button>
                                <button class="btn btn-lg" type="reset">Back</button>
                            </div>
                      </div>
                </form>
               
            
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
  </div>
    @stop