@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="airplay"></i></span></span>Basic Details</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <form class="needs-validation" novalidate="">
                    <h5 class="hk-sec-title">Basic Details</h5>
                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">Project Type</label>
                            <select class="form-control custom-select" required="">
                                <option value="" style="color:#e0e3e4"> Select</option>
                                <option value="1">Government</option>
                                <option value="2">Private</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">Project Name</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Project Name" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">Project Category</label>
                            <select class="form-control custom-select" required="">
                                <option value="" style="color:#e0e3e4"> Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">Project Sub Category</label>
                            <select class="form-control custom-select" required="">
                                <option value="" style="color:#e0e3e4"> Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">Total Resource Allocated</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Total Resource Allocated" required="">
                        </div>
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault03">Technology Used</label>
                            <select class="form-control custom-select" required="">
                                <option value="" style="color:#e0e3e4"> Select</option>
                                <option value="1">PHP</option>
                                <option value="2">JAVA</option>
                                <option value="3">ANDROID</option>
                                <option value="4">DOT-NET</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault03">Project Incharge</label>
                            <input type="text" class="form-control" id="validationDefault03" placeholder="Project Incharge" required="">
                        </div>
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault03">Durations</label>
                            <select class="form-control custom-select" required="">
                                <option value="" style="color:#e0e3e4"> Select</option>
                                <option value="1">Less Than 6 Months</option>
                                <option value="2">6 Months to 1 Year</option>
                                <option value="3">1 Year to 2 Years</option>
                                <option value="4">2 Years to 3 Years</option>
                                <option value="5">More than 3 Years</option>
                            </select>
                        </div>
                    </div>
                    <h5 class="hk-sec-title" style="margin-top: 20px;">Agreement Details</h5>
                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">MOU Signed</label>
                            <select class="form-control custom-select" required="">
                                <option value="" style="color:#e0e3e4"> Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">Customer Signatory Name</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Customer Signatory Name" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">MOU Sign Date</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="MOU Sign Date" required="">
                        </div>
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">Valid Upto</label>
                            <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018">
                        </div>
                    </div>
                    <h5 class="hk-sec-title" style="margin-top:20px;">Customer Details</h5>
                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">Customer Name</label>
                            <select class="form-control custom-select" required="">
                                <option value="" style="color:#e0e3e4"> Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">Customer Contact Person</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Customer Contact Person" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">Contact Person Mobile</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Contact Person Mobile" required="">
                        </div>
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">Contact Person Email</label>
                            <input type="email" class="form-control" id="validationDefault01" placeholder="Contact Person Email" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault01">Customer GSTIN No</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Customer GSTIN No" required="">
                        </div>
                        <div class="col-md-6 mb-10">
                            <label for="validationDefault03">Designation</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Designation" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-10">
                            <label for="validationDefault03">Customer Address</label>
                            <textarea class="form-control mt-15" rows="3" placeholder="Customer Address"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </section>
        </div>
    </div>
    <!-- /Row -->
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        (function() {
            'use strict';
            window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
            }, false);
            });
            }, false);
        })();
    });
</script>
@endsection