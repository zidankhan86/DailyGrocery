@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">CUSTOMER EDIT</h4>

      <form class="forms-sample" action="{{ route('customer.update',$customerData->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="exampleInputName1">First Name</label>
          <input type="text" class="form-control" value="{{$customerData->first_name}}"  name="first_name" id="exampleInputName1" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Last Name</label>
          <input type="text" class="form-control" value="{{$customerData->last_name}}" name="last_name" id="exampleInputEmail3" placeholder="Last Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Phone</label>
          <input type="number" class="form-control" value="{{$customerData->phone}}" name="phone" id="exampleInputPassword4" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">E-mail</label>
            <input type="email" class="form-control" value="{{$customerData->email}}"  name="email" id="exampleInputPassword4" placeholder="E-mail">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Image</label>
            <input type="file" class="form-control" value="{{$customerData->image}}"name="image" id="exampleInputPassword4" placeholder="Image">
          </div>

        <div class="form-group">
          <label for="exampleInputCity1">Address</label>
          <input type="text" class="form-control" value="{{$customerData->address}}" name="address" id="exampleInputCity1" placeholder="Location">
        </div>
       <button type="submit" class="btn btn-primary me-2">Update</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
