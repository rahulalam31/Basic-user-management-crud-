@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listing</div>

                <div class="card-body">
                    <form class="needs-validation"  action="{{route('listings.store')}}" method="post">@csrf
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="firstName" placeholder="Company Name" value="" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="phone">Phone</label>
                            <input type="integer" name="phone" class="form-control" id="lastName" placeholder="Contact number" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="email">Email </label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
                          <div class="invalid-feedback">
                            Please enter a valid email address.
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="website">Website </label>
                          <input type="text" name="website" class="form-control" id="email" placeholder="www.example.com" required>
                          <div class="invalid-feedback">
                            Please enter your website.
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="address">Address</label>
                          <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required>
                          <div class="invalid-feedback">
                            Please enter your address.
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="bio">Bio</span></label>
                          <input type="text" name="bio" class="form-control" id="address2" placeholder="Business Bio">
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Create Listing</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection
