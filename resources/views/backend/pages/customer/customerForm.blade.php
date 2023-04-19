@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">CUSTOMER FORM</h4>

      <form class="forms-sample" action="{{route ('customer.store.data') }}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- @if($errors->any())
        @foreach($errors->all() as $message)
        <p class="btn btn-danger">{{ $message }}</p>
        @endforeach
        @endif --}}

        <div class="form-group">
          <label for="exampleInputName1">First Name</label>
          <input type="text" class="form-control" name="first_name"  id="exampleInputName1" placeholder="First Name">
          @error('first_name')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="">Last Name</label>
          <input type="text" class="form-control" name="last_name"  id="" placeholder="Last Name">

          @error('last_name')
          <span class="text-danger">{{ $message }}</span>
          @enderror

        </div>

        <div class="form-group">
          <label for="">Phone</label>
          <input type="tel" class="form-control" name="phone"  id="" placeholder="Phone">
          @error('phone')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">E-mail</label>
            <input type="email" class="form-control" name="email" required id="exampleInputEmail" placeholder="E-mail">

            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror

          </div>
          <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="image" id="" placeholder="Image">
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
