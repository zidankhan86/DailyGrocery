@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Role FORM</h4>
      <form class="forms-sample" action="{{ route('role.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" name="role_name" required id="exampleInputName1" placeholder="Name">
        </div>


        <div class="form-group">
          <label for="exampleSelectGender">Status</label>
            <select class="form-control" name="status" id="exampleSelectGender" >
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
          </div>

        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
