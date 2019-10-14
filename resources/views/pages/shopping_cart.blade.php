@extends('layouts.master')
@section('content')

	<!-- Content -->

    <div class="padding-top-180 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>SHOPPING CART</h4>
                    <hr/>
                    <div class="tab-content">
                        <div class="form-check ml-4">
                            <label class="custom-control-label" for="defaultUnchecked">
                                <input type="checkbox" class="form-check-input mt-3">
                                <a href="#"><img src="http://placehold.it/700x400" width="100" alt=""></a>                            
                                <a class="ml-3" style="font-size:20px">Kabel Koaksial RF (Kabel Feeder) <a class="text-danger" style="font-size:20px;">IDR. 1,500,000</a></a>
                            </label>
                        </div>
                        <div class="form-check ml-4">
                            <label class="custom-control-label" for="defaultUnchecked">
                                <input type="checkbox" class="form-check-input mt-3">
                                <a href="#"><img src="http://placehold.it/700x400" width="100" alt=""></a>                            
                                <a class="ml-3" style="font-size:20px">Kabel Koaksial RF (Kabel Feeder) <a class="text-danger" style="font-size:20px;">IDR. 1,500,000</a></a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 tab-content">
                    <h4 style="text-align:center">PAYMENT</h4>
                    <hr>
                    <br><br><br><br>
                    <button type="button" class="btn btn-danger pull-right">PURCHASE</button>
                </div>
            </div>
        </div>
    </div>
@stop
