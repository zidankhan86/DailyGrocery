@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">PRODUCT FORM</h4>

      <form class="forms-sample" action="{{ route('product.store.data') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Product Name</label>
          <input type="text" class="form-control" name="product_name" id="exampleInputName1" placeholder="Product Name">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Category Name</label>
            <select class="form-control" name="category_id" id="">

                @foreach ($categories as $category)

                <option value="{{ $category->id }}">{{ $category->name }}</option>

                @endforeach
            </select>
          </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Shop Name</label>
          <input type="text" class="form-control" name="shop_name" id="exampleInputEmail3" placeholder="Shop Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Product Image</label>
          <input type="file" class="form-control" name="image" id="exampleInputPassword4" placeholder="Shop Image">
        </div>
        <div class="form-group">
          <label for="exampleInputCity1">Price</label>
          <input type="number" class="form-control" name="price" id="exampleInputCity1" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="exampleInputPassword4" placeholder="Quantity">
          </div>
        <div class="form-group">
          <label for="exampleTextarea1">Product Details</label>
          <textarea class="form-control" name="details" id="exampleTextarea1" rows="4" placeholder="Details"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">Product Status</label>
            <input type="text" class="form-control" name="status"  id="exampleInputPassword4" placeholder="Status">
          </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
