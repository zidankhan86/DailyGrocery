@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">CUSTOMER FORM</h4>

      <form class="forms-sample" action="{{route ('customer.store.data') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">First Name</label>
          <input type="text" class="form-control" name="first_name" required id="exampleInputName1" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Last Name</label>
          <input type="text" class="form-control" name="last_name" id="exampleInputEmail3" placeholder="Last Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Phone</label>
          <input type="number" class="form-control" name="phone" required id="exampleInputPassword4" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">E-mail</label>
            <input type="email" class="form-control" name="email" required id="exampleInputPassword4" placeholder="E-mail">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Image</label>
            <input type="file" class="form-control" name="image" id="exampleInputPassword4" placeholder="Image">
          </div>

        <div class="form-group">
          <label for="exampleInputCity1">Address</label>
          <input type="text" class="form-control" name="address" required id="exampleInputCity1" placeholder="Location">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
