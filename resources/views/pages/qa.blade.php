@extends('layouts.master')

@section('content')

<div class="step-main">
        <div class="step-container">
            <h4>Quality Assurance Testing Process </h4>
            <hr>
            <form method="POST" id="signup-form" class="signup-form">
                <h3>
                    <span class="title_text">Data Registrasi</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="username" class="form-label">Name</label>
                            <input type="text" name="name" id="name" placeholder="Name" />
                        </div>
                         <div class="form-group">
                            <label for="username" class="form-label">Address</label>
                            <input type="text" name="address" id="address" placeholder="Adress" />
                        </div>
                        <div class="form-group">
                            <label for="mail" class="form-label">Email</label>
                            <input type="mail" name="mail" id="mail" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Alternate Email</label>
                            <input type="alter-email" name="alter-email" id="alter-email" placeholder="Alternate Email" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Phone</label>
                            <input type="phone" name="phone" id="phone" placeholder="Phone" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Facsimile</label>
                            <input type="fac" name="fac" id="fac" placeholder="Facsimile" />
                        </div>
                        <!-- <div class="form-group form-password">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" data-indicator="pwindicator" />
                            <div id="pwindicator">
                                <div class="bar-strength">
                                    <div class="bar-process">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                                <div class="label"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="your_avatar" class="form-label">Select avatar</label>
                            <div class="form-file">
                                <input type="file" name="your_avatar" id="your_avatar" class="custom-file-input" />
                                <span id='val'></span>
                                <span id='button'>Select File</span>
                            </div>
                        </div> -->
                    </div>
                    <div class="fieldset-footer">
                        <span>Step 1 of 7</span>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text">Data Perusahaan</span>
                </h3>
                <fieldset>

                    <div class="fieldset-content">
    
                        <div class="form-group">
                            <label for="username" class="form-label">Name</label>
                            <input type="text" name="name" id="name" placeholder="Name" />
                        </div>
                         <div class="form-group">
                            <label for="username" class="form-label">Address</label>
                            <input type="text" name="address" id="address" placeholder="Adress" />
                        </div>
                        <div class="form-group">
                            <label for="mail" class="form-label">Email</label>
                            <input type="mail" name="mail" id="mail" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Alternate Email</label>
                            <input type="alter-email" name="alter-email" id="alter-email" placeholder="Alternate Email" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Phone</label>
                            <input type="phone" name="phone" id="phone" placeholder="Phone" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Facsimile</label>
                            <input type="fac" name="fac" id="fac" placeholder="Facsimile" />
                        </div>
                    </div>

                    <div class="fieldset-footer">
                        <span>Step 2 of 7</span>
                    </div>

                </fieldset>

                <h3>
                    <span class="title_text">Data Perangkat</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-radio">
                            <label for="payment_type">Payment Type</label>
                            <div class="form-radio-flex">
                                <input type="radio" name="payment_type" id="payment_visa" value="payment_visa" checked="checked" />
                                <label for="payment_visa"><img src="images/icon-visa.png" alt=""></label>
    
                                <input type="radio" name="payment_type" id="payment_master" value="payment_master" />
                                <label for="payment_master"><img src="images/icon-master.png" alt=""></label>
    
                                <input type="radio" name="payment_type" id="payment_paypal" value="payment_paypal" />
                                <label for="payment_paypal"><img src="images/icon-paypal.png" alt=""></label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="credit_card" class="form-label">Credit Card</label>
                                <input type="text" name="credit_card" id="credit_card" />
                            </div>
                            <div class="form-group">
                                <label for="cvc" class="form-label">CVC</label>
                                <input type="text" name="cvc" id="cvc" />
                            </div>
                        </div>
                        <div class="form-date">
                            <label for="expiry_date">Expiration Date</label>
                            <div class="form-flex">
                                <div class="form-date-item">
                                    <select id="expiry_date" name="expiry_date"></select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                                <div class="form-date-item">
                                    <select id="expiry_year" name="expiry_year"></select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name_of_card" class="form-label">Name of card</label>
                            <input type="text" name="name_of_card" id="name_of_card" />
                        </div>
                    </div>

                    <div class="fieldset-footer">
                        <span>Step 3 of 7</span>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text">Data Lampiran</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" placeholder="User Name" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" placeholder="Your Email" />
                        </div>
                        <div class="form-group form-password">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" data-indicator="pwindicator" />
                            <div id="pwindicator">
                                <div class="bar-strength">
                                    <div class="bar-process">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                                <div class="label"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="your_avatar" class="form-label">Select avatar</label>
                            <div class="form-file">
                                <input type="file" name="your_avatar" id="your_avatar" class="custom-file-input" />
                                <span id='val'></span>
                                <span id='button'>Select File</span>
                            </div>
                        </div>
                    </div>
                    <div class="fieldset-footer">
                        <span>Step 4 of 7</span>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text">Preview</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" placeholder="User Name" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" placeholder="Your Email" />
                        </div>
                        <div class="form-group form-password">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" data-indicator="pwindicator" />
                            <div id="pwindicator">
                                <div class="bar-strength">
                                    <div class="bar-process">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                                <div class="label"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="your_avatar" class="form-label">Select avatar</label>
                            <div class="form-file">
                                <input type="file" name="your_avatar" id="your_avatar" class="custom-file-input" />
                                <span id='val'></span>
                                <span id='button'>Select File</span>
                            </div>
                        </div>
                    </div>
                    <div class="fieldset-footer">
                        <span>Step 5 of 7</span>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text">Unggah Form Testing</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" placeholder="User Name" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" placeholder="Your Email" />
                        </div>
                        <div class="form-group form-password">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" data-indicator="pwindicator" />
                            <div id="pwindicator">
                                <div class="bar-strength">
                                    <div class="bar-process">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                                <div class="label"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="your_avatar" class="form-label">Select avatar</label>
                            <div class="form-file">
                                <input type="file" name="your_avatar" id="your_avatar" class="custom-file-input" />
                                <span id='val'></span>
                                <span id='button'>Select File</span>
                            </div>
                        </div>
                    </div>
                    <div class="fieldset-footer">
                        <span>Step 6 of 7</span>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text">Selesai</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" placeholder="User Name" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" placeholder="Your Email" />
                        </div>
                        <div class="form-group form-password">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" data-indicator="pwindicator" />
                            <div id="pwindicator">
                                <div class="bar-strength">
                                    <div class="bar-process">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                                <div class="label"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="your_avatar" class="form-label">Select avatar</label>
                            <div class="form-file">
                                <input type="file" name="your_avatar" id="your_avatar" class="custom-file-input" />
                                <span id='val'></span>
                                <span id='button'>Select File</span>
                            </div>
                        </div>
                    </div>
                    <div class="fieldset-footer">
                        <span>Step 7 of 7</span>
                    </div>
                </fieldset>

            </form>
        </div>

    </div>

@stop