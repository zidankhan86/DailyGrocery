@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">PRODUCT EDIT</h4>

      <form class="forms-sample" action="{{ route('product.update',$productsData->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputName1">Product Name</label>
          <input type="text" class="form-control" value="{{$productsData->product_name}}" name="product_name" id="exampleInputName1" placeholder="Product Name">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Category Name</label>
            <select name="category_id" id="" class="form-control">
                @foreach ($categories as $category)

                <option value="{{ $category->id}}" {{ $category->id==$productsData->category_id ? 'selected':''}}>{{$category->name}}</option>

                @endforeach
            </select>
          </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Shop Name</label>
          <input type="text" class="form-control" value="{{$productsData->shop_name}}" name="shop_name" id="exampleInputEmail3" placeholder="Shop Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Product Image</label>
          <input type="file" class="form-control" value="{{$productsData->image }}" name="image" id="exampleInputPassword4" placeholder="Shop Image">
        </div>
        <div class="form-group">
          <label for="exampleInputCity1">Price</label>
          <input type="number" class="form-control" value="{{ $productsData->price }}" name="price" id="exampleInputCity1" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">Quantity</label>
            <input type="number" class="form-control" value="{{ $productsData->quantity }}" name="quantity" id="exampleInputPassword4" placeholder="Quantity">
          </div>
        <div class="form-group">
          <label for="exampleTextarea1">Product Details</label>
          <textarea value="{{ $productsData->details }}" class="form-control"  name="details" id="exampleTextarea1" rows="4" placeholder="Details">

          </textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">Product Status</label>
            <input type="text" class="form-control" value="{{ $productsData->status }}" name="status"  id="exampleInputPassword4" placeholder="Status">
          </div>
        <button type="submit" class="btn btn-primary me-2">UPDATE CHANGE</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
