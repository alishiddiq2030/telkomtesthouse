@extends('layouts.master')
@section('content')

	<!-- Content -->

    <div class="padding-top-180">
        <div class="container">
            <div class="row">
                <div class="col-md mb-4">
                    <h4>PROCESS</h4>
                    <hr/>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <img src="images/qa.jpg" style="width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <h4>Quality Assurance (QA)</h4>
                            <p class="mt-3">Quality assurance testing of telecomunication device that is conducted based on Telecommunication Spesification (STEL) reference, and a certificate is issued by PT. Telkom Indonesia, Tbk to any comply devices with validity period.</p>
                            <button type="button" class="btn btn-danger">PROCESS</button>
                        </div> 
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-4">
                            <img src="images/ta.jpg" style="width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <h4>Type Approval (TA)</h4>
                            <p class="mt-3">Telecommunication device testing that is conducted based on covering letter of device testing (known as SP3) issued by Directorate General of Resources and Equipment of Post and Information Technology (DitjenSDPPI). This test uses reference such as Ministry of Communication and Informatics decree (Permenkominfo), regulation of Ditjen SDPPI (Perdirjen), or other references defined by them.</p>
                            <button type="button" class="btn btn-danger">PROCESS</button>
                        </div> 
                    </div>
                    
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <img src="images/vt.jpg" style="width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <h4>Voluntary Test (VT)</h4>
                            <p class="mt-3">Telecommunication device testing that is order-based by customer. Test is conducted based upon mutually agreed reference among user (Operational Division/Headquarter/Telkom Group) and Divisi Digital Service (DDS) accompanied by office memo.</p>
                            <button type="button" class="btn btn-danger">PROCESS</button>
                        </div> 
                    </div>  

                    <div class="row mt-5 mb-5">
                        <div class="col-md-4">
                            <img src="images/cal.jpg" style="width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <h4>Calibration (CAL)</h4>
                            <p class="mt-3">Calibration of measurement tools.</p>
                            <button type="button" class="btn btn-danger">PROCESS</button>
                        </div> 
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- Get the element with id="defaultOpen" and click on it -->
    <script>
        document.getElementById("defaultOpen").click();
    </script>

@stop
