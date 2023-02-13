@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">SHOP FORM</h4>

      <form class="forms-sample">
        <div class="form-group">
          <label for="exampleInputName1">Shop Logo</label>
          <input type="file" class="form-control" id="exampleInputName1" placeholder="Shop Logo">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Shop Name</label>
          <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Shop Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Owner Name</label>
          <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Owner Name">
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Gender</label>
            <select class="form-control" id="exampleSelectGender">
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>

        <div class="form-group">
          <label for="exampleInputCity1">Phone Number</label>
          <input type="number" class="form-control" id="exampleInputCity1" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="exampleInputCity1">E-mail</label>
            <input type="email" class="form-control" id="exampleInputCity1" placeholder="Email">
          </div>
        <div class="form-group">
          <label for="exampleTextarea1">Description</label>
          <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Description"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputCity1">Status</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Status">
          </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
