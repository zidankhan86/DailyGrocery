@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">PRODUCT FORM</h4>

      <form class="forms-sample" action="{{ route('product.store.data') }}" method="post" enctype="multipart/form-data">
        @csrf

        @if($errors->any())
        @foreach($errors->all() as $message)
        <p class="btn btn-danger">{{ $message }}</p>
        @endforeach
        @endif


        <div class="form-group">
          <label for="exampleInputName1">Product Name</label>
          <input type="text" class="form-control" name="product_name"  id="exampleInputName1" placeholder="Product Name">
        </div>
        <div class="form-group">
            <label for="">Category Name</label>
            <select class="form-control" name="category_id" required id="">

                @foreach ($categories as $category)

                <option value="{{ $category->id }}">{{ $category->name }}</option>

                @endforeach
            </select>
          </div>
        <div class="form-group">
          <label for="">Shop Name</label>
          <input type="text" class="form-control" name="shop_name"  id="" placeholder="Shop Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Product Image</label>
          <input type="file" class="form-control" name="image" required id="exampleInputPassword4" placeholder="Shop Image">
        </div>
        <div class="form-group">
          <label for="exampleInputPrice">Price</label>
          <input type="number" class="form-control" name="price" required id="exampleInputPrice" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="">Quantity</label>
            <input type="number" class="form-control" name="quantity" required id="" placeholder="Quantity">
          </div>
        <div class="form-group">
          <label for="exampleTextarea1">Product Details</label>
          <textarea class="form-control" name="details" required id="exampleTextarea1" rows="4" placeholder="Details"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">Product Status</label>
            <input type="text" class="form-control" name="status" required  id="exampleInputPassword4" placeholder="Status">
          </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
