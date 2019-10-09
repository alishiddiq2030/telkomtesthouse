@extends('layouts.master')
@section('content')

<div class="padding-top-180">
<div class="register">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h3>Register</h3>
        <hr>
      </div>
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
              <h3 class="col-sm">Personal Information</h3>
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">

                    <div class="container">
                      <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                                <label for="first_name"><h5>First name</h5></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                            </div>
                            
                            <div class="col-sm">
                              <label for="last_name"><h5>Last name</h5></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                            </div>
                          </div>
                        </div>

                      <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                              <label for="phone"><h5>Address</h5></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter address" title="enter your address if any.">
                          </div>
                            
                            <div class="col-sm">
                               <label for="mobile"><h5>Phone Number</h5></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                         </div>
                          </div>
                        </div>

                        <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                              <label for="email"><h5>Email</h5></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                            
                            <div class="col-sm">
                               <label for="email"><h5>Alternate Email</h5></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                         </div>
                          </div>
                        </div>

                         <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                             <label for="email"><h5>Facsimile</h5></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                            
                            <div class="col-sm">
                              <label for="email"><h5>Company</h5></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                         </div>
                          </div>
                        </div>

                        <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                             <label for="password"><h5>Password</h5></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                            
                            <div class="col-sm">
                             <label for="password2"><h5>Confirm Password</h5></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                         </div>
                          </div>
                        </div>
                                <br>
                                <!-- <button class="btn btn-lg btn-danger" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset">Back</button> -->
                            </div>
                      </div>

              <div class="tab-content mt-5 mb-5">
               <h3 class="col-sm">Company</h3>
               
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-sm">
                              <label for="first_name"><h5>Select Company</h5></label> 
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
                                <button class="btn btn-danger" type="submit">New Company Form</button>
                                <button class="btn btn-primary pull-right mb-3" type="submit"></i> Register</button>
                            </div>
                      </div>
                </form>
              </div>
            
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
  </div>
  </div>
    @stop