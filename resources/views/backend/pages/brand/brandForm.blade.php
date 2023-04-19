@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">BRAND FORM</h4>


      <form class="forms-sample" action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- @if($errors->any())
        @foreach($errors->all() as $message)
        <p class="alert alert-danger">{{$message}}</p>
        @endforeach
          @endif --}}


        <div class="form-group">
          <label for="exampleInputName1">Brand Name</label>
          <input type="text" class="form-control" name="name"  id="exampleInputName1"  placeholder="Name">

          @error('name')
          <p class="text-danger">{{ $message }}</p>
          @enderror

        </div>

        <div class="form-group">
            <label for="exampleInputName1">Brand logo</label>
            <input type="file" class="form-control" name="logo"  id="exampleInputName1" placeholder="Name">

            @error('logo')
          <p class="text-danger">{{ $message }}</p>
          @enderror

          </div>

        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
