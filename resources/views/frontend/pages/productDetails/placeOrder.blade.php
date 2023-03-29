@extends('frontend.index')
@section('content')
<br><br><br>
<form action="{{route ('pay.now') }}" method="post">
    @csrf
<section class="order-form m-4">
    <div class="container pt-4">
        <div class="row">
            <div class="col-12 px-4">
                <h1 style="text-align: center" class="btn-info">DailyGrocery</h1><br>
                <h4>Please Fillup Billing Information</h4>

                <hr class="mt-1" />
            </div>

            <div class="col-12">
                <div class="row mx-4">
                    <div class="col-12">
                        <label class="order-form-label">Name</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-outline">
                            <input type="text" name="f_name" id="form1" class="form-control order-form-input" placeholder="First Name" />
                        </div>
                    </div>
                    <div class="col-sm-6 mt-2 mt-sm-0">
                        <div class="form-outline">
                            <input type="text" name="l_name" id="form2" class="form-control order-form-input" placeholder="Last Name" />

                        </div>
                    </div>
                </div>

                <div class="row mt-3 mx-4">
                    <div class="col-12">
                        <label class="order-form-label">Enter Email Address</label>
                    </div>
                    <div class="col-12">
                        <div class="form-outline">
                            <input type="text" name="email" id="form3" class="form-control order-form-input" placeholder="Email" />
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mx-4">
                    <div class="col-12">
                        <label class="order-form-label">Enter Phone Number</label>
                    </div>
                    <div class="col-12">
                        <div class="form-outline">
                            <input type="phone" name="phone" id="form3" class="form-control order-form-input" placeholder="Phone Number" />
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mx-4">
                    <div class="col-12">
                        <label class="order-form-label" for="date-picker-example">Date</label>
                    </div>
                    <div class="col-12">
                        <div class="form-outline datepicker" data-mdb-toggle-button="false">
                            <input name="date"
                            type="datetime-local" class="form-control order-form-input" id="datepicker1" data-mdb-toggle="datepicker" />
                            <label for="datepicker1" class="form-label">Select a date</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 mx-4">
                    <div class="col-12">
                        <label class="order-form-label">Adress</label>
                    </div>
                    <div class="col-12">
                        <div class="form-outline">
                            <input type="text" id="form5" name="address" class="form-control order-form-input" placeholder="House /Area/Road"/>
                            <label class="form-label" for="form5">Street Address</label>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="form-outline">
                            <input type="text" name="road" id="form6" class="form-control order-form-input" placeholder="Road" />
                            <label class="form-label" for="form6">Street Address Line 2</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-2 pe-sm-2">
                        <div class="form-outline">
                            <input type="text" name="city" id="form7" class="form-control order-form-input" placeholder="City" />
                            <label class="form-label" for="form7">City</label>
                        </div>
                    </div>


                    <div class="col-sm-6 mt-2 ps-sm-0">
                        <div class="form-outline">
                            <select name="country" id="" class="form-control">
                                <option value="bangladesh">Bangladesh</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">

                    <div class="col-12">
                        <button type="submit" id="btnSubmit" class="btn btn-primary d-block mx-auto btn-submit">Pay Now </button>
                    </div>
                    <div>
                        <button type="submit" id="btnSubmit" class="btn btn-danger d-block mx-auto btn-submit">COD </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
  </section>
</form>



@endsection
