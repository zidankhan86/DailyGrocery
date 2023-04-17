@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Blog FORM</h4>

      <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
        @csrf

        @if($errors->any())
        @foreach($errors->all() as $message)
        <p class="btn btn-danger">{{ $message }}</p>
        @endforeach
        @endif


        <div class="form-group">
          <label for="exampleInputName1">Blog Description</label>
          <input type="text" class="form-control" name="product_name"  id="exampleInputName1" placeholder="Product Name">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword4">Product Image</label>
          <input type="file" class="form-control" name="image" required id="exampleInputPassword4" placeholder="Shop Image">
        </div>

        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
