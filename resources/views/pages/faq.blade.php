@extends('layouts.master')
@section('content')

<div class="container padding-top-180 padding-bottom-180">
    <div class="row">
      <div class="col-sm-12">
        <h3>Frequently Answer Question</h3>
        <hr>
      </div>
    </div>
    <div class="row">
        <div class="col-sm-2 pt-4">
            <h5><b>Table of Content</b></h5><br>
            <a href="#">General</a><br>
            <a href="#">Trust & Safety</a><br>
            <a href="#">Services</a><br>
            <a href="#">Billing</a>
        </div>
        <div class="col-md-10 pt-4">
            <div class="accordion" id="faqExample">
                <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="text-danger">Q: How does this work?</h5>  
                            </button>
                          </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> It works using the Bootstrap 4 collapse component with cards to make a vertical accordion that expands and collapses as questions are toggled.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h5 class="text-danger">  
                            Q: What is Bootstrap 4?
                            </h5>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                        <div class="card-body">
                            Bootstrap is the most popular CSS framework in the world. The latest version released in 2018 is Bootstrap 4. Bootstrap can be used to quickly build responsive websites.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="text-danger">
                                    Q. What is another question?
                                </h5>
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to the question can go here.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h5 class="text-danger">
                                    Q. What is the next question?
                                </h5>
                            </button>
                          </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/row-->
</div>
<!--container-->

@stop