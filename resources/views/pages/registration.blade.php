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
          <form class="form" action="##" method="post" id="registrationForm">
            <div class="tab-content">
              <h3 class="col-sm">Personal Information</h3>
              <hr>
              <!-- <form class="form" action="##" method="post" id="registrationForm"> -->

                <div class="container">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm">
                        <label for="first_name"><h5>First name<a class="text-danger">*</a></h5></label>
                        <input type="text" class="form-control" placeholder="first name" required>
                      </div>
                              
                      <div class="col-sm">
                        <label for="last_name"><h5>Last name<a class="text-danger">*</a></h5></label>
                        <input type="text" class="form-control" placeholder="surname" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm">
                        <label for="phone"><h5>Address<a class="text-danger">*</a></h5></label>
                        <input type="text" class="form-control" placeholder="somewhere" required>
                      </div>
                              
                      <div class="col-sm">
                        <label for="mobile"><h5>Phone Number<a class="text-danger">*</a></h5></label>
                        <input type="text" class="form-control" placeholder="+62" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm">
                        <label for="email"><h5>Email<a class="text-danger">*</a></h5></label>
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
                      <div class="col-sm-6">
                        <label for="fax"><h5>Facsimile</h5></label>
                        <input type="text" class="form-control" placeholder="fax" required>
                      </div>
                    </div>
                  </div>
                  <a class="text-danger">(*) must be filled</a>
                </div>
              <!-- </form> -->
            </div>

            <div class="tab-content mt-5 mb-5">
              <h3 class="col-sm">Password</h3>
              <hr>
              <!-- <form class="form" action="##" method="post" id="registrationForm"> -->
                <div class="form-group container">
                  <div class="row">
                    <div class="col-sm">
                      <label for="password"><h5>Password<a class="text-danger">*</a></h5></label>
                      <input type="password" class="form-control" placeholder="password" required>
                    </div>
                        
                    <div class="col-sm">
                      <label for="password2"><h5>Confirm Password<a class="text-danger">*</a></h5></label>
                      <input type="password" class="form-control" placeholder="confirm password" required">
                    </div>
                  </div>
                </div>
                <a class="text-danger p-3">&ensp;(*) must be filled</a>
              <!-- </form> -->
            </div>

            <div class="tab-content mt-5 mb-5">
              <h3 class="col-sm">Company</h3>
              <hr>
              <!-- <form class="form" action="##" method="post" id="registrationForm"> -->
                <div class="form-group">
                      
                  <div class="col-sm">
                    <select class="form-control">
                      @include('includes.dataset')
                    </select>
                    <br>
                    <label for="first_name"><h6>*if your company not in list, please tell User Relations DDS 022-457115. Or Registry your company with fill this form bellow</h6></label> 
                  </div>
                </div>

                <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="new-company-form" style="display: none;">
                          
                        <div class="col_full">
                          <label>Name<a class="text-danger">*</a></label>
                          <input disabled="disabled" type="text" class="form-control input-submit new-company-field" name="comp_name" placeholder="company name" value="" required>
                        </div>
                        <br>
                          
                        <div class="col_full">
                          <label>PLG_ID<a class="text-danger">*</a></label>
                          <input disabled="disabled" type="text" class="form-control input-submit new-company-field" name="comp_plg_id" placeholder="012345678" value="" required>
                        </div>
                        <br>

                        <div class="col_full">
                          <label>Email<a class="text-danger">*</a></label>
                          <input disabled="disabled" type="email" id="comp_email" class="form-control input-submit new-company-field" name="comp_email" placeholder="company@mail.com" value="" required>
                        </div>
                        <br>

                        <div class="col_full">
                          <label>Postal Code</label>
                          <input disabled="disabled" type="text" class="form-control input-submit new-company-field" name="comp_postal_code" placeholder="123456" value="">
                        </div>
                        <br>
                        
                        <div class="col_full">
                          <label>Facsimile</label>
                          <input disabled="disabled" type="text" class="form-control input-submit new-company-field" name="comp_fax" placeholder="01234567890" value="">
                        </div>
                        <br>
                        
                        <div class="col_full">
                          <label>NPWP File<a class="text-danger">*</a></label>
                          <input disabled="disabled" type="file" id="comp_npwp_file" class="form-control input-submit new-company-field" name="comp_npwp_file" placeholder="NPWP File" accept="application/pdf, image/*" required>
                        </div>
                        <br>
                        
                        <div class="col_full">
                          <label>SIUPP Period<a class="text-danger">*</a></label>
                          <input disabled="disabled" type="text" class="date form-control input-submit new-company-field" name="comp_siup_date" placeholder="YYYY-MM-DD" value="" readonly required>
                        </div>
                        <br>
                        
                        <div class="col_full">
                            <label>Quality System Certificate Number</label>
                          <input disabled="disabled" type="text" class="form-control input-submit new-company-field" name="comp_qs_certificate_number" placeholder="012345678901" value="" required>
                        </div>
                        <br>
                        
                        <div class="col_full">
                          <label>Quality System Certificate File<a class="text-danger">*</a></label>
                          <input disabled="disabled" type="file" id="comp_qs_certificate_file" class="form-control input-submit new-company-field" name="comp_qs_certificate_file" placeholder="Quality System Certificate File" accept="application/pdf, image/*" required>
                        </div>
                        <br> 
                      </div>
                    </div>
                      
                    <div class="col-sm-6">
                      <div class="new-company-form" style="display: none;">
                        
                        <div class="col_full">
                          <label>Address<a class="text-danger">*</a></label>
                          <input disabled="disabled" type="text" class="form-control input-submit new-company-field" name="comp_address" placeholder="company address" value="" required>
                        </div>
                        <br>

                        <div class="col_full">
                          <label>NIB<a class="text-danger">*</a></label>
                          <input disabled="disabled" type="text" class="form-control input-submit new-company-field" name="comp_nib" placeholder="012345678" value="" required>
                        </div>
                        <br>

                        <div class="col_full">
                          <label>City<a class="text-danger">*</a></label>
                          <input disabled="disabled" type="text" class="form-control input-submit new-company-field" name="comp_city" placeholder="company city" value="" required>
                        </div>
                        <br>

                        <div class="col_full">
                          <label>Phone Number</label>
                          <input disabled="disabled" type="text" class="form-control input-submit new-company-field" name="comp_phone_number" placeholder="+62" value="" required>
                        </div>
                        <br>
                        
                        <div class="col_full">
                          <label>NPWP Number<a class="text-danger">*</a></label>
                          <input disabled="disabled" type="text" class="form-control input-submit new-company-field" name="comp_npwp_number" placeholder="123456789123" value="" required>
                        </div>
                        <br>
                        
                        <div class="col_full">
                          <label>SIUPP Number</label>
                          <input disabled="disabled" type="text" class="form-control input-submit new-company-field" name="comp_siup_number" placeholder="123456789123" value="" required>
                        </div>
                        <br>
                        
                        <div class="col_full">
                          <label>SIUPP File<a class="text-danger">*</a></label>
                          <input disabled="disabled" type="file" id="comp_siup_file" class="form-control input-submit new-company-field" name="comp_siup_file" placeholder="SIUPP File" accept="application/pdf, image/*" required>
                        </div>
                        <br>
                        
                        <div class="col_full">
                          <label>Quality System Certificate Period<a class="text-danger">*</a></label>
                          <input disabled="disabled" type="text" class="date form-control input-submit new-company-field" name="comp_qs_certificate_date" placeholder="YYYY-MM-DD" value="" readonly required>
                        </div>
                        <br>
                        
                      </div>
                    </div>                     
                  </div>  
                </div>

                <div class="form-group">
                  <div class="col-sm">
                      <div class="text-danger">(*) must be filled</div>
                      <div class="btn btn-danger" id="btn-new-company">New Company Form</div>
                      <button class="btn btn-primary pull-right mb-3" type="submit"></i> Submit</button>
                  </div>
                </div>     
              <!-- </form> -->
            </div>
          </form>
        </div>

      </div><!--/col-9-->
    </div><!--/row-->
  </div>
</div>

  <script type="text/javascript" src="http://telkomtesthouse.co.id/new-layout/js/jquery.js"></script>
  <script src=http://telkomtesthouse.co.id/assets/js/chosen.jquery.min.js></script> 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>    
	<script type="text/javascript">
		$('#cmb-perusahaan').chosen();
		// $('#cmb-ref-perangkat').val(0);
		$('#cmb-perusahaan').trigger("chosen:updated");
		$('.date').datepicker({
	    	dateFormat: 'yy-mm-dd', 
		    autoclose: true,
		    numberOfMonths: 2 ,
		    showButtonPanel: true

		});
	</script>
	<script src="http://telkomtesthouse.co.id/assets/js/app/app-register.js"></script>

@stop