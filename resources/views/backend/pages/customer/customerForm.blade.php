@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">CUSTOMER FORM</h4>

      <form class="forms-sample">
        <div class="form-group">
          <label for="exampleInputName1">First Name</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Last Name</label>
          <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Last Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Phone</label>
          <input type="number" class="form-control" id="exampleInputPassword4" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">E-mail</label>
            <input type="email" class="form-control" id="exampleInputPassword4" placeholder="E-mail">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Image</label>
            <input type="file" class="form-control" id="exampleInputPassword4" placeholder="Image">
          </div>

        <div class="form-group">
          <label for="exampleInputCity1">Address</label>
          <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
