@extends('backend.master')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="lnr-picture text-danger">
                </i>
            </div>
            <div>Lead Entry
            </div>
        </div>
        <div class="page-title-actions">

            <div class="d-inline-block dropdown">

            </div>
        </div>
      </div>
         </div>
            <div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Lead Entry</h5>
        <form class="needs-validation" method="post" action="{{ route('lead.store') }}" novalidate>
            @csrf
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="First name" value="Mark" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" name="lname" placeholder="Last name" value="Otto" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Phone</label>
                    <div class="input-group">
                        {{-- <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div> --}}
                        <input type="text" class="form-control" id="" name="phone" placeholder="Phone" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please Enter a phone Number.
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Address</label>
                    <input type="text" class="form-control" name="address" id="validationCustom03" placeholder="Address" required>
                    <div class="invalid-feedback">
                        Please provide a valid Address.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">District</label>
                    <input type="text" class="form-control" name="district" id="validationCustom04" placeholder="District" required>
                    <div class="invalid-feedback">
                        Please provide a valid District.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Post Code</label>
                    <input type="text" class="form-control" name="postcode" id="validationCustom05" placeholder="Post Code" required>
                    <div class="invalid-feedback">
                        Please provide a valid Postal Code.
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="validationCustom03">Details</label>
                    <textarea style="width: 100%;" class="summernote" class="form-control" rows="5" name="description"></textarea>

                    <div class="invalid-feedback">
                        Please provide a valid details.
                    </div>
                </div>

            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>

        <script>


            // Example starter JavaScript for disabling form submissions if there are invalid fields
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
        </script>

    </div>
</div>

@endsection
