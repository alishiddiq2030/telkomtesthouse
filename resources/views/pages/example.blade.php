

<body class="stretched">
		<section id="content"> 
			<div class="content-wrap"> 
				<div class="container"> 
					<form id="form-send-feedback" class="nobottommargin"  role="form" method="POST" action="http://telkomtesthouse.co.id/doCheckout">
					<div class="row"> 
						Choose Payment Method
						<br>
						<div class="check-layout">
							<div class="col-md-4">
								<input type="radio" name="payment_method" value="atm" checked> Via ATM/Transfer
							</div>
							<div class="col-md-4">
								<input type="radio" name="payment_method" value="cc"> Via Credit Card
							</div>
						</div>
					</div>	 
					<div class="row metoda">
						<div class="col-md-12 bank-list-header">This is list of bank if you take this method</div>
						<div class="col-md-3" style="font-weight: bold;font-size: 175%;">
							<img src="http://localhost/telkomdds/public/images/bank/mandiri.png">
							BANK MANDIRI
						</div>
						<div class="col-md-9" style="font-weight: bold;font-size: 240%;margin-top: -3%;">
							<br>
							KCP KAMPUS TELKOM BANDUNG
							<br>
							131-0096022712
							<br>
							a/n Divisi RisTI TELKOM
						</div>
					</div> 	
					<div class="row metodb" style="display: none;"> 
						 	<input type="hidden" name="_token" value="xW2stsigm1d2XmOtm86DqpP0WHZjiXmOH4xohYF5">
							<input type="hidden" name="_token" value="xW2stsigm1d2XmOtm86DqpP0WHZjiXmOH4xohYF5">
							<div class="form-process"></div> 
							<div class="col-md-12 form-group"> 
								<input type="text" name="name" id="name" required placeholder="Full Name  *" class="sm-form-control required" />
							</div>   
							<div class="col-md-2 form-group"> 
								<input type="text" name="exp" id="exp" placeholder="Exp  *" required class="required sm-form-control col-md-2" />  
							</div>
							<div class="col-md-2 form-group"> 
								<input type="text" name="cvv" id="cvv" placeholder="CVV *" required size="4" class="required sm-form-control" /> 
							</div>
							<div class="col-md-2 form-group"> 
								<input type="text" name="cvc" id="cvc" placeholder="CVC *" required size="4" class="required sm-form-control" /> 
							</div> 
							<div class="col-md-2 form-group"> 
								<input type="text" name="type" id="type" placeholder="Type *" required size="4" class="required sm-form-control" /> 
							</div>  
							<div class="col-md-12 form-group"> 
								<input type="text" name="no_card" id="no_card" placeholder="Card Number *" required class="required sm-form-control" />
							</div>  
							<div class="col-md-12 form-group"> 
								<input type="text" name="address" id="address" placeholder="Billing Address *" required class="required sm-form-control" />
							</div> 
							<div class="col-md-12 form-group"> 
								<input type="text" name="no_telp" id="no_telp" placeholder="Phone Number *" required class="required sm-form-control" />
							</div> 
							<div class="col-md-12 form-group"> 
								<input type="text" name="email" id="email" placeholder="Email *" required class="required sm-form-control" />
							</div> 
							<div class="col-md-6 form-group"> 
								<input type="text" name="country" id="country" placeholder="National *" required class="required sm-form-control" />
							</div>
							<div class="col-md-6 form-group"> 
								<input type="text" name="province" id="province" placeholder="Province *" required class="required sm-form-control" />
							</div>
							<div class="col-md-6 form-group"> 
								<input type="text" name="city" id="city" placeholder="City *" required class="required sm-form-control" />
							</div> 
							<div class="col-md-6 form-group"> 
								<input type="text" name="postal_code" id="postal_code" placeholder="Postal Code *" required class="required sm-form-control" />
							</div> 
							<div class="col-md-12 form-group"> 
								<input type="text" name="birthdate" id="birthdate" placeholder="Birthdate *" required class="required sm-form-control" />
							</div>   
						
					</div> 		
					<div class="col_full"><button class="button full button-3d btn-sky">OK</button></div>
					</form>
				</div>  
			</div> 
		</section><!-- #content end -->

    </div><!-- #wrapper end -->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="http://telkomtesthouse.co.id/new-layout/js/jquery.js"></script>
    <script type="text/javascript" src="http://telkomtesthouse.co.id/new-layout/js/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="http://telkomtesthouse.co.id/vendor/jquerymaterial/jquery.material.form.js"></script> <!-- JQUERY MATERIAL FORM PLUGIN -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>

    <script type="text/javascript">

    $(document).ready(function() {

        $('form.material').materialForm(); // Apply material
        $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
        $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
        var payment_method = $('input[type=radio][name=payment_method]').val();
        if(payment_method == "atm"){
            $(".metodb .sm-form-control").prop('required',false);
        }else{
           $(".metodb .sm-form-control").prop('required',true);
        }
        $('input[type=radio][name=payment_method]').change(function(){
            var payment_method = $(this).val();
            console.log(payment_method);
            if(payment_method == "cc"){
                $(".metoda").css("display","none");
                $(".metodb").css("display","block");
                 $(".metodb .sm-form-control").prop('required',true);
            }else{
                $(".metodb .sm-form-control").prop('required',false);
                $(".metoda").css("display","block");
                $(".metodb").css("display","none");
            }
        });
    });

    </script> 
    
         </body>
</html>
