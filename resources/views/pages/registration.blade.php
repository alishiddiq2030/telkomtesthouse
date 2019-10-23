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
                                <input type="text" class="form-control" placeholder="first name" required>
                            </div>
                            
                            <div class="col-sm">
                              <label for="last_name"><h5>Last name</h5></label>
                                <input type="text" class="form-control" placeholder="surname" required>
                            </div>
                          </div>
                        </div>

                      <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                              <label for="phone"><h5>Address</h5></label>
                              <input type="text" class="form-control" placeholder="somewhere" required>
                          </div>
                            
                            <div class="col-sm">
                               <label for="mobile"><h5>Phone Number</h5></label>
                              <input type="text" class="form-control" placeholder="+62" required>
                         </div>
                          </div>
                        </div>

                        <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                              <label for="email"><h5>Email</h5></label>
                              <input type="email" class="form-control" placeholder="you@email.com" required>
                          </div>
                            
                            <div class="col-sm">
                              <label for="email"><h5>Alternate Email</h5></label>
                              <input type="email" class="form-control" placeholder="another@email.com">
                         </div>
                          </div>
                        </div>

                         <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                             <label for="fax"><h5>Facsimile</h5></label>
                              <input type="text" class="form-control" placeholder="fax" required>
                          </div>
                            
                            <div class="col-sm">
                              <label for="company"><h5>Company</h5></label>
                              <input type="text" class="form-control" placeholder="company name" required>
                         </div>
                          </div>
                        </div>

                        <div class="form-group">
                       <div class="row">
                          <div class="col-sm">
                             <label for="password"><h5>Password</h5></label>
                              <input type="password" class="form-control" placeholder="password" required>
                          </div>
                            
                            <div class="col-sm">
                             <label for="password2"><h5>Confirm Password</h5></label>
                              <input type="password" class="form-control" placeholder="confirm password" required">
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
                              <label for="company"><h5>Select Company</h5></label> 
                                <select class="form-control">
                                  @include('includes.dataset')
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

                      <!-- @include('includes.new_form') -->
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