@extends('layouts.master')

@section('content')

<div class="page-content">
        <div class="wizard-v3-content">
            <div class="wizard-form">
                <div class="wizard-header">
                    <h4 class="heading mt-2">QUALITY ASSURANCE TESTING PROCESS</h4>
                </div>
                <form class="form-register" action="#" method="post">
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <h2>
                            <span class="step-icon"><i align="center">1</i></span>
                            <span class="step-text"><p style="font-size:11px">&nbsp;&nbsp;&nbsp;&nbsp;Data<br>Registrasi</p></span>
                        </h2>
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="inner col-md-6 ">
                                        <div class="form-row">
                                            <div class="form-holder form-holder-2">
                                                <div class="form-row-inner">
                                                    <input type="text" class="form-control" required>
                                                    <span class="label">Name</span>
                                                    <span class="border"></span>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-holder form-holder-2">
                                                <div class="form-row-inner">
                                                    <input type="text" class="form-control" required>
                                                    <span class="label">Email</span>
                                                    <span class="border"></span>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-holder form-holder-2">
                                                <div class="form-row-inner">
                                                    <input type="text" class="form-control" required>
                                                    <span class="label">Phone</span>
                                                    <span class="border"></span>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner col-md-6">
                                        <div class="form-row">
                                            <div class="form-holder form-holder-2">
                                                <div class="form-row-inner">
                                                    <input type="text" class="form-control" required>
                                                    <span class="label">Address</span>
                                                    <span class="border"></span>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-holder form-holder-2">
                                                <div class="form-row-inner">
                                                    <input type="text" class="form-control" required>
                                                    <span class="label">Alternate Email</span>
                                                    <span class="border"></span>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-holder form-holder-2">
                                                <div class="form-row-inner">
                                                    <input type="text" class="form-control" required>
                                                    <span class="label">Facsimile</span>
                                                    <span class="border"></span>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 2 -->
                        <h2>
                            <span class="step-icon"><i align="center">2</i></span>
                            <span class="step-text"><p style="font-size:11px">&nbsp;&nbsp;&nbsp;&nbsp;Data<br>Perusahaan</p></span>
                        </h2>
                        <section>
                        <div class="container">
                            <div class="row">
                                <div class="form-row col-md-12 mb-4">
                                    <div class="col-form-label col-sm-2 pt-0">Companies Type : </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <div class="form-check-label" for="gridRadios1">
                                            Agent/Distributor
                                        </div>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <div class="form-check-label" for="gridRadios2">
                                            Manufacture
                                        </div>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <div class="form-check-label" for="gridRadios2">
                                            User/Private
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner col-md-6">
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <div class="form-row-inner">
                                                <input type="text" class="form-control" required>
                                                <span class="label">Name</span>
                                                <span class="border"></span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <div class="form-row-inner">
                                                <input type="text" class="form-control" name="email" id="email" required>
                                                <span class="label">Email</span>
                                                <span class="border"></span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <div class="form-row-inner">
                                                <input type="text" class="form-control" required>
                                                <span class="label">Facsimile</span>
                                                <span class="border"></span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner col-md-6">                                
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <div class="form-row-inner">
                                                <input type="text" class="form-control" required>
                                                <span class="label">Address</span>
                                                <span class="border"></span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <div class="form-row-inner">
                                                <input type="text" class="form-control" required>
                                                <span class="label">Phone</span>
                                                <span class="border"></span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        <!-- SECTION 3 -->
                        <h2>
                            <span class="step-icon"><i align="center">3</i></span>
                            <span class="step-text"><p style="font-size:11px">&nbsp;&nbsp;&nbsp;&nbsp;Data<br>Perangkat</p></span>
                        </h2>
                        <section>
                        <div class="container">
                            <div class="row">
                                <div class="form-row col-md-12 mb-4">
                                    <div class="col-sm-2 ml-4">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <div class="form-check-label" for="gridRadios1">
                                            Telkom's Lab Testing
                                        </div>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <div class="form-check-label" for="gridRadios2">
                                            Online Testing
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner col-md-6">
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <label class="inner-choose">
                                            <label class="select">Test Reference</label>
                                            <select>
                                                <option>--Choose STEL--</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <div class="form-row-inner">
                                                <input type="text" class="form-control" name="email" id="email" required>
                                                <span class="label">Capacity/Speed/Rate</span>
                                                <span class="border"></span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <div class="form-row-inner">
                                                <input type="text" class="form-control" required>
                                                <span class="label">Serial Number</span>
                                                <span class="border"></span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner col-md-6 mt-5">
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <div class="form-row-inner">
                                                <input type="text" class="form-control" required>
                                                <span class="label">Device Name</span>
                                                <span class="border"></span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <div class="form-row-inner">
                                                <input type="text" class="form-control" required>
                                                <span class="label">Made in</span>
                                                <span class="border"></span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <div class="form-row-inner">
                                                <input type="text" class="form-control" required>
                                                <span class="label">Model/Type</span>
                                                <span class="border"></span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        <!-- SECTION 4 -->
                        <h2>
                            <span class="step-icon"><i align="center">4</i></span>
                            <span class="step-text"><p style="font-size:11px">&nbsp;&nbsp;&nbsp;&nbsp;Data<br>Lampiran</p></span>
                        </h2>
                        <section>
                        <div class="container">
                            <div class="row">
                                <div class="inner col-md-6">
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2 mb-5">
                                            <div>SIUPP File</div>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2 mb-5">
                                            <div>Date of SIUPP</div>
                                            <input size="16" type="text" class="form-control" value="2012-06-15" readonly class="form_datetime">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2 mb-5">
                                            <div>Date of Quality System Certificate File</div>
                                            <input size="16" type="text" class="form-control" value="2012-06-15" readonly class="form_datetime">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2 mb-5">
                                            <div>Test Reference</div>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2 mb-5">
                                            <div>Another File</div>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="inner col-md-6 mt-5">
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2 mb-4">
                                            <div class="form-row-inner">
                                                <input type="text" class="form-control" required>
                                                <span class="label">No SIUPP</span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2 mb-5">
                                            <div>Quality System Certificate File</div>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2 mb-5">
                                            <div>NPWP File</div>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2 mb-5">
                                            <div>Support Principals</div>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        <!-- SECTION 5 -->
                        <h2>
                            <span class="step-icon"><i align="center">5</i></span>
                            <span class="step-text"><p style="font-size:11px">Preview</p></span>
                        </h2>
                         <section>
                            <div class="inner-prev">

                                <h3>Application's Data</h3>
                                <div class="form-row table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr class="space-row">
                                                <th>Name</th>
                                                <td>teamsopurel@gmail.com</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Address</th>
                                                <td>Jl. Pager Gunung No. 3, Bandung, 40132</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Phone</th>
                                                <td>08986342111</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Facsimile</th>
                                                <td>-</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Email</th>
                                                <td>teamsopurel@gmail.com</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h3>Company's Data (Agent)</h3>
                                <div class="form-row table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr class="space-row">
                                                <th>Device Name</th>
                                                <td>teamsopurel@gmail.com</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Brand Name</th>
                                                <td>Jl. Pager Gunung No. 3, Bandung, 40132</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Model/Type</th>
                                                <td>08986342111</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Capacity/Speed/Rate </th>
                                                <td>teamsopurel@gmail.com</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Test Referemce</th>
                                                <td>Jl. Pager Gunung No. 3, Bandung, 40132</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Serial Number</th>
                                                <td>08986342111</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Made in</th>
                                                <td>teamsopurel@gmail.com</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    <h3>Device's Data (Telkom's Lab Testing)</h3>
                                <div class="form-row table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr class="space-row">
                                                <th>Name</th>
                                                <td>teamsopurel@gmail.com</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Address</th>
                                                <td>Jl. Pager Gunung No. 3, Bandung, 40132</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Phone</th>
                                                <td>08986342111</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Email</th>
                                                <td>teamsopurel@gmail.com</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    <h3>Appendix's Document</h3>
                                <div class="form-row table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr class="space-row">
                                                <th>SIUPP File</th>
                                                <td>Batere Asam Timbal Berventilasi Statsioner</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>No. SIUPP</th>
                                                <td>Brand</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Date of SIUPP</th>
                                                <td>L1234</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Quality System Certificate</th>
                                                <td>3.0</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Quality System Certificate File</th>
                                                <td>STEL U-003</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>No. SIUPP</th>
                                                <td>Brand</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Date of SIUPP</th>
                                                <td>L1234</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Quality System Certificate</th>
                                                <td>3.0</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>SIUPP File</th>
                                                <td>Batere Asam Timbal Berventilasi Statsioner</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>No. SIUPP</th>
                                                <td>Brand</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Date of SIUPP</th>
                                                <td>L1234</td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Quality System Certificate</th>
                                                <td>3.0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 1 -->
                        <h2>
                            <span class="step-icon"><i align="center">6</i></span>
                            <span class="step-text"><p style="font-size:11px">&nbsp;&nbsp;Unggah<br>Form Testing</p></span>
                        </h2>
                        <section>
                            <div class="inner">
                            <section>
                            <div class="container">
                                <!-- For demo purpose -->
                                <div class="row text-center text-white">
                                <div class="col-lg-10 mx-auto">
                                    <h3 class="display-4">Upload Files </h3>
                                </div>
                                </div>
                                <!-- End -->


                                <div class="row">
                                <div class="col-lg-5 mx-auto">
                                    <div class="p-3 bg-white shadow rounded-lg">

                                    <!-- Default bootstrap file upload-->

                                    <h6 class="text-center mb-4 text-muted">
                                        Upload your testing form here!
                                    </h6>

                                    <!-- Custom bootstrap upload file-->
                                    <div for="fileUpload" class="file-upload btn btn-light btn-block rounded-pill shadow"><i class="fa fa-upload mr-2"></i>Browse for file ...
                                        <input id="fileUpload" type="file">
                                    </div>
                                    <button class="btn btn-danger mt-3 mr-2" style="width:200px">Upload Now</button>
                                    <button class="btn btn-light mt-3" style="width:200px">Upload Later</button>
                                    <!-- End -->

                                    </div>
                                </div>
                                </div>
                            </div>
                            </section>

                            </div>
                        </section>
                        <!-- SECTION 1 -->
                        <h2>
                            <span class="step-icon"><i align="center">7</i></span>
                            <span class="step-text"><p style="font-size:11px">&nbsp;&nbsp;Selesai</p></span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3 style="text-align:center; color:#8D8D8D;" class="mt-3">Thank you, your registration will be processed further</h3>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop