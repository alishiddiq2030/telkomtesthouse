@extends('layouts.master')
@section('content')

	<!-- Content -->

    <div class="padding-top-180 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>CHOOSE PAYMENT METHOD</h4>
                    <hr/>
                    <div class="tab-content">
                        <form action="">
                            <input class="ml-3" type="radio" name="payment_method" value="cc" checked> Credits
                            <input class="ml-5" type="radio" name="payment_method" value="atm"> ATM Transfer<br>
                        </form>
                        <form class="form" action="##" method="post" id="registrationForm">

                        <div class="container metodb">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm mt-3">
                                        <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name">                            
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="exp" id="exp" placeholder="Exp*">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="cvv" id="cvv" placeholder="CVV*">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="cvc" id="cvc" placeholder="CVC*">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="type" id="type" placeholder="Type*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm mt-3">
                                        <input type="text" class="form-control" name="card_number" id="card_number" placeholder="Card Number">                            
                                        <input type="text" class="form-control mt-3" name="billing" id="billing" placeholder="Billing Address">                            
                                        <input type="text" class="form-control mt-3" name="phone" id="phone" placeholder="Phone Number">                            
                                        <input type="text" class="form-control mt-3" name="email" id="email" placeholder="Email">                            
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mt-3">
                                        <input type="text" class="form-control" name="national" id="national" placeholder="National">                            
                                    </div>
                                    <div class="col-sm-6 mt-3">
                                        <input type="text" class="form-control" name="province" id="province" placeholder="Province">                            
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mt-3">
                                        <input type="text" class="form-control" name="city" id="city" placeholder="City">                            
                                    </div>
                                    <div class="col-sm-6 mt-3">
                                        <input type="text" class="form-control" name="code" id="code" placeholder="Postal Code">                            
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm mt-3">
                                        <input type="text" class="form-control" name="birth" id="birth" placeholder="Birthdate">                            
                                    </div>
                                </div>
                                <a href="#"><button style="width:100%" type="button" class="btn btn-danger mt-3">SUBMIT</button></a>
                            </div>
                        </div>
                        <div class="col-md-9 metoda">
							<h3>
                            <img src="images/mandiri.png" class="mt-3">
                            <div class="mb-1 mt-3">KCP KAMPUS TELKOM BANDUNG</div>
							<div class="mb-1">131-0096022712</div>							
							<div class="mb-1">a/n Divisi RisTI TELKOM</div>
                            </h3>
						</div>
                    </div>
                </div>
                <div class="col-md-4 tab-content">
                    <h4 style="text-align:center">PAYMENT</h4>
                    <hr>
                    <h5>Total Belanja</h5>
                    <h4 class="text-danger">IDR. 3,500,000</h4>
                    <br>
                    <a href="#"><button style="width:100%" type="button" class="btn btn-danger" disabled>CHECKOUT</button></a>
                </div>
            </div>
        </div>
    </div>

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

@stop
