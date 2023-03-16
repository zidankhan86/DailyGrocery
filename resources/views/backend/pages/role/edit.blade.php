@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Role Edit</h4>
      <form class="forms-sample" action="{{route ('role.update',$roleData->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" value="{{$roleData->role_name}}" name="role_name" id="exampleInputName1" placeholder="Name">
        </div>


        <div class="form-group">
          <label for="exampleSelectGender">Status</label>
            <select class="form-control" name="status" id="exampleSelectGender" >
              <option @if($roleData->status == 'Active') selected @endif value="Active">Active</option>
              <option @if($roleData->status == 'Inactive') selected @endif value="Inactive">Inactive</option>
            </select>
          </div>

        <button type="submit" class="btn btn-primary me-2">UPDATE CHANGES</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
