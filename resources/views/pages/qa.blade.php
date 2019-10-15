@extends('layouts.master')

@section('content')

<div class="page-content">
        <div class="wizard-v3-content">
            <div class="wizard-form">
                <div class="wizard-header">
                    <h3>Quality Assurance Testing Process</h3>
                    <hr>
                </div>
                <form class="form-register" action="#" method="post">
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <h2>
                            <span class="step-icon"><i align="center">1</i></span>
                            <span class="step-text">About</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Name</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Address</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="email" id="email" required>
                                            <span class="label">Email</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="email" id="email" required>
                                            <span class="label">Alternate Email</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Phone</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Facsimile</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 2 -->
                        <h2>
                            <span class="step-icon"><i align="center">2</i></span>
                            <span class="step-text">About</span>
                        </h2>
                        <section>
                            <!-- <div class="inner">
                                <div class="form-row">
                                    <div id="radio">
                                        <label>Companies Type :</label>
                                        <input type="radio" name="gender" value="male" checked class="radio-1"> Male
                                        <input type="radio" name="gender" value="female"> Female
                                        <div class="col-sm-10">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Name</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <label for="date" class="special-label">Date of Birth*:</label>
                                        <select name="date" id="date">
                                            <option value="Day" disabled selected>Day</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                        </select>
                                        <select name="month" id="month">
                                            <option value="Month" disabled selected>Month</option>
                                            <option value="Feb">Feb</option>
                                            <option value="Mar">Mar</option>
                                            <option value="Apr">Apr</option>
                                            <option value="May">May</option>
                                        </select>
                                        <select name="year" id="year">
                                            <option value="Year" disabled selected>Year</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text"  id="phone" name="phone" required>
                                            <span class="label">Phone Number*</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-1">
                                        <label class="form-row-inner">
                                            <input type="text"  id="address" name="address" required>
                                            <span class="label">Address*</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                             <div class="inner">
                                <div class="form-row">
                                 <label class="col-form-label col-sm-2 pt-0">Companies Type : </label>
                                      <div class="col-sm-2">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                          <label class="form-check-label" for="gridRadios1">
                                            First radio
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                          <label class="form-check-label" for="gridRadios2">
                                            Second radio
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Name</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Address</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="email" id="email" required>
                                            <span class="label">Email</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Phone</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Facsimile</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h2>
                            <span class="step-icon"><i align="center">2</i></span>
                            <span class="step-text">About</span>
                        </h2>
                        <section>
                             <div class="inner">
                                <div class="form-row">
                                      <div class="col-sm-2">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                          <label class="form-check-label" for="gridRadios1">
                                            First radio
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                          <label class="form-check-label" for="gridRadios2">
                                            Second radio
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                         <label class="select">Test Reference</label>
                                          <select>
                                            <option>Choose STEL</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                          </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Device Name</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="email" id="email" required>
                                            <span class="label">Capacity/Speed/Rate</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Made in</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Serial Number</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Model/Type</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 4 -->
                        <h2>
                            <span class="step-icon"><i align="center">1</i></span>
                            <span class="step-text">About</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                         <label>SIUPP File</label>
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">No SIUPP</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                 <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <label for="date" class="special-label">Date of SIUPP</label>
                                        <select name="date" id="date">
                                            <option value="Day" disabled selected>Day</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                        </select>
                                        <select name="month" id="month">
                                            <option value="Month" disabled selected>Month</option>
                                            <option value="Feb">Feb</option>
                                            <option value="Mar">Mar</option>
                                            <option value="Apr">Apr</option>
                                            <option value="May">May</option>
                                        </select>
                                        <select name="year" id="year">
                                            <option value="Year" disabled selected>Year</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                         <label>SIUPP File</label>
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                         <label>SIUPP File</label>
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                         <label>SIUPP File</label>
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                         <label>SIUPP File</label>
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                         <label>SIUPP File</label>
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="email" id="email" required>
                                            <span class="label">Email</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="email" id="email" required>
                                            <span class="label">Alternate Email</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Phone</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" id="username" name="username" required>
                                            <span class="label">Facsimile</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- <h2>
                            <span class="step-icon"><i align="center">4</i></span>
                            <span class="step-text">About</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Confirm Details:</h3>
                                <div class="form-row table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr class="space-row">
                                                <th>Full Name:</th>
                                                <td id="fullname-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Email Address:</th>
                                                <td id="email-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Phone Number:</th>
                                                <td id="phone-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>User:</th>
                                                <td id="username-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Gender:</th>
                                                <td id="gender-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Address:</th>
                                                <td id="address-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Card Type:</th>
                                                <td id="pay-val">Credit Card</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section> -->
                        <!-- SECTION 1 -->
                        <h2>
                            <span class="step-icon"><i align="center">1</i></span>
                            <span class="step-text">About</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Account Information:</h3>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="email" id="email"  required>
                                            <span class="label">Email Address</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text"  id="username" name="username" required>
                                            <span class="label">Username</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="password" name="password_1" id="password_1"  required>
                                            <span class="label">Password</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="password" name="comfirm_password_1" id="comfirm_password_1"  required>
                                            <span class="label">Comfirm Password</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 1 -->
                        <h2>
                            <span class="step-icon"><i align="center">1</i></span>
                            <span class="step-text">About</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Account Information:</h3>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="email" id="email"  required>
                                            <span class="label">Email Address</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text"  id="username" name="username" required>
                                            <span class="label">Username</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="password" name="password_1" id="password_1"  required>
                                            <span class="label">Password</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="password" name="comfirm_password_1" id="comfirm_password_1"  required>
                                            <span class="label">Comfirm Password</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 1 -->
                        <h2>
                            <span class="step-icon"><i align="center">1</i></span>
                            <span class="step-text">About</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Account Information:</h3>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="email" id="email"  required>
                                            <span class="label">Email Address</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text"  id="username" name="username" required>
                                            <span class="label">Username</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="password" name="password_1" id="password_1"  required>
                                            <span class="label">Password</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="password" name="comfirm_password_1" id="comfirm_password_1"  required>
                                            <span class="label">Comfirm Password</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop