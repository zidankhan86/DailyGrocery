@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">CATEGORY FORM</h4>
      <form class="forms-sample" action="{{route ('category.store.data') }}" method="post">
        @csrf

        {{-- @if($errors->any())
        @foreach($errors->all() as $message)
        <p class="btn btn-danger">{{ $message }}</p>
        @endforeach
        @endif --}}

        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" name="name"  id="exampleInputName1" placeholder="Name">

          @error('name')
          <p class="text-danger">{{ $message }}</p>
          @enderror

        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Details</label>
          <input type="text" class="form-control" name="details" id="exampleInputEmail3" placeholder="Details">

          @error('details')
          <p class="text-warning">{{ $message }}</p>
          @enderror

        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">image</label>
          <input type="file" class="form-control" name="image" id="exampleInputPassword4" placeholder="image">
        </div>

        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
